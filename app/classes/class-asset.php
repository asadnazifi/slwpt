<?php


class Asset
{


//    public static function __callStatic($method_name,$args)
//    {
//        var_dump($method_name.$args);
//
//    }

    public static function css($file_name)
    {
        $file_url = THEME_URL . '/assets/css/' . $file_name;
        echo $file_url;
    }

    public static function js($file_name)

    {
        $file_url = THEME_URL . '/assets/js/' . $file_name;
        echo $file_url;

    }

    public static function image($file_name)
    {
        $file_url = THEME_URL . '/assets/img/' . $file_name;
        echo $file_url;
    }
    public static function ico($file_name)
    {
        $file_url = THEME_URL . '/assets/ico/' . $file_name;
        echo $file_url;
    }
    public static function font($file_name)
    {
        $file_url = THEME_URL . '/assets/font-awesome/css/' . $file_name;
        echo $file_url;
    }


}