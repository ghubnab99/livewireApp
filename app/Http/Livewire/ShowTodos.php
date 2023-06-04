<?php

namespace App\Http\Livewire;

use App\Models\TodoItem;
use Livewire\Component;


class ShowTodos extends Component
{
    public function render()
    {
        return view('livewire.show-todos', [
            'todos' => TodoItem::orderBy('created_at', 'DESC')->get()
        ]);
    }

    public function deleteTodo($id)
    {
        $todo = TodoItem::where('id', $id)->first();

        if(!$todo)
        {
            return;
        }
        else
        {
            $todo->delete();
            return;
        }
    }    
}
