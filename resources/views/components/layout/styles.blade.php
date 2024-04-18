


<link
    rel='stylesheet'
    href='https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap'
/>
<link
    rel='stylesheet'
    href='https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap'
/>
<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer"
/>

<script>
    function getCookie(cname) {
        let name = cname + "=";
        let ca = document.cookie.split(';');
        for(let i = 0; i < ca.length; i++) {
            let c = ca[i];
            while (c.charAt(0) == ' ') {
                c = c.substring(1);
            }
            if (c.indexOf(name) == 0) {
                return c.substring(name.length, c.length);
            }
    }
    return "";
}
    function setCookie(cname, cvalue, exdays) {
        const d = new Date();
        d.setTime(d.getTime() + (exdays*24*60*60*1000));
        let expires = "expires="+ d.toUTCString();
        document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}
    function toggleTheme(){
        theme = getCookie('theme');
        var new_theme = '';
        switch(theme) {
            case 'light':
                new_theme = 'dark';
                break;
            case 'dark':
                new_theme = 'matrix';
            break;
            case 'matrix':
                new_theme = 'light';
            break;
                    }

        var styleSheet = document.getElementById('theme');
        styleSheet.href = 'css/theme-' + new_theme + '.css';
        setCookie('theme', new_theme, 10*365);
    }
</script>

@switch($theme)
    @case('dark')
        <link id="theme" rel="stylesheet" href='css/theme-dark.css'>
    @break

    @case('light')
        <link id="theme" rel="stylesheet" href='css/theme-light.css'>
    @break

    @case('matrix')
        <link id="theme" rel="stylesheet" href='css/theme-matrix.css'>
    @break

    @default

@endswitch

<link rel="stylesheet" href='css/main.css'>
<link rel="stylesheet" href='css/search.css'>
<link rel="stylesheet" href='css/main-menu.css'>
<link rel="stylesheet" href='css/hamburger.css'>
<link rel="stylesheet" href='css/header-top.css'>
<link rel="stylesheet" href='vendor\cookies_consent\css\style.css'>
