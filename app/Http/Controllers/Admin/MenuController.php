<?php

namespace App\Http\Controllers\Admin;

class MenuController
{
    public function index()
    {
        return inertia('Admin/Index');
    }
}
