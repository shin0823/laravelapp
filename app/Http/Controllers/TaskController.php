<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(Request $request)
    {
        $items = Task::all();
        return view('task.index',['items' => $items]);
    }
    
    public function add(Request $request)
    {
        return view('task.add');
    }
    
    public function create(Request $request)
    {
        $this->validate($request,Task::$rules);
        $task = new Task;
        $form = $request->all();
        unset($form['_token']);
        $task->fill($from)->save; //追加データをテーブルに保存
        return redirect('/task');
    }

    public function delete(Request $request)
    {
        $item = Task::find($request->id); //削除データを検索
        if (isset($item))
        {
         return view('jissyu6_3.del', ['item' => $item]); //データを削除する
        }
        return redirect('/task');
    }
}

