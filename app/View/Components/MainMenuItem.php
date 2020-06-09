<?php

namespace App\View\Components;

use Illuminate\Support\Facades\Route;
use Illuminate\View\Component;

class MainMenuItem extends Component
{
    public $activeRoute;

    public $href;

    public $title;

    public $icon;

    public function isUrl()
    {
        return Route::currentRouteName() === $this->activeRoute;
    }

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($activeRoute, $title, $icon, $href)
    {
        $this->activeRoute = $activeRoute;
        $this->title = $title;
        $this->icon = $icon;
        $this->href = $href;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.main-menu-item');
    }
}
