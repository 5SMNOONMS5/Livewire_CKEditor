<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Demo extends Component
{
    public $demo;

    public function render(){
        return view('livewire.demo');
    }

    public function mount(\App\Models\Demo $demo) {
        $this->demo = $demo;
    }

    public function submit() {
        $this->validate();
        $this->demo->save();
    }

    protected function rules(): array {
        return [
            'demo.description' => [
                'required',
                'string',
            ],
        ];
    }
}
