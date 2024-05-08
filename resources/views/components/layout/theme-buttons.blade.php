@php
    if (isset($_COOKIE['theme'])){
        $visible = 'inherited';
        $theme = $_COOKIE['theme'];
    } else {
        $visible = 'none';
        $theme = 'light';
    }
@endphp



    <li style="display:{{$visible}}">
        <button class ="bg-blue-500 hover:bg-blue-700 text-white font-bold py-4 px-4 rounded mb-10" onclick="toggleTheme()">Toggle Theme
        </button>
    </li>
