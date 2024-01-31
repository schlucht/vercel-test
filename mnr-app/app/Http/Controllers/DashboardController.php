<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{



    public function index()
    {
        $users = [
            '0' => [
                'first_name' => 'John',
                'last_name' => 'Doe',
                'location' => 'Florida'
            ],
            '1' => [
                'first_name' => 'Jane',
                'last_name' => 'Doe',
                'location' => 'California'
            ]
        ];
        return view('dashboard', ['usersList' => $users]);
    }
}
