<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        require_once('./view/SemesterSyncDashboard/tempindex2.php');
    }
}
