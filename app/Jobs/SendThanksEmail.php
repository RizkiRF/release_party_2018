<?php

namespace App\Jobs;

use App\Jobs\Job;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Bus\SelfHandling;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Contracts\Mail\Mailer;
use Log;         

class SendThanksEmail extends Job implements SelfHandling, ShouldQueue
{
    use InteractsWithQueue, SerializesModels;


    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Execute the job.
     *
     * @return void
     */
     public function handle(Mailer $mailer)
         {
             $mailer->queue('emails.test', $data, function ($message) use ($data){

               $message->to($data['email'])
                       ->subject('Pendaftaran Release Party TeaLinux OS 8 - ' . $data['nama']);

             });
             Log::info('email terkirim ke ' . $peserta->email . ' dengan nama peserta : ' . $peserta->nama);
         }
}
