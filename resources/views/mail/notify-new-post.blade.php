@component('mail::message')
# New Post

A new post was created! It is called {{ $post->title }}, check it out below.

@component('mail::button', ['url' => 'http://laravel.test'])
View New Post
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
