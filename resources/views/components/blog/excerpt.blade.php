@php
    echo html_entity_decode($post->excerpt, ENT_QUOTES, 'UTF-8');
@endphp
<a href="{{$post->title}}" ><button type="button" class="btn btn-primary">Read More</button></a>