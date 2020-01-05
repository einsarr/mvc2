<?php
namespace src\Controllers;
use libs\system\Controller;

class RolesControlleur extends Controller
{
    public function add()
    {
        return $this->view->load("roles/add");
    }
}