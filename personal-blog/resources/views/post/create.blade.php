@include('partials.header')

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create a post') }}
        </h2>
    </x-slot>

    <div class="">
        <form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">

        </form>
    </div>

</x-app-layout>