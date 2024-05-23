<x-flex.fix.column-item class="mb-5 border-solid border-1 border-white-600">
    @switch($request['action'])
        @case('index')
            @php
                if($request['post']->excerpt === null){
                    $request['post']->excerpt = explode('<p>', $request['post']->body)[1];
                }
                $userName = $request['post']->user->name;
            @endphp
            @if($request['post']->featuredImage !== null)
                <img src="{{$request['post']->featuredImage}}" />
            @endif
            <h3>
                <a href="{{$request['post']->title}}">{{$request['post']->title}}</a>
            </h3>
            <h4><i class="fa fa-user" aria-hidden="true"></i>&nbsp;<a href="/?author={{$userName}}">{{$userName}}</a></h4>
            @if($request['post']->tags !== null)
                <h4><x-blog.tags :tagsCSV="$request['post']->tags"/></h4>
            @endif
            

            <x-blog.excerpt :post="$request['post']"/>
        @break
        @case('show')
            @if($request['post']->featuredImage !== null)
                    <img src="{{$request['post']->featuredImage}}" />
            @endif
            <h3>
                {{$request['post']->title}}
            </h3>
            @php
                $userName = $request['post']->user->name;
            @endphp
            <h4><i class="fa fa-user" aria-hidden="true"></i>&nbsp;<a href="/?author={{$userName}}">{{$userName}}</a></h4>
            @if($request['post']->tags !== null)
                <x-blog.tags :tagsCSV="$request['post']->tags"/>
            @endif

            <x-blog.body :body="$request['post']->body"/>
        @break
        @default
        @break
    @endswitch
</x-flex.fix.column-item>