@include('partials.header')

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $post->title }}
        </h2>
    </x-slot>

    <img src="{{ asset('/storage/' . $post->image) }}" alt="">

    <div class="my-5">
        {{ $post->content }}
    </div>


</x-app-layout>