<?php

namespace App\Listeners;

use App\Events\PostUpdated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;
use App\Mail\NotifyUpdatedPost;

class SendPostUpdatedNotification
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
     * @param  PostUpdated  $event
     * @return void
     */
    public function handle(PostUpdated $event)
    {
        $subscribers = ['andrew@testing.com', 'andrew@example.com'];

        foreach($subscribers as $subscriber) {
            Mail::to($subscriber)->send(new NotifyUpdatedPost($event->post));
        }
    }
}
