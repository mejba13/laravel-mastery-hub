<!-- resources/views/posts/show.blade.php -->
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Post Details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1 class="text-3xl mb-6">{{ $post->title }}</h1>
                    <p class="text-gray-700 mb-4">{{ $post->content }}</p>
                    <p class="mt-4">
                        <span class="font-semibold">Author:</span> {{ $post->user->name }}
                    </p>
                    <p class="mt-2">
                        <span class="font-semibold">Comments:</span>
                    @foreach($post->comments as $comment)
                        <div class="p-4 border rounded-lg mt-2">
                            {{ $comment->body }}
                            <br />
                            <small class="text-gray-600">by {{ $comment->user->name }}</small>
                        </div>
                        @endforeach
                        </p>
                        <p class="mt-2">
                            <span class="font-semibold">Tags:</span>
                            @foreach($post->tags as $tag)
                                <span class="text-sm bg-gray-200 px-2 py-1 rounded-full">{{ $tag->name }}</span>
                            @endforeach
                        </p>
                        <a href="{{ route('posts.index') }}" class="mt-6 inline-block text-indigo-500">Back to Posts</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
