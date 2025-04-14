<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Models\User;
use App\Models\Newsletter;
use Illuminate\Support\Facades\Mail;

class SendQueueEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    protected $details;
    public $timeout = 7200; // 2 hours

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($details)
    {
        $this->details = $details;
    }

    /**
     * Execute the job.
     *
     *  * @return void
     */
    public function handle()
    {
        $data = User::all();
        //$data = User::all()->where('id', 2);
        $input['subject'] = $this->details['fileDetails']['subject'];
        $input['emailBody'] = $this->details['fileDetails']['email_body'];
        $input['fileId'] = $this->details['fileId'];

      

        $input['$attachmentPath'] = storage_path('app/public/newsletters/9lLwIIdchHeaFc6ir234Pq0g0xnz2kPti27xiIIN.pdf');

        foreach ($data as $key => $value) {
            $input['email'] = $value->email;
            $input['name'] = $value->name;
            $input['uuid'] = $value->uuid;

            Mail::send('mail.Test_mail', ["fileId" => $input['fileId'],"emailBody" => $input['emailBody'],"uuid" => (string)$input['uuid'],"subject" => $input['subject']], function ($message) use ($input) {
                $message->to($input['email'], $input['name'])
                    ->subject($input['subject'])
                    ->attach(
                        storage_path("app/public/newsletters/" . $input['fileId']),
                        [
                            'as' => 'UNEP-EarlyWarning_Feb_Edition.pdf',
                            'mime' => 'application/pdf',
                        ]
                    );
            });
        }
    }
}
