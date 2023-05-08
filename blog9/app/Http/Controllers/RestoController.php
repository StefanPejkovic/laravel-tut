<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RestoController extends Controller
{
    //
    function index()
    {
        return view('home');
    }

    function list()
    {
        $data = Restaurant::all();
        return view('list',["data"=>$data]);
    }
    function add()
    {
        return view('add');
    }
    /*function add_1(Request $req)
    {
        return $req->input();
    }*/

     function add_1(Request $req)
    {
        $resto = new Restaurant();
        $resto->id=$req->input('id'); 
        $resto->name=$req->input('name'); 
        $resto->email=$req->input('email'); 
        $resto->adress=$req->input('adress'); 
        $resto->save();
        $req->session()->flash('status', 'Restaurant add successfully');
        return redirect('list');
    }
    function delete($id)
    {
        Restaurant::find($id)->delete();
        session()->flash('status', 'Restaurant deleted successfully');
        return redirect('list');
    }

    function edit($id)
    {
       $data = Restaurant::find($id);
       return view('edit',["data"=>$data]);
    }
    function update(Request $req)
    {
        $resto = Restaurant::find($req->id);
        $resto->id=$req->input('id'); 
        $resto->name=$req->input('name'); 
        $resto->email=$req->input('email'); 
        $resto->adress=$req->input('adress'); 
        $resto->save();
        $req->session()->flash('status', 'Restaurant update successfully');
        return redirect('list');
    }

    function register()
    {
        return view('register');
    }

    function register_1(Request $req)
    {
        return $req->input();
    }
}
