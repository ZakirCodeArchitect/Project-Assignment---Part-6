<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AssignmentsController extends Controller
{
    public function index()
    {
        require_once('./view/SemesterSyncDashboard/assignments.php');
    }
}
