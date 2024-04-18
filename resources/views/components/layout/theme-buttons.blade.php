@php
    if (isset($_COOKIE['theme'])){
        $visible = 'inherited';
        $theme = $_COOKIE['theme'];
    } else {
        $visible = 'none';
        $theme = 'light';
    }
@endphp



    <li style="display:{{$visible}}" class ="{{$theme}}">
        <button onclick="toggleTheme()">Toggle Theme
        </button>
    </li>
