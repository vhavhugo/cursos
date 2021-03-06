<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Repositories\Implementations\TaskRepository;
use App\Repositories\Interfaces\TaskRepositoryInterface;

class TaskController extends Controller
{
    /**
     * 
     *
     * @param TaskRepositoryInterface $tasksRepository
     */
    public function __construct(TaskRepositoryInterface $tasksRepository)
    {
        $this->taskRepository = $tasksRepository;   
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = $this->taskRepository->getAll();
        return view('tasks.index')->with($tasks, compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $task = $this->taskRepository->create([
            'subject'       => $request->subject,
            'made'          => $request->made,
            'description'   => $request->description
        ]);

        if($task){
            $request->session()->flash('sucess', 'Task cadastrada com sucesso');
        }else{
            $request->session()->flash('error', 'Erro ao cadastrar tarefa');
        }
        return redirect()->route('tasks.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $task = $this->taskRepository->find($id);
        return view('tasks.show', compact('task'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $task = $this->taskRepositoty->find($id);
        return view('tasks.edit', compact('task'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $result = $this->taskRepository->update($id, [
                        'subject'       => $request->subject,
                        'made'          => $request->made,
                        'description'   => $request->description
                    ]);

        if($result){
            $request->session()->flash('success','Tarefa atualizada com sucesso!');

        }else{
            $request->session()->flash('error', 'Erro ao atualizar tarefa');
        }
        return redirect()->route('tasks.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        $result = $this->taskRepository->delete($id);
        if($result){
            $request->session()->flash('success', 'Tarefa deletada com sucesso');
        }else{
            $request->session()->flash('error', 'Erro ao deletar tarefa');
        }
        return redirect()->route('tasks.index');
    }
}
