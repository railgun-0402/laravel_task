<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TodoList;

class TodoListController extends Controller
{
    public function index() 
    {
        // DBの全リストを取得
        $todo_lists = TodoList::all();
        
        return view('todo_list.index', ['todo_lists' => $todo_lists]);
    }

}