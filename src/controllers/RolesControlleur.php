<?php

namespace src\Controllers;
use libs\system\Controller;
use src\model\RolesDB;


class RolesControlleur extends Controller
{
    public function add()
    {
        return $this->view->load("roles/add");
    }
    public function getAll()
    {
        $role_dao = new RolesDB();
        $roles = $role_dao->findAll();//array("ROLES_ADMIN","ROLES_USER");
        return $this->view->load("roles/getAll",$roles);
    }
}