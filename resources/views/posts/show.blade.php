@extends("layouts.app")

@section("content")

<div class="container mx-auto py-10">
    <div class="shadow rounded-lg pb-10 bg-white w-full ">
        <a href="#" class="w-full block">
            <div class="rounded-lg  dark:bg-gray-800 w-full p-4">
                <span class="text-xs mr-2 py-1.5 px-4 text-gray-600 bg-blue-100 rounded-2xl mb-5 inline-flex">
                    {{ $post->category->name }}
                </span>
                <h1 class="text-gray-800 dark:text-white text-xl font-medium mb-2">
                    {{ $post->title }}
                </h1>
                <p class="text-gray-400 dark:text-gray-300 font-light text-md">
                     {{ $post->content }}
                </p>
            </div>
        </a>
    </div>

    <hr class="my-5" />
    <span class="mb-2 text-gray-400 inline-flex text-xl">{{ $post->comments->count() }}commentaires</span>
    @foreach($post->comments as $comment)
    <div class="border-2 bg-white rounded-lg flex flex-row mb-1">

        <div class=" flex flex-1 items-center p-4">
            <div class="flex flex-col w-10 h-10 justify-center items-center mr-4">
                <a href="#" class="block">
                    <img alt="profil" src="/images/avatar.png" class="mx-auto object-cover rounded-full h-10 w-10 "/>
                </a>
            </div>
            <div class="flex-1 pl-1 mr-16">
                <div class="">
                    {{ $comment->owner->name }}
                </div>
                <div class="text-gray-500 dark:text-gray-200 text-sm">
                    {{ $comment->content }}
                </div>
                <div class="flex justify-end">
                    <small class="text-xs text-gray-400">{{ $comment->created_at }}</small>
                </div>

            </div>
        </div>

    </div>
    @endforeach
</div>



@endsection
