<?php

namespace App\Http\Controllers;

use App\Models\Newsletter;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Spatie\Analytics\Facades\Analytics;
use Spatie\Analytics\Period;
use Google\Analytics\Data\V1beta\Filter;
use Google\Analytics\Data\V1beta\FilterExpression;
use Google\Analytics\Data\V1beta\Filter\StringFilter;
use Google\Analytics\Data\V1beta\Filter\StringFilter\MatchType;

class DashboardController extends Controller
{
    public function index()
    {
        
        $published = DB::table('newsletters')->where('is_published', '=', 1)->count();
        $pendingPublished = DB::table('newsletters')->where('is_published', '=', 0)->count();
        /*
        SELECT count(u.id) as count,MONTH(created_at) as month
        FROM `users` u 
        INNER JOIN model_has_roles mhr ON u.id = mhr.model_id
        WHERE mhr.role_id = 2
        GROUP BY MONTH(created_at)
        ORDER BY MONTH(created_at) ASC
        */
   
        $subscribersData = DB::table('users')
            ->join('model_has_roles', 'users.id', '=', 'model_has_roles.model_id')
            ->select(DB::raw('count(users.id) as count'), DB::raw('MONTH(users.created_at) as month'))
            ->where('model_has_roles.role_id', '=', 2)
            ->groupByRaw('MONTH(created_at)')
            ->orderByRaw('MONTH(created_at) ASC')
            ->get()->pluck('count')->toArray();
        $subscribers = collect($subscribersData)->map(function ($x) {
            return (array)$x;
        })->toArray();
        $subscribers = json_encode($subscribers);

        $adminData = DB::table('users')
            ->join('model_has_roles', 'users.id', '=', 'model_has_roles.model_id')
            ->select(DB::raw('count(users.id) as count'), DB::raw('MONTH(users.created_at) as month'))
            ->where('model_has_roles.role_id', '=', 1)
            ->groupByRaw('MONTH(created_at)')
            ->orderByRaw('MONTH(created_at) ASC')
            ->get()->pluck('count')->toArray();
        $admins = collect($adminData)->map(function ($x) {
            return (array)$x;
        })->toArray();
        $admins = json_encode($admins);

             /*
        SELECT s.sector,count(*) as total 
        FROM users u
        JOIN sectors s ON u.sector = s.sectorId  
        GROUP BY sector;
        */

        $sectorData = DB::table('users')
            ->join('sectors', 'users.sector', '=', 'sectors.sectorId')
            ->select(DB::raw('sectors.sector as name'),DB::raw('count(users.id) as data'))
            ->groupBy('sectors.sector')
            ->get()->toArray();
        $sector = collect($sectorData)->map(function ($x) {
            return (array)$x;
        })->toArray();
        $sectors = json_encode($sector);

        $period = Period::days(30);

        $analyticsData = Analytics::get($period,$metrics = ['eventCountPerUser','totalUsers'],$dimensions= ['eventName'],$limit = 1000)->toArray();
        //dd($analyticsData);
        /*
        $filterAnalyticsData = array_filter($analyticsData, function ($var) {
            return (strpos($var, 'newsletter_') === false);
        });
        */

        $filterAnalyticsData = array_filter($analyticsData, function ($value) {
            return (str_contains($value['eventName'], 'newsletter_') === true);
        });

        $refinedFilterAnalyticsData = [];

        foreach($filterAnalyticsData as $key => $value) {

            array_push($refinedFilterAnalyticsData,[
                 [
                   'file'=> $value['eventName'],
                   'totalUsers' => $value['totalUsers'],
               'eventCountPerUser' => $value['eventCountPerUser'],
            ]
             
                
            ]);
            

        }

       // dd($refinedFilterAnalyticsData);

        $refinedFilterAnalyticsData = json_encode($refinedFilterAnalyticsData,JSON_NUMERIC_CHECK);
    
        return view('dashboard', compact('published', 'pendingPublished', 'subscribers', 'admins','sectors','refinedFilterAnalyticsData'));
    }


}
