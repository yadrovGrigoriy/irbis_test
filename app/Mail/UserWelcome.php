<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class UserWelcome extends Mailable
{
    use Queueable, SerializesModels;



    public $mail;
    public $code;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($mail, $code)
    {
        $this->mail = $mail;
        $this->code = $code;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        
        return $this->markdown('email');
    }
}
