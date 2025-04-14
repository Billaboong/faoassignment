<?php
namespace App\Http\Controllers;
 
 use App\DataTables\UsersDataTable;
 use Yajra\DataTables\Facades\DataTables;
 use App\Models\User;
 use Illuminate\Support\Facades\Cache;
 use Illuminate\Support\Facades\DB;
 ini_set('memory_limit','5120M'); //To prevent memory timeout  
 class UsersController extends Controller
 {
     public function indexwe(UsersDataTable $dataTable)
     {
         //return $dataTable->render('profile.index');
         //return DataTables::eloquent(User::query())->toJson();
        // return DataTables::make(User::query())->toJson();
     }
     public function index()
    {   
       
    }

    public function getUsersWithoutCache()
    {
    
        $startTime = microtime(true); // start timer
        $users = DB::table('users')
        ->select('users.name','users.email','users.created_at')
        ->where('users.status', '=', 0) // Get active beneficiaries
        ->limit(1000000)
        ->get(); 
        $totalTime = microtime(true) - $startTime; // end timer
    
        $response =  [
            'totalTime' => $totalTime,
            
        ];

        
        return $response;

    }

    public function getUsersWithCache()
    {
        $startTime = microtime(true); // start timer
        $users = Cache::remember('users',600, function() {
            return DB::table('users')
            ->select('users.name','users.email','users.created_at')
            ->where('users.status', '=', 0) // Get active beneficiaries
            ->limit(1000000)
            ->get(); 
        });
        $totalTime = microtime(true) - $startTime; // end timer

        $response = [
            'totalTime' => $totalTime,
           
        ];

        return $response;

        
    }

    public function performanceView()
    {
        $count = DB::table('users')
              ->select('users.name','users.email','users.created_at')
              ->where('users.status', '=', 0) // Get active beneficiaries
              ->get()->count();
        $dataWithoutCache = $this->getUsersWithoutCache();
        $dataWithCache = $this->getUsersWithCache();

        return view('performance.index', [
            'dataWithoutCache' => $dataWithoutCache,
            'dataWithCache' => $dataWithCache,
            'recordsCount' => $count
        ]);

    }
 }