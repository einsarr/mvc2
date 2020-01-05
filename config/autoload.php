<?php
class Autoloader
{
    static function register()
    {
        spl_autoload_register(array(__CLASS__,"autoload"));
    }
    static function autoload($class)
    {
        //echo str_replace("\\","/",$class);
        if(file_exists("src/models/".$class.".php"))
        {
            require_once "src/models/".$class.".php";
        }
        else if(file_exists("src/controllers/".$class.".php"))
        {
            require_once "src/controllers/".$class.".php";
        }
        //namespace
        else if(file_exists(str_replace("\\","/",$class.".php")))
        {
            require_once str_replace("\\","/",$class.".php");
        }else{
            die("Merci d'utiliser le mot clé <b>use</b> suivie de <b>".$class."</b>");
        }
    }
}
Autoloader::register();