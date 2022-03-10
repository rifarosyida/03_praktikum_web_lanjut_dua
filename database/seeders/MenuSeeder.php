<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menu')->insert(
            [
                [
                    'nama' => 'Americano',
                    'stok'=> 10,
                    'harga' => 13,
                    'deskripsi' => 'Americano dibuat dari campuran espresso berkualitas yang diseduh dan ditambahkan dengan air',
                    'gambar' => 'menu2.jpg',
                    'kategori'=> 'minuman'
                ],
                [
                    'nama' => 'Cappuccino',
                    'stok'=> 15,
                    'harga' => 15,
                    'deskripsi' => 'Cappucino dibuat dari campuran espresso berkualitas dengan susu segar, dibuat dengan foam lembut',
                    'gambar' => 'menu3.jpg',
                    'kategori'=> 'minuman'
                ],
                [
                    'nama' => 'Mocha',
                    'stok'=> 9,
                    'harga' => 23,
                    'deskripsi' => 'Mocha dibuat dari campuran espresso berkualitas dengan coklat belgia dan susu segar',
                    'gambar' => 'menu1.png',
                    'kategori'=> 'minuman'
                ],
                [
                    'nama' => 'Salted caramel mocha',
                    'stok' => 5,
                    'harga' => 30,
                    'deskripsi' => 'Mocha nikmat dengan Salted Caramel yang gurih',
                    'gambar' => 'salted-caramel.jpg',
                    'kategori'=> 'minuman'
                ],
                [
                    'nama' => 'Berry pavlova',
                    'stok' => 5,
                    'harga' => 45,
                    'deskripsi' => 'Crunchy diluar dan lembut di dalam dengan manisnya berry',
                    'gambar' => 'Pavlova-1.jpg',
                    'kategori'=> 'makanan'
                ],
                [
                    'nama' => 'Almond croissant',
                    'stok' => 12,
                    'harga' => 28,
                    'deskripsi' => 'Croissant lembut dan berlayer dengan Crunchy Almond di luar',
                    'gambar' => 'almond-croissant-1.png',
                    'kategori'=> 'makanan'
                ],
                [
                    'nama' => 'Prwan aglio e olio',
                    'stok' => 4,
                    'harga' => 50,
                    'deskripsi' => 'Spagetti gurih dengan tambahan udang yang kenyal',
                    'gambar' => 'prawn-aglio-1.png',
                    'kategori'=> 'makanan'
                ],
                [
                    'nama' => 'Chamomile tea',
                    'stok' => 8,
                    'harga' => 17,
                    'deskripsi' => 'Teh herbal dari bunga chamomile yang berguna untuk mengatasi insomnia',
                    'gambar' => 'camomile-tea.jpg',
                    'kategori'=> 'minuman'
                ],
                [
                    'nama' => 'Pea tea butterfly',
                    'stok' => 10,
                    'harga' => 19,
                    'deskripsi' => 'Teh bunga telang yang dapat membuat suasana hati yang seimbang',
                    'gambar' => 'pea-tea-butterfly.jpg',
                    'kategori'=> 'minuman'
                ],
                [
                    'nama' => 'Blended Coffe',
                    'stok'=> 11,
                    'harga' => 25,
                    'deskripsi' => 'Blend coffee adalah kopi yang terdiri dari beberapa campuran jenis kopi, baik kopi arabika maupun kopi robusta',
                    'gambar' => 'menu4.jpg',
                    'kategori'=> 'minuman'
                ],
                [
                    'nama' => 'Blended Cream',
                    'stok'=> 8,
                    'harga' => 45,
                    'deskripsi' => 'Blend Cream adalah minuman coklat Belgia dengan susu segar, serta cream lembut di atasnya',
                    'gambar' => 'menu5.jpg',
                    'kategori'=> 'minuman'

                ]
            ]
                );
    }
}
