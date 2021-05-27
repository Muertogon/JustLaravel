<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use App\Models\Tasks;

class TasksController extends Controller
{
    public function store(Request $request){
        $task = new Tasks;

        $task->subject = request('subject');
        $task->priority = request('priority');
        $task->dueDate = request('dueDate');
        $task->status = request('status');
        $task->percComplete = request('percComplete');
        $task->modifiedOn = now();
        //$task->modifiedOn = date('Y-m-d '); 

        //print_r($request->input());
        $task->save();
        return  redirect('all');
    }
    public function delete($name = null){
        Tasks::where('subject', $name)->delete();
        return  redirect('all');
    }
}
