<?php

namespace App\Http\Services\Messaging\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;


class SendAccountMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    protected $temp_password;
    protected $mail_subject;

    public function __construct($subject, $temp_password)
    {
        $this->temp_password = $temp_password;
        $this->mail_subject = $subject;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $address = "billing@warfira.com"; // "service@e-warf.com";
        $name = env("APP_NAME");

        return $this->view('user.account_mail')
            ->from($address, $name)
            ->subject($this->mail_subject)
            ->with(['title' => $this->mail_subject, 'temporary_password' => $this->temp_password]);
    }
}
