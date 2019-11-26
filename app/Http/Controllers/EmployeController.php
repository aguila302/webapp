<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Http\Resources\EmployeCollection;

class EmployeController extends Controller
{
    public function index()
    {
        return new EmployeCollection(Employee::all());
    }
}
