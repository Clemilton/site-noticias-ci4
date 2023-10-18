<?php

namespace App\Cells;

use App\Models\Category as ModelsCategory;

class Category
{

    public function render()
    {
        $category = new ModelsCategory();
        $categories = $category->select('name,slug')->findAll();
        return view('_partials/cell/category', ['categories' => $categories]);
    }
}
