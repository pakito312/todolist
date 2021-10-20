<?php
//app/Http/Livewire/Todo/Show.php
namespace App\Http\Livewire\Todo;

use App\Models\TodoItem;
use Livewire\Component;

class Show extends Component
{
    protected $listeners = ['saved'];

    public function render()
    {
        $list = TodoItem::whereUserId(auth()->user()->id)->get()->sortByDesc('created_at');

        return view('livewire.todo.show', [ 'list' => $list ]);
    }

    public function saved()
    {
        $this->render();
    }
}

