<x-layout.layout>
    @unless (count($posts) == 0)
    @foreach($posts as $post)
        <x-blog.post :post="$post" /> 
    @endforeach
    @else
        <p>No posts</p>
    @endunless
</x-layout.layout>