<?php
    if(!isset($_COOKIE['theme'])){
        $theme = 'light';
    } else {
        $theme = ($_COOKIE['theme']);
    }
?>