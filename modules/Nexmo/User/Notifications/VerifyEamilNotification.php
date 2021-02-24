<?php

namespace Nexmo\User\Notifications;


use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Nexmo\User\Mail\VerifyEmailCode;
use Nexmo\User\services\VerifyCodeService;

class VerifyEamilNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param mixed $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }


    public function toMail($notifiable)
    {
        $code = VerifyCodeService::generate();
        VerifyCodeService::store($notifiable->id, $code);
        return (new VerifyEmailCode($code))->to($notifiable->email);

    }

    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
