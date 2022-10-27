<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Category;

class CategoryComponent extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.category-component',
        ['categories'=> Category::all(),
        'currentCategory'=> Category::firstWhere('product',request('category'))
        ]);
    }
    
}
