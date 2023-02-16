<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OfficeController extends Controller
{
    public function index()
    {
        return DB::table('offices')->get();
    }

    public function store()
    {
        return "Добавление кабинета";
    }

    public function destroy($id)
    {
        return "Удаление кабинета N $id";
    }

    public function update($id)
    {
        return "Обновление кабинета N $id";
    }
}
