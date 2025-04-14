<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Attachment;

class NotificationMailer extends Mailable
{
    use Queueable, SerializesModels;

    public $data;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data,$subject)
    {
        $this->data = $data;
        $this->subject = $subject;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        if($this->data['type'] == 0) {
            $attachmentPath = storage_path('app/public/newsletters/9lLwIIdchHeaFc6ir234Pq0g0xnz2kPti27xiIIN.pdf');
            return $this->view('mail.Test_mail', [
                'data' => $this->data
                //Attach User Manual
            ])->attach($attachmentPath,
            [
                    'as' => 'PIR-UserManual.pdf',
                'mime' => 'application/pdf',
            ])->subject($this->subject);

        }
       
    }

 
   
}
