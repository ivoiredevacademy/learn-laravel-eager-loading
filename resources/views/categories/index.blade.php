@extends('layouts.app')

@section("content")

<div class="container mx-auto py-4">
    <div class="py-8">
        <div class="flex flex-col mb-1 sm:mb-0 justify-between w-full">
            <h2 class="text-2xl leading-tight mb-5">
                Categories
            </h2>
            <div class="w-100">
                <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                    <table class="min-w-full leading-normal">
                        <thead>
                            <tr>
                                <th scope="col" class="px-5 py-3 bg-white  border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">
                                    #
                                </th>
                                <th scope="col" class="px-5 py-3 bg-white  border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">
                                    Nom
                                </th>
                                <th scope="col" class="px-5 py-3 bg-white  border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">
                                    Nombre d'articles
                                </th>
                                <th scope="col" class="px-5 py-3 bg-white  border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">
                                    Nombre de commentaires
                                </th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-900">
                            @foreach($categories as $category)
                            <tr>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                     {{ $loop->iteration }}
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    {{ $category->name}}
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm text-gray-500">
                                    {{ $category->posts->count() }}
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm text-gray-400">
                                    {{ $category->comments->count() }}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="bg-white py-5 px-4">

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection

