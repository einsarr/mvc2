<?php

use src\Controllers\RolesControlleur;

require_once "config/autoload.php";

$rolesDB = new RolesControlleur();

$rolesDB->add();