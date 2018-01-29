<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class message extends Mailable
{
    use Queueable, SerializesModels;

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
        $address = 'bookverse.teste@gmail.com';

        $name = 'Contato Bookverse';

        $subject = 'Contato Bookverse';

        return $this->view('emails.mailme')

        ->from($address, $name)

        ->subject($subject);

    }
}
