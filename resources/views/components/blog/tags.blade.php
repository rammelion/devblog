@props(['tagsCSV'])
<x-flex.fix.row class="mb-5">
@php
    $tags = explode(',', $tagsCSV);
@endphp
Tags:&nbsp;

@unless (count($tags) == 0)
    @foreach($tags as $tag)
        <li class="mr-3 list-none tag">
            <a href="/?tag={{$tag}}">{{$tag}}</a>
        </li>
    @endforeach
    @else
        <p>No tags</p>
@endunless

</x-flex.fix.row>