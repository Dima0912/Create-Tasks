<?php

namespace App\Http\Controllers;

use App\Facades\TaskFacade;
use App\Models\Task;
use App\Models\TaskHistory;
use App\Services\TaskService;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\task;

class TasksController extends Controller
{
    // protected $tasks;

    // protected $task;
    // public function __construct(TaskService $tasks)
    // {
    //     $this->tasks = $tasks;
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return 'dfhgfh';
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(TaskService $service, $id )
    {

    
        //    if ($service->update($id)) return redirect()->back()->with('status', 'Обновлено');
       
        // $task = TaskFacade::update($id);

        // return view('task.update');

        $task = Task::find($id);
        $task->title = '39ы12314w';
        $task->content = '31ы12134w';
        $task->save();


         $task = TaskService::create_history($task);
   


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
