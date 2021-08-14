
<div>
    <nav class="bg-white dark:bg-gray-800">
        <div class="container mx-auto">
            <div class="flex items-center justify-between h-16">
                <div class=" flex items-center">
                    <div class="hidden md:block">
                        <div class="flex items-baseline space-x-4">
                            <a class=" px-3 py-2 rounded-md text-sm font-medium
                                @if(request()->path() == 'posts')
                                    text-white bg-blue-500
                                @endif
                            " href="/posts">
                                Posts

                            </a>
                            <a class="px-3 py-2 rounded-md text-sm font-medium
                                @if(request()->path() == 'categories')
                                    text-white bg-blue-500
                                @endif
                            " href="/categories">
                                Categories
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</div>
