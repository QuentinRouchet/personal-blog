@include('partials.header');

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>



    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            @if(session('success'))
                {{ session('success') }}
            @endif

            <div class="">
            @foreach ($posts as $post)
                <div class="flex flex-col">
                    <h2>{{ $post->title }}</h2>
                    <div class="flex flex-row mb-6">
                        <a href="{{ route('posts.edit', $post) }}" class="text-gray-900 bg-gradient-to-r from-lime-200 via-lime-400 to-lime-500 hover:bg-gradient-to-br focus:ring-4 focus:ring-lime-300 dark:focus:ring-lime-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Edit</a>
                        
                        <a href="#" class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Delete</a>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
    </div>

</x-app-layout>