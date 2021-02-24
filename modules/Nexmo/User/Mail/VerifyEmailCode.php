<?php

namespace Nexmo\User\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class VerifyEmailCode extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $code;
    public function __construct($code)
    {
        $this->code=$code;
    }


    public function build()
    {
        return $this->markdown('User::mail.veryfiy-code-mail')
            ->subject('کد ارسالی وریفای  کردن ایمیل|| وب سایت قاسمی');
    }
}
