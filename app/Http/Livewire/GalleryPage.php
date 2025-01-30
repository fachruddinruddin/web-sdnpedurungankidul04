<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Gallery;

class GalleryPage extends Component
{
    public $galleries;

    public function mount()
    {
        $this->galleries = Gallery::latest()->get();
    }

    public function render()
    {
        return view('livewire.gallery-page');
    }
}