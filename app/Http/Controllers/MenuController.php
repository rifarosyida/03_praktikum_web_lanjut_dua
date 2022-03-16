<?php

namespace App\Http\Controllers;
use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function menu($keyword){
        $menu_minuman = Menu::where('kategori','=',$keyword)->get();

        return view ('menu')
                ->with('title', 'Cafe House-Menu')
                ->with('all_menu', $menu_minuman);
    }
    // public function menuMakan(){
    //     $menu_makanan = Menu::where('kategori','=','makanan')->get();

    //     return view ('menu')
    //             ->with('title', 'Cafe House-Menu')
    //             ->with('all_menu', $menu_makanan);
    // }
}
