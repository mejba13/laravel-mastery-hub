<!-- resources/views/posts/index.blade.php -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Posts') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1 class="text-3xl mb-6">All Posts</h1>

                    @if ($posts->isEmpty())
                        <p>No posts available yet.</p>
                    @else
                        @foreach ($posts as $post)
                            <div class="mb-4 p-4 border rounded-lg shadow">
                                <h2 class="text-2xl font-bold">{{ $post->title }}</h2>
                                <p class="text-gray-700 mt-2">{{ $post->content }}</p>
                                <p class="mt-4">
                                    <span class="font-semibold">Author:</span> {{ $post->user->name }}
                                </p>
                                <p class="mt-2">
                                    <span class="font-semibold">Comments:</span> {{ $post->comments->count() }}
                                </p>
                                <p class="mt-2">
                                    <span class="font-semibold">Tags:</span>
                                    @foreach ($post->tags as $tag)
                                        <span class="text-sm bg-gray-200 px-2 py-1 rounded-full">{{ $tag->name }}</span>
                                    @endforeach
                                </p>
                                <a href="{{ route('posts.show', $post->id) }}" class="mt-4 inline-block text-indigo-500">View Details</a>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
