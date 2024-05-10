<x-layout.layout>
    @switch ($action)

        @case('index')
            $posts = $request['posts']
            @unless (count($posts) == 0)
            @foreach($posts as $post)
                $subrequest = [
                    'post' => $post,
                    'action' =>'index'
                    ]
                <x-blog.post :subrequest="$subrequest" /> 
            @endforeach
            @else
                <p>No posts</p>
            @endunless

        @case('show')
            $subrequest = [
                'post' => $post,
                'action' =>'index'
            ]
            <x-blog.post :subrequest="$subrequest" /> 
        
        @default
    @endswitch
</x-layout.layout>