function changeTheme ($sender) {
    $themeLink = document.getElementById("theme");
    if ($themeLink.href == "css/dark.css") {
        $themeLink.href = "css/light.css";
        $this.class = 'button-dark'
    } else {
        $themeLink.href = "css/dark.css";
        $this.class = 'button-light'
    }
}