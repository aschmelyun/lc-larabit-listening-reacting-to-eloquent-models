<?php

namespace App\Observers;

use App\Models\Post;
use Illuminate\Support\Facades\Http;

class PostObserver
{
    /**
     * Handle the Post "created" event.
     *
     * @param  \App\Models\Post  $post
     * @return void
     */
    public function created(Post $post)
    {
        // a post is created
        Http::post('https://hookb.in/2qNxM1N8l6fdzq88zwOe', $post->toArray());
    }

    /**
     * Handle the Post "updated" event.
     *
     * @param  \App\Models\Post  $post
     * @return void
     */
    public function updated(Post $post)
    {
        // a post is updated
        Http::post('https://hookb.in/2qNxM1N8l6fdzq88zwOe', $post->toArray());
    }

    /**
     * Handle the Post "deleted" event.
     *
     * @param  \App\Models\Post  $post
     * @return void
     */
    public function deleted(Post $post)
    {
        // a post is deleted
        Http::post('https://hookb.in/2qNxM1N8l6fdzq88zwOe', $post->toArray());
    }

    /**
     * Handle the Post "restored" event.
     *
     * @param  \App\Models\Post  $post
     * @return void
     */
    public function restored(Post $post)
    {
        //
    }

    /**
     * Handle the Post "force deleted" event.
     *
     * @param  \App\Models\Post  $post
     * @return void
     */
    public function forceDeleted(Post $post)
    {
        //
    }
}
