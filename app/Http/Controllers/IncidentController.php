<?php

namespace NxTMateriaalbeheer\Http\Controllers;

use Illuminate\Http\Request;
use NxTMateriaalbeheer\Incident;

class IncidentController extends Controller
{
    //show all
    public function index(){
        //show all incidents of current user
        //first get current user
        $user = auth()->user();
        $userId = $user->id;
        //then get all incidents with user_id of current user

        //dd($userId);
        $incidents = Incident::where("user_id", $userId)->get();

        return view("user.incidents_all", compact("incidents") );

    }

    //show single
    public function show($id){
        $incident = Incident::find($id);
        return view("user.incidents_show", compact("incident"));
    }

    //create a new incident
    //needs user id and needs rentalrecord
    public function create(){


    }

    //update changes to existing
    public function update(){

    }

    public function edit(){

    }

    public function store(){
        //validate request

        //then store
    }

    public function destroy(){
        //destroy is only soft delete

    }
}
