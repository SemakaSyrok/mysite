<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Mail;

class SendMessage implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;


    public $mail;
    public $name;
    public $view;
    public $tries = 3;


    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($mail, $name, $view)
    {
        $this->view   = $view;
        $this->mail   = $mail;
        $this->name   = $name;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $mail = $this->mail;
        $name = $this->name;
        Mail::send($this->view, ['name' => $name], function ($message) use ($mail, $name) {
            $message->to($mail, 'To '.$name)->subject('Commerical Offer');
            $message->from('info@simon-svirkov.com', 'From Simon Svirkov');
        });

    }
}
