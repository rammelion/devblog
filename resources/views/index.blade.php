<x-layout.layout>
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
                    <x-blog.post :request="$request" /> 
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
</x-layout.layout>