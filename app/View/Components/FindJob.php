<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FindJob extends Component
{
    public $searchQuery = '';

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    public function search()
    {
        // Handle the search logic here (e.g., query the database)
        dd($this->searchQuery); // For demonstration
    }
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.find-job');
    }
}
