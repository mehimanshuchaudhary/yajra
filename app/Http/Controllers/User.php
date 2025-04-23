<?php

namespace App\Http\Controllers;

use App\DataTables\UserDataTable;
use Illuminate\Http\Request;

class User extends Controller
{
    public function index(UserDataTable $dataTable)
    {
        return $dataTable->render('user');
    }
}
