@component('mail::message')
# Updated Post

The post titled {{ $post->title }} was recently modified. Here's the changes associated with it:
@foreach($post->getChanges() as $column => $change)
The {{ $column }} column now contains: {{ $change }}
@endforeach

@component('mail::button', ['url' => 'http://laravel.test'])
View Updated Post
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
