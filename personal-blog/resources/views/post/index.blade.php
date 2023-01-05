@include('partials.header')

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('My Blog') }}
        </h2>
    </x-slot>

    <section class="text-gray-600 body-font px-12">
        @foreach ($posts as $post)
            <div class="article bg-white my-10 h-full rounded-xl shadow-cla-blue overflow-hidden shadow-md relative overflow-hidden">
                <div class="p-6">
                    <span class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">
                        {{ $post->created_at->format('d M y') }}
                    </span>
                    <span class="text-white text-xs absolute top-0 right-0 p-2 rounded-bl-md bg-gradient-to-r from-cyan-400 to-blue-400">
                        {{ $post->category->name }}
                    </span>
                    <h2 class="title-font text-lg font-medium text-gray-600 mb-3">
                        {{ $post->title }}
                    </h2>
                    <p class="leading-relaxed mb-0">
                        {{ Str::limit($post->content, 150) }}
                    </p>
                    <span class="tracking-widest text-xs title-font font-medium text-gray-400">
                        {{ $post->user->name }}
                    </span>
                    <div class="flex items-center flex-wrap mt-4">
                    <button class="bg-gradient-to-r from-cyan-400 to-blue-400 hover:scale-105 drop-shadow-md  shadow-cla-blue px-4 py-1 rounded-lg text-white">Learn more</button>
                    </div>
                </div>
            </div>
        @endforeach
    </section>
    @include('partials.footer')
</x-app-layout>