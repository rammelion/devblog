<x-layout.two-column-layout>
    @switch ($action)
        @case('index')
            @unless (count($posts) == 0)
                @foreach($posts as $post)
                @php
                    $request = [
                        'post' => $post,
                        'action' => $action
                    ];
                @endphp
                    @if ($post->published === 1)
                        <x-blog.post :request="$request" /> 
                    @endif
                @endforeach
            
            @else
                <p>No posts</p>
            @endunless
        @break    
        @case('show')
            @php
                $request = [
                    'post' => $post,
                    'action' => $action
                ];
            @endphp
            <x-blog.post :request="$request" /> 
        @break
        @default
        @break
    @endswitch
</x-layout.two-column-layout>