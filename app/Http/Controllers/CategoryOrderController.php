<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryOrderController extends Controller
{
    public function index()
    {
        return DB::table('department')->get();
    }

    public function store()
    {
        return "Добавление категории заказа";
    }

    public function destroy($id)
    {
        return "Удаление категории заказа N $id";
    }

    public function update($id)
    {
        return "Обновление категории заказаN $id";
    }
}
