<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;

class CategoryController extends Controller
{
    public function indexCategory()
    {
        return view('category.category-index');
    }

    public function createCategory()
    {
        return view('category.category-create');
    }

    public function editCategory(Category $category)
    {
        return view('category.category-edit', [
            'category' => $category
        ]);
    }

    public function indexSubCategory()
    {
        return view('category.sub-category-index');
    }

    public function createSubCategory()
    {
        return view('category.sub-category-create');
    }

    public function editSubCategory(SubCategory $sub_category)
    {
        return view('category.sub-category-edit', [
            'sub_category' => $sub_category
        ]);
    }
}
