<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserDomicilio;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $user;
    protected $user_domicilio;


    public function __construct(){
        $this->user = new User();
        $this->user_domicilio = new UserDomicilio();        
    }

    public function set_users(){
        return response()->json($this->user->set_users());
    }
}
