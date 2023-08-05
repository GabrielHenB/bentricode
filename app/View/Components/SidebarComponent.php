<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SidebarComponent extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        //Cacheia a colecao de posts para evitar ficar dando esse SELECT toda vez que usar o layout
        $colecao = \Illuminate\Support\Facades\Cache::remember('sideposts',now()->addHours(2),fn()=>
            \App\Models\Post::latest()->take(3)->get()
        );

        
        
        return view('components.sidebar-component', ['items' => $colecao]);
    }
}
