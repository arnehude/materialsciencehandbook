<?php 
function sec_session_start() {
    $session_name = '3dadmin';   // vergib einen Sessionnamen
    $secure = true;
    $cookieParams = session_get_cookie_params();
    session_set_cookie_params($cookieParams["lifetime"],$cookieParams["path"],$cookieParams["domain"],$secure);
    session_name($session_name);
    session_start();            
    session_regenerate_id();    
}
    sec_session_start();

