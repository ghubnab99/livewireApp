<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\TodoItem;

class CreateTodo extends Component
{
    public TodoItem $todo;

    protected $rules = [
        'todo.todo' => 'required|string|min:6',
    ];

    public function mount()
    {
        $this->todo = new TodoItem();
    }

    public function save()
    {
        $this->validate();

        // $this->todo->todo = $this->todoText;
        $this->todo->completed = false;
        $this->todo->save();        

        // $todo = new TodoItem();
        // $todo->todo = $this->todoText;
        // $todo->completed = false;
        // $todo->save();        

        return redirect()->to('/todo-list');
    }    

    public function render()
    {
        return view('livewire.create-todo');
    }
}
