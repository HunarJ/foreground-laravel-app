<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Service;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //Dashboard

    public function dashboard()
    {
        $contactsNum = Contact::count();
        $servicesNum = Service::count();
        return view('admin.pages.dashboard', ['contacts' => $contactsNum, 'services' => $servicesNum]);
    }
}
