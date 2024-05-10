<x-flex.fix.column-item>
    <img src="{{$post->featuredImage}}" />
    <h3>
        <a href="{{$post->title}}">{{$post->title}}</a>
    </h3>
    <x-blog.tags :tagsCSV="$post->tags"/>
    <x-blog.body :body="$post->body"/>
    

</x-flex.fix.column-item>