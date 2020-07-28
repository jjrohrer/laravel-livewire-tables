<?php


namespace ElegantTechnologies\LaravelLivewireTables\Traits;

// 7/2020 - This was copied from https://github.com/fawzanm/laravel-livewire-tables, but it looks like unfinished work
//  Don't use until your examine and refactor.
//  This isn't really a reusable trait, but it does create a button when $createEnabled = true 
trait CreateModel
{

    public $createEnabled = false;
    public string $createLabel = 'New Model';
    public $createRoute = '#';
}
