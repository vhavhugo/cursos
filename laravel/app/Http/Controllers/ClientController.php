<?php

namespace App\Http\Controllers;

use Gate;
use Validator;
use Illuminate\Http\Request;
use \App\Client;
use \App\Services\Treinaweb;

class ClientController extends Controller
{
    protected $treina;

    public function __construct(Treinaweb $treina)
    {
        $this->treina = $treina;
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //$treina = app()->make(Treinaweb::class);
        dd($this->treina); 
        
        var_dump(session('todotasks'));

        $clients = Client::get();
        return view('clients.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('clients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $client = new Client;
        
        if($request->hasFile('photo')){
            $client->photo = $request->photo->store('public');
        }

       $client->name = $request->input('name');
       $client->email = $request->input('email');
       $client->age = $request->input('age');

       if($client->save()){
            $request->session()->flash('success','Cliente cadastrado com sucesso!');
       }else{
           $request->session()->flash('error','Erro ao cadastrar cliente');
       }

       return redirect()->route('clients.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $client = Client::findOrFail($id);
        return view('clients.show', compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $client = Client::findOrFail($id);

        $this->authorize('client.edit', $client);
        
        return view('clients.edit', compact('client'));
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
        Validator::make($request->all(), [
            'name' => ['required', 'max:100', 'min:3'],
            'email' => ['required', 'email', 'unique:Clients'],
            'age' => ['required', 'integer'],
            'photo' => ['photo' => 'mimes:jpeg,bmp,png']
        ])->validate();

        $client = Client::findOrFail($id);
        
        $this->authorize('client.edit', $client);

        if($request->hasFile('photo')){
            $client->photo = $request->photo->store('public');
        }

       $client->name = $request->input('name');
       $client->email = $request->input('email');
       $client->age = $request->input('age');

       if($client->save()){
            $request->session()->flash('success','Cliente atualizado com sucesso!');
        }else{
            $request->session()->flash('error','Erro ao atualizar cliente');
        }

       return redirect()->route('clients.index');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $client = Client::findOrfail($id);
        $this->authorize('client.edit', $client);
        if($client->delete()){
            session()->flash('success','Cliente deletado com sucesso!');
        }else{
            session()->flash('error','Erro ao deletar cliente');
        }
            return redirect()->route('clients.index');

    }
}
