<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project as model;
use App\Http\Requests\Project as req;
class ProjectController extends Controller
{
	private $folder = 'project.';
    public function index()
    {
    	$user = auth()->id();
    	$data = model::paginate(15);
    	return view($this->folder . 'index', compact('data'));
    }

    public function show($id)
    {
    	$data = model::findOrFail($id);
    	return view($this->folder . 'show', compact('data'));
    }

    public function create()
    {
    	return view($this->folder . 'create');
    }

    public function store(req $req)
    {

    	model::create(['user_id' => auth()->id(), 'name' => $req->name]);
    	return redirect(route('project.index'));
    }

    public function edit($id)
    {
    	$data = model::findOrFail($id);
    	return view($this->folder . 'edit', compact('data'));
    }

    public function update($id, req $req)
    {
    	$data = model::findOrFail($id);
    	$data->update(['name' => $req->name]);
    	return redirect(route('project.index'));
    }

    public function delete($id)
    {
    	$data = model::findOrFail($id);
    	return view($this->folder . 'delete', compact('data'));
    }

    public function destroy($id)
    {
    	$user = auth()->id();
    	$data =  model::findOrFail($id);
    	$data->delete();
    	return redirect(route('project.index'));
    }


}
