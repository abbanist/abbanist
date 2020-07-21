<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class sendContact extends Mailable
{
    use Queueable, SerializesModels;
    public $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
   public function __construct($data)
    {
        $this->data = $data;
    }
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // return $this->from('john@webslesson.info')->subject('New Customer Equiry')->view('dynamic_email_template')->with('data', $this->data);

        return $this
            ->from('john@webslesson.info')
            ->subject('Зурвас ')
            ->view('dynamic_email_template_contact')->with('data', $this->data);

        // ->to(config('mail.from.address'))
        // ->subject('HackerPair Inquiry')
        // ->view('emails.contact');



    }
}
