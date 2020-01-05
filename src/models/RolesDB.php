<?php
namespace src\model;
use libs\system\Model;
class RolesDB extends Model
{
    public function findAll()
    {
        return array("ROLES_FINANCE","ROLES_COMPTA");
    }
}