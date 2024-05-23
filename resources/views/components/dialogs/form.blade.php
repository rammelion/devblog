<form method="post" {{$attributes->merge(['class' => 'md:flex md:flex-col'], 'action' => '')}}>
    {{$slot}}
</form>