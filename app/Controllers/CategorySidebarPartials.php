<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class CategorySidebarPartials extends BaseController
{
    public function index(string $category)
    {
        //
        $order = match ($category) {
            'popular' => ['visits']
        };
    }
}
