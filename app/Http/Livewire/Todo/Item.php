<?php

namespace App\Http\Livewire\Todo;

use App\Models\Todo;
use Database\Factories\TodoFactory;
use Livewire\Component;

class Item extends Component
{
    public Todo $todo;  

    protected $rules = [
        'todo.checked' => 'boolean',
    ];
    
    public function render()
    {
        return view('livewire.todo.item');
    }
}
