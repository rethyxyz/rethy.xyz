<?php 
    function isMobileDevice() { 
        return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo 
    |fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i" 
    , $_SERVER["HTTP_USER_AGENT"]); 
    } 
    if(isMobileDevice()) { 
        header("Location: /Mobile\ Pages/home_mobile.php");
    } 
    else { 
        header("Location: /Desktop\ Pages/home.php");
    } 
?> 
