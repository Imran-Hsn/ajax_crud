<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class UserController extends BaseController
{
    public function __construct() {
        helper('render');
    }
    
    public function index()
    {
        return render('users/index');
    }
}
