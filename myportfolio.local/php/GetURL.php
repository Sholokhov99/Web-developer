<?php
    class GetUrl
    {
        public static function GetFullUrl(){ return GetUrl::GetProtocol().$_SERVER['SERVER_NAME']; }
        public static function GetProtocol() { return ($_SERVER['HTTPS']) ? "https://" : "http://"; }
    }
 ?>
