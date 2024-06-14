<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginStudentController extends Controller
{
    public function index()
    {
        require_once('./model/students/data.php');
    }
}
