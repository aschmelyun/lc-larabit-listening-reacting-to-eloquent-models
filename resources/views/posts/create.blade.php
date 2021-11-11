<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create A Post') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="w-full sm:max-w-7xl mx-auto mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            <form action="{{ route('posts.store') }}" method="post">
                <div>
                    <x-label for="title" :value="__('Title')" />

                    <x-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title')" required autofocus />
                </div>
                <div class="mt-4">
                    <x-label for="body" :value="__('Body')" />

                    <x-input id="body" class="block mt-1 w-full" type="text" name="body" :value="old('body')" required />
                </div>
                <div class="flex items-center justify-end mt-4">
                    @csrf
                    <x-button class="ml-4">
                        {{ __('Create Post') }}
                    </x-button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
