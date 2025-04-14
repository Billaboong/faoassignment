<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\SendQueueEmail;
use Illuminate\Support\Str;
use Carbon\Carbon;
use App\Mail\NotificationMailer;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Redirect;
use App\Models\Newsletter;
 
 class MailController extends Controller
 {
    public function index()
    {

    }

    public function send_mail($fileId)
    {
        $fileDetails = Newsletter::where('filepath', "newsletters/$fileId")->get()->toArray();
        
    	$details = [
            'fileId' => $fileId,
            'fileDetails' => $fileDetails[0]
    	];
    	
        $job = (new \App\Jobs\SendQueueEmail($details))
            	->delay(now()->addSeconds(2)); 

        dispatch($job);
       // Update FileId Status
       Newsletter::where('filepath', "newsletters/$fileId")
                 ->update(['is_published' => 1]);

        return Redirect::route('newsletter')->with('status', 'Mail Dispatched to Mail Queue Successfully ');
    }

    public function sendWorker()
    {
        $exitCode = Artisan::call('queue:work --stop-when-empty');
        
        return Redirect::route('admin.index')->with('status', "Jobs executed with status code: $exitCode");

       
    }

 }