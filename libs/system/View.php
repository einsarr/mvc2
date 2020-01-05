<?php
namespace libs\system;
class View
{
    public function __construct()
    {
        
    }
    /**
     * Effectuer le chargement d'une vue
     */
    public function load()
    {
        $num = func_num_args();
        $args = func_get_args();

        switch($num)
        {
            case 1:
                $file = "views/".$args[0].".php";
                if(file_exists($file))
                {
                    require_once $file;
                }
                else{
                    die($file." n'existe pas comme view");
                }
                break;
            case 2:
                $file = "views/".$args[0].".php";
                if(file_exists($file))
                {
                    $data = $args[1];
                    require_once $file;
                }
                else{
                    die($file." n'existe pas comme view");
                }
                break;
        }
    }
}