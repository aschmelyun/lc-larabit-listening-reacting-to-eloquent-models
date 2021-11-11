<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Post') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="w-full sm:max-w-7xl mx-auto mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            <form action="{{ route('posts.update', $post->id) }}" method="post">
                <div>
                    <x-label for="title" :value="__('Title')" />

                    <x-input id="title" class="block mt-1 w-full" type="text" name="title" :value="$post->title" required autofocus />
                </div>
                <div class="mt-4">
                    <x-label for="body" :value="__('Body')" />

                    <x-input id="body" class="block mt-1 w-full" type="text" name="body" :value="$post->body" required />
                </div>
                <div class="flex items-center justify-end mt-4">
                    @csrf
                    @method('PUT')
                    <x-button class="ml-4">
                        {{ __('Save Post') }}
                    </x-button>
                </div>
            </form>
        </div>
        <div class="mt-4 px-6 w-full sm:max-w-7xl">
            <form method="post" action="{{ route('posts.destroy', $post->id) }}">
                @csrf
                @method('DELETE')
                <x-button>{{ __('Delete Post') }}</x-button>
            </form>
        </div>
    </div>
</x-app-layout>
