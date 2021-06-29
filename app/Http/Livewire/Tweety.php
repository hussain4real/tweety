<?php

namespace App\Http\Livewire;


use App\Tweet;
use Livewire\Component;

class Tweety extends Component
{
    public $body;

    protected $rules = [
        'body' => 'required|max:255'
    ];

    public function submitTweet()
    {
        $this->validate();

        sleep(2);
        Tweet::create([
            'user_id' => auth()->id(),
            'body' => $this->body,
        ]);
        $this->resetForm();
    }

    private function resetForm()
    {
        $this->body = '';
    }

    public function render()
    {
        return view('livewire.tweety');
    }
}
