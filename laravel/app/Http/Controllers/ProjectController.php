<?php

namespace App\Http\Controllers;

use Auth;
use Gate;
use Validator;
use Illuminate\Http\Request;
use \App\Project;
use \App\Services\Treinaweb;
use \App\Http\Requests\ProjectRequest;
use illuminate\Contracts\Validation\Factory;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $projects = Project::get();
        return view('projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\ProjectRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $result = Project::create($request->all());

       if($result){
            $request->session()->flash('success','Projeto cadastrado com sucesso!');
       }else{
           $request->session()->flash('error','Erro ao cadastrar cliente');
       }
       return redirect()->route('projects.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        return view('projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        // $this->authorize('update-project', $project);        
        return view('projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        $result = $project->update($request->all());

       if($result){
            $request->session()->flash('success','Projeto atualizado com sucesso!');
        }else{
            $request->session()->flash('error','Erro ao atualizar projeto');
        }
       return redirect()->route('projects.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project, Request $request)
    {
        if($project->delete()){
            $request->session()->flash('success','Projeto deletado com sucesso!');
        }else{
            $request->session()->flash('error','Erro ao deletar projeto');
        }
            return redirect()->route('projects.index');
    }
}
