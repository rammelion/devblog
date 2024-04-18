<?php
if(!isset($_COOKIE['theme'])) {
    setcookie('theme', config('app.theme'), time() + (3600 * 365), "/"); 
}?>