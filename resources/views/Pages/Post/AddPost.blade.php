@extends('Layout.app')

@section('content')

<div class="flex justify-center">

    <form class="grow max-w-xl" action="{{ route('save-post') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-6">
        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" for="user_avatar">Upload Image</label>
        <input type="file" name="image" class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400">
        <div class="mt-1 text-sm text-gray-500 dark:text-gray-300">A Post picture is useful to other users</div>        
        @error('image')
            <span class="text-red-500 font-thin	text-sm">{{ $message }}</span>
        @enderror
        </div>
    <div class="mb-6">
        <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Post Title</label>
        <input type="text" name="title" id="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
        @error('title')
            <span class="text-red-500 font-thin	text-sm">{{ $message }}</span>
        @enderror

    </div>
    <div class="mb-6">
        <label for="content" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Post Content</label>
        <textarea name="content" id="content" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write Content..." required></textarea>
        @error('content')
            <span class="text-red-500 font-thin	text-sm">{{ $message }}</span>
        @enderror

        </div>
    <div class="flex items-start mb-6">
    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Share</button>
    </div>
</form>

</div>
@endsection