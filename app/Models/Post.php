<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Subscriber;
use App\Mail\NotifyNewPost;
use Illuminate\Support\Facades\Mail;
use App\Events\PostCreated;
use App\Events\PostUpdated;
use App\Observers\PostObserver;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [];

    // protected $dispatchesEvents = [
    //     'created' => PostCreated::class,
    //     'updated' => PostUpdated::class,
    // ];
}
