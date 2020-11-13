<?php


class view
{

    public static function __callStatic($name,$arguments)

    {

        if ($name=='render') {
            self::render_view($arguments[0]);
        }
    }

    public static function render_view($view_name)
    {
        get_template_part('views/'.$view_name);
    }
}