<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Newsletter;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
 
 class NewsletterController extends Controller
 {
     public function index()
    {
        $newsletters = Newsletter::where('is_published', 0)->get();
     
 
        return view('newsletter.index',compact('newsletters')); 

       
    }

    public function store(Request $request)
    {
        
        $request->validate([
            'newsletterdescription' => ['required', 'string', 'max:255'],
            'newsletterfile' => 'required|mimes:pdf',
            'subject' => 'required',
            'emailfile' => 'required',
        ]);


        // Store the file in storage\app\public folder
        $file = $request->file('newsletterfile');
        $fileName = $file->getClientOriginalName();
        $filePath = $file->store('newsletters', 'public');

        $emailFile = $request->file('emailfile');
        $emailFileName = $emailFile->getClientOriginalName();
        $emailFilePath = $emailFile->store('emailbody', 'public');

       

        //FileUpload Details
        $uploadDetails = [
                    'uuid' => Str::uuid()->toString(),
                    'description' => $request->newsletterdescription,
                    'subject' => $request->subject,
                    'filename' => $fileName,
                    'filepath' => $filePath,
                    'email_body_filename' => $emailFileName,
                    'email_body' => $emailFilePath,
                    'created_by' => auth()->user()->id,
                    'created_at' => Carbon::now()
        
                 ];
               
        $uploaded = Newsletter::create($uploadDetails);

        if($uploaded) {
            return redirect('/newsletter')->with('status', 'Success!');

        }else {
            return redirect('/newsletter')->with('status', 'Err!!');
        }

        
        
    }

    public function pubfile($fileId)
    {
        $url = Storage::url('app/public/newsletters/'.$fileId);

        $uuid = !empty(auth()->user()->id) ? Auth::user()->uuid : 'N/A';

     return view("public.newsletter",compact('url','fileId','uuid'));
    
    }


 }