<?php
$class_source = new Source();
class Source{
    #region URL
    public static function GetProtocol() { return ($_SERVER['HTTPS']) ? "https://" : "http://"; }
    public static function GetFullUrl(){ return Source::GetProtocol().$_SERVER['SERVER_NAME']; }
    #endregion
}