<?php

namespace App\Cells;

use App\Models\Category as ModelsCategory;

class CategorySidebar
{

    public function render()
    {
        return view("_partials/cell/sidebar");
    }
}
