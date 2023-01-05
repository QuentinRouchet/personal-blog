@include('partials.header')

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create a post') }}
        </h2>
    </x-slot>

    <div>
        <form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">

            @csrf

            <x-input-label for="title" value="post title" />
            <x-text-input id="title" name="title" />

            <x-input-label for="content" value="post content" />
            <textarea id="content" name="content"></textarea>

            <x-input-label for="image" value="post image" />
            <x-text-input id="image" name="image" type="file" />

            <x-input-label for="category" value="Post category" />

            <select name="category" id="category">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>

            <x-primary-button class="ml-5">Post</x-primary-button>

        </form>
    </div>

</x-app-layout>