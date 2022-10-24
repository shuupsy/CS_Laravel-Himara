<?php

namespace App\Providers;

use App\Mail\NewNotificationMail;
use App\Providers\NewNotification;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendEmailNotification
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Providers\Notification  $event
     * @return void
     */
    public function handle(NewNotification $event)
    {
        Mail::to('sylvaine.hello@gmail.com')->send(new NewNotificationMail());
    }
}
