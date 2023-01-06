@include('partials.header')

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create a post') }}
        </h2>
    </x-slot>

    <div class="my-5">
        @foreach ($errors->all() as $error)
            <span class="block text-red-500">{{ $error }}</span>
        @endforeach
    </div>

    <div class="flex justify-center">
        <form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data" class="block p-6 rounded-lg shadow-lg bg-white max-w-md">

            @csrf

            <x-input-label for="title" value="post title" />
            <x-text-input id="title" name="title" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder="Title here"/>

            <x-input-label for="content" value="post content" />
            <textarea id="content" name="content" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"></textarea>

            <x-input-label for="image" value="post image" />
            <x-text-input id="image" name="image" type="file" />

            <x-input-label for="category" value="Post category" />

            <select name="category" id="category" class="rounded m">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>

            <x-primary-button class="w-full px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Post</x-primary-button>
        </form>
    </div>

</x-app-layout>