<?php

namespace App\Http\Services\Messaging\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;


class NewAccountMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    protected $mail_subject;

    public function __construct($subject)
    {
        $this->mail_subject = $subject;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $address = "contact@e-warf.com"; // "service@e-warf.com";
        $name = env("APP_NAME");

        return $this->view('mail.new_account_mail')
            ->from($address, $name)
            ->subject($this->mail_subject)
            ->with(['title' => $this->mail_subject]);
    }
}
