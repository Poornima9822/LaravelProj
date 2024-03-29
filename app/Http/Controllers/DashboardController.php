<?php

namespace App\Http\Controllers;
use App\Models\Student;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    protected $task;

    public function __construct(){
        $this->task = new Student();
    }
    public function index(){
        $response['tasks'] = $this->task->all();
        return view('pages.dashboard.index')->with($response);
    }

    public function store(Request $request){
        $this->task->create($request->all());
        return redirect()->back();
    }

    public function delete($task_id){
        $task = $this->task->find($task_id);
        $task-> delete();
        return redirect()->back();
     }

     public function edit(Request $request){
        $response['task'] = DashboardFacade::get($request['task_id']);
        return view('pages.dashboard.edit')->with($response);
     }
}
