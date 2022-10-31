<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TennisFestMailable extends Mailable
{
    use Queueable, SerializesModels;

    public $subject = "🎾 Prepárate para Nadal vs Ruud en TennisFest GNP";

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.tennisfest1');
    }
}
