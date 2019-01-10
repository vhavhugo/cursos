<?php

namespace App\Http\Controllers\ExtraActions;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Interfaces\ClientRepositoryInterface;

class ClientSearch extends Controller{
    public function __invoke(ClientRepositoryInterfacen $clientRepository, Request $request){
        return $clientRepository->getBySubject($request->search);
    }
}