<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StatusEquipmentController extends Controller
{
    public function index()
    {
        return DB::table('statuses_equipment')->get();
    }

    public function store()
    {
        return "Добавление статуса оборудования";
    }

    public function destroy($id)
    {
        return "Удаление статуса оборудования N $id";
    }

    public function update($id)
    {
        return "Обновление статуса оборудования N $id";
    }
}
