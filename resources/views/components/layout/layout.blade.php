@php
    if(isset($_COOKIE['theme'])){
        $theme = $_COOKIE['theme'];
    } else $theme = config('app.theme');
@endphp

<x-layout.head :theme="$theme"/>
<body>
    <x-layout.header />
    <main>
        <x-layout.left />
        <x-layout.right>
            {{$slot}}
        </x-layout.right>
    </main>
    <x-layout.footer />
    <x-cookies.container />
    <x-laravel-cookies-consent></x-laravel-cookies-consent>
    <!--   <script>
        if (screen && screen.width > 480) {
        document.write('<script src="{{asset('ckeditor/ckeditor.js') }}></script>')>
    }
    </script>
    -->

    </body>

