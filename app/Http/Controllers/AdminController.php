<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class AdminController extends Controller
{
    public function index(){
        $qrcode = QrCode::format('svg')->size(50)->generate('jeferson bayking')->toHtml();
        // dd(gettype($qrcode));
        return inertia('Admin/Index', compact('qrcode'));
    }
    public function users(){
        $currentPage = "Users";
        return inertia('Admin/Users/Index', compact('currentPage'));
    }

    public function events(){
        return inertia('Admin/Events/Index');
    }

    public function tickets(){
        return inertia('Admin/Tickets/Index');
    }
}