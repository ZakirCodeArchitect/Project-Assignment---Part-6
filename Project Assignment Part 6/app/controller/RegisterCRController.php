<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterCRController extends Controller
{
    public function index()
    {
        require_once('./model/admin/registeradmin.php');
    }
}
