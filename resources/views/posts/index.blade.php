<x-layout>
    @include ('posts._header')

    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">

    <div class="grid grid-cols-2 p-2 grid-cols-2 gap-2">
        <div class="col-1 p-2">
            <h2 class="text-3xl text-blue-500 text-center mb-8">Notes</h2> 
            @if ($posts->count())
                <x-posts-grid :posts="$posts" />

                {{ $posts->links() }}
            @else
                <p class="text-center">No notes yet. Please check back later.</p>
            @endif
        </div>
        <div class="col-2 p-2">
            <h2 class="text-3xl text-blue-500 text-center mb-8">Tasks</h2>
        </div>
        
    </div>
       
    </main>
</x-layout>
