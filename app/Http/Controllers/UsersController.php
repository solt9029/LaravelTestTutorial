<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function test()
    {
        return 'test';
    }

    public function json()
    {
        $array = [
            'test' => 'test',
            'comment' => 'okay',
            'age' => 20,
            'version' => 5.4,
            'friends' => ['John', 'Amy', 'Kath']
        ];

        return $array;
    }
}
