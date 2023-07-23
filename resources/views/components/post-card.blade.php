@props(['post'])

<article
    {{ $attributes->merge(['class' => 'transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl']) }}>
    <div class="py-6 px-5 h-full flex flex-col">
       

        <div class="mt-6 flex flex-col justify-between flex-1">
            <header>
                <div class="space-x-2">
                   <x-category-button :category="$post->category" />
                </div>

                <div class="mt-4">
                    <h1 class="text-3xl clamp one-line">
                        <a>
                            {{ $post->title }}
                        </a>
                    </h1>

                   
                </div>
            </header>

            <div class="text-sm mt-4 space-y-4">
                {!! $post->body !!}
            </div>

           
                
                    
                    <div class="ml-3 text-sm text-right mt-8">
                        <h5 class="font-bold">
                            <a href="/?author={{ $post->author->username }}">{{ $post->author->name }}</a>
                        </h5>
                    </div>
                

            
        </div>
    </div>
</article>
