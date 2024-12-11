<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
   
    public function run(): void
    {
        $categories = [
            'ficção',
            'Não-ficção',
            'Fantasia',
            'Ciência',
            'Biografia',
            'História',
            'Tecnologia',
            'Arte',
            'Culinária',
            'viagem'
        ];

        foreach ($categories as $category){
            Category::create(['name' => $category]);
        }
    }
}
