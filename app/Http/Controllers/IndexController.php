<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class IndexController extends Controller
{
    public function index(){

        $menu_americano = Menu::find(1);
        $menu_cappuccino = Menu::find(2);
        $menu_mocha = Menu::find(3);
        $menu_salted = Menu::find(4);
        $menu_pavlova = Menu::find(5);
        $menu_croissant = Menu::find(6);
        $menu_aglio = Menu::find(7);

        return view('index')
                ->with('title', 'Cafe House - Home')
                ->with('menu_americano', $menu_americano)
                ->with('menu_cappuccino', $menu_cappuccino)
                ->with('menu_mocha', $menu_mocha)
                ->with('menu_salted', $menu_salted)
                ->with('menu_pavlova', $menu_pavlova)
                ->with('menu_croissant', $menu_croissant)
                ->with('menu_aglio', $menu_aglio);
    }
}