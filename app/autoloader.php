<?php


class Autoloader
{
    public function __construct()
    {
        spl_autoload_register(array($this, 'autoload'));
    }

    public function autoload($class_name)
    {
        $file = $this->convert_to_file($class_name);

        if (is_file($file)&&file_exists($file)&&is_readable($file)){
            include $file;
        }


    }

    public function convert_to_file($class_name)
    {
        $class = strtolower($class_name);
        $class = "class-" . $class;
        $file_name = $class . '.php';
        return THEME_PATH . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR . 'classes' . DIRECTORY_SEPARATOR . $file_name;

    }

}


new Autoloader();