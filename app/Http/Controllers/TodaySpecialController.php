<?php

namespace App\Http\Controllers;
use App\Models\Menu;
use Illuminate\Http\Request;

class TodaySpecialController extends Controller
{
    //
    public function todayspecial(){
        $all_menu = Menu::paginate(3);

        return view('todayspecial')
        ->with('title', 'Cafe House-Today Special')
        ->with('all_menu', $all_menu);
    }
}
