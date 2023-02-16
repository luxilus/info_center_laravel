<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryEquipmentController extends Controller
{
    public function index()
    {
        return DB::table('categories_equipment')->get();
    }

    public function store()
    {
        return "Добавление категории оборудования";
    }

    public function destroy($id)
    {
        return "Удаление категории N $id";
    }

    public function update($id)
    {
        return "Обновление категории N $id";
    }
}
