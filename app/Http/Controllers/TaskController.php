<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task as model;
use App\Project;
use App\Http\Requests\Task as req;

class TaskController extends Controller
{
    private $folder = 'task.';
    public function index($id)
    {
    	$user = auth()->id();
    	$project = Project::findOrFail($id);
    	$data = model::whereProjectId($id)->paginate(15);
    	return view($this->folder . 'index', compact('data', 'project'));
    }

    public function show($projectId, $id)
    {
    	$project = Project::findOrFail($projectId);
    	$data = model::findOrFail($id);
    	return view($this->folder . 'show', compact('data', 'project'));
    }

    public function create($projectId)
    {
    	$project = Project::findOrFail($projectId);
    	$projects = Project::pluck('name', 'id');
    	return view($this->folder . 'create', compact('project', 'projects'));
    }

    public function store($projectId, req $req)
    {
    	$project = Project::findOrFail($projectId);
    	model::create(['project_id' =>$project->id, 'name' => $req->name, 'status' => $req->status, 'comment' => $req->comment]);
    	return redirect(route('task.index', $projectId));
    }

    public function edit($projectId, $id)
    {
    	$project = Project::findOrFail($projectId);
    	$data = model::findOrFail($id);
    	$projects = Project::pluck('name', 'id');
    	return view($this->folder . 'edit', compact('data', 'project', 'projects'));
    }

    public function update($projectId, $id, req $req)
    {
    	$data = model::findOrFail($id);
    	$project = Project::findOrFail($projectId);
    	$data->update(['project_id' =>$project->id, 'name' => $req->name, 'status' => $req->status, 'comment' => $req->comment]);
    	return redirect(route('task.index', $projectId));
    }

    public function delete($id)
    {
    	$data = model::findOrFail($id);
    	return view($this->folder . 'delete', compact('data'));
    }

    public function destroy($projectId, $id)
    {
    	$user = auth()->id();
    	$data =  model::findOrFail($id);
    	$data->delete();
    	return redirect(route('task.index', $projectId));
    }
}
