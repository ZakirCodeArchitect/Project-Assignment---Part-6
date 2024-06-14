<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterStudentController extends Controller
{
    public function index()
    {
        require_once('./model/students/register.php');
    }
}
