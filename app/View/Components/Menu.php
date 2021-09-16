<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Menu extends Component
{

    public array $items = [];

    public function __construct()
    {
        $this->items = (array) [
            (object) [
                'name' => 'Dashboard',
                'url' => route('admin.index'),
                'icon' => 'mdi-airplay',
            ],
        ];
    }

    public function render(): string
    {
        return /* @lang Blade */
            <<<'blade'
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>
                @foreach ($items as $item)
                    @php($active = request()->url() == $item->url || request()->segment(2) == strtolower($item->name))
                     <li @class(['active' => $active])>
                        <a href="{{$item->url}}" @class(['waves-effect', 'mm-active' => $active])>
                            <i class="mdi {{$item->icon}}"></i>
                            <span>{{$item->name}}</span>
                        </a>
                    </li>
                @endforeach
            </ul>
        blade;
    }
}
