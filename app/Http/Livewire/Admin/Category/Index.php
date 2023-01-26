<?php

namespace App\Http\Livewire\Admin\Category;

use Livewire\WithPagination;

use Livewire\Component;
use App\Models\Category;


class Index extends Component
{

    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $categories = Category::orderBy('id', 'ASC')->paginate(10);
        return view('livewire.admin.category.index', ['categories' => $categories]);
    }
}
