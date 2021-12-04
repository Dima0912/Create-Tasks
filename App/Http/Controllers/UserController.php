<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function registration()
    {
        return 'registration';
    }

    public function authorization()
    {
        return 'authorization';
    }

    public function show()
    {
        return 'show';
    }

    public function delete()
    {
        return 'delete';
    }
}
