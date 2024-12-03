<?php

namespace App\Livewire;
use Livewire\Attributes\Validate;
use Livewire\Attributes\On;
use Livewire\Component;
use App\Events\TodoEvent;

class Todos extends Component
{
    #[Validate('required|min:3')]  
    public $todo = '';

    public $todos = [];

    #[On('echo:todo-create,TodoEvent')]
    public function listenForMessage($data)
    {
        $this->todos[] = $data['todo'];
    }

    public function addTodo()
    {
        $this->validate();

        event(new TodoEvent($this->todo));
        
        $this->todo = '';
    }

    public function render()
    {
        return view('livewire.todos');
    }
    
}
