<?php

namespace Fortross\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class MailPass extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($mail, $pass)
    {
        $this->mail=$mail;
        $this->pass=$pass;
        $this->subject('welcome to fortross');
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.sendPass')->with(['email'=>$this->mail, 'password'=>$this->pass]);
    }
}
