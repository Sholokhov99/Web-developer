<?
class Source{
    #region URL
    public function GetProtocol() { return ($_SERVER['HTTPS']) ? "https://" : "http://"; }
    public function GetFullUrl(){ return GetProtocol().$_SERVER['SERVER_NAME']; }
    #endregion
}