<?php
class Head
{
    public static function GETURL() {
        return ($_SERVER['HTTPS']) ? "https://" : "http://".$_SERVER['SERVER_NAME'];
    }

    public static function EchoGetHeadHtml()
    {
        echo '
        <title>DAKO | '.$title_name.'</title>
        <meta charset="utf-8" />
        <link href="'.Head::GETURL().'/css/bootstrap.css" rel="stylesheet" />
        <link href="'.Head::GETURL().'/css/site.css" rel="stylesheet" />
        <link href="'.Head::GETURL().'/css/media.css" rel="stylesheet" />
        <link href="'.Head::GETURL().'/css/slider.css" rel="stylesheet" />';
    }
}