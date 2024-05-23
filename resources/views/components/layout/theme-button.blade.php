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
        <button class ="px-4 py-4 mb-10 font-bold text-white bg-blue-500 rounded hover:bg-blue-700" onclick="toggleTheme()">Toggle Theme
        </button>
    </li>
