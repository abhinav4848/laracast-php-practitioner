<?php
namespace App\Controllers;

use App\Core\App;

class UsersController
{
    public function index()
    {
        $tasks = App::get('database')->selectAll('names');
        return view('users', compact('tasks'));
        // or use ['tasks'=>$tasks];
    }

    public function store()
    {
        App::get('database')->insert('names', [
            'firstname' => $_POST['name'],
            'description' => $_POST['description']
        ]);
        
        return redirect('/users');
    }
}