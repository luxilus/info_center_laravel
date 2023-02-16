<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function index()
    {
        return DB::table('orders')->get();
    }

    public function store()
    {
        return "Создание заявки";
    }

    public function changeStatus($order)
    {
        return "Смена статуса у заявки $order";
    }

    public function addPerformer($order, $performer)
    {
        return "Назначение лаборанта N $performer к заявке N $order";
    }

    public function show($order)
    {
        return "Просмотр заявки N $order";
    }
}
