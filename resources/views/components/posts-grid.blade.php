@props(['posts'])



@if ($posts->count() > 0)
    <div>
        @foreach ($posts as $post)
            <x-post-card
                :post="$post"
                
            />
        @endforeach
    </div>
@endif
