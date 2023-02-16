<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DepartmentController extends Controller
{
    public function index()
    {
        return DB::table('department')->get();
    }

    public function store()
    {
        return "Добавление отделения";
    }

    public function destroy($id)
    {
        return "Удаление отделения N $id";
    }

    public function update($id)
    {
        return "Обновление отделения N $id";
    }
}
