<?php namespace Netizens\TestPkg\Facades;

use Illuminate\Support\Facades\Facade;

class TestPkg extends Facade {

    public static function greetings(){
        return "Co jest grane?";
    }

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() { return 'TestPkg'; }
}