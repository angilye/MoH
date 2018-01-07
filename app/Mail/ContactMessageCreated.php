<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactMessageCreated extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $email;
    public $raison;
    public $importance;
    public $url;
    public $msg;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $email, $raison, $importance, $url, $msg)
    {
        $this->name = $name;
        $this->email = $email;
        $this->raison = $raison;
        $this->importance = $importance;
        $this->url = $url;
        $this->msg = $msg;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.message.created');
    }
}
