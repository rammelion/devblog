<x-flex.fix.column-item class="mb-5 border-solid border-1 border-white-600">
    @switch($request['action'])
        @case('index')
            @php
                if(($request['post']->excerpt) === null){
                    $request['post']->excerpt = explode('<p>', $request['post']->body)[1];
                }
            @endphp
            <img src="{{$request['post']->featuredImage}}" />
            <h3>
                <a href="{{$request['post']->title}}">{{$request['post']->title}}</a>
            </h3>
            <x-blog.tags :tagsCSV="$request['post']->tags"/>
            
            <x-blog.excerpt :post="$request['post']"/>
        @break
        @case('show')
        <img src="{{$request['post']->featuredImage}}" />
            <h3>
                {{$request['post']->title}}
            </h3>
            <x-blog.tags :tagsCSV="$request['post']->tags"/>
            
            <x-blog.body :body="$request['post']->body"/>
        @break
        @default
        @break
    @endswitch
</x-flex.fix.column-item>