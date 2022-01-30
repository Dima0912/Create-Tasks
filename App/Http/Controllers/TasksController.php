<?php

namespace App\Http\Controllers;

use App\Facades\TaskFacade;
use App\Http\Requests\CreateTaskRequest;
use App\Http\Requests\UpdateTaskRequest;
use App\Models\Task;
use App\Models\TaskHistory;
use App\Services\TaskHistoryService;
use CreateTaskHistoriesTable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function GuzzleHttp\Promise\task;

class TasksController extends Controller
{
    
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
        return view('tasks/new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateTaskRequest $request)
    {


        $task = new Task();
        $task->title = $request->post('title');
        $task->content = $request->post('content');
        $task->creator_id = 1;
        $task->status_id = 1;
        $task->save();

        return redirect()->route('tasks.show')->with('status', 'Задача успешно создана');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    {

        $task = Task::all();
        return view('tasks/show', compact('task'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Task $task)
    {


        return view('tasks.edit', compact('task'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(UpdatetaskRequest $request, $id)
    {

        $task = Task::find($id);
        $task->title = $request->input('title');
        $task->content = $request->input('content');
        $task->save();
        $tasks = TaskHistoryService::create_history($task);

        return redirect()->route('tasks.show')->with('status', 'Категория обновлена');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task)
    {
    }
}
