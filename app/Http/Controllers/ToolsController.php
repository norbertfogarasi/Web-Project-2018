<?php

namespace App\Http\Controllers;

use App\Tool;

class ToolsController extends Controller
{
    public function index()
    {
        $tools = Tool::all();
        return view('tools.index', compact('tools'));
    }

    public function show(Tool $tool)
    {
        return view('tools.show', compact('tool'));
    }

    public function create()
    {
        return view('tools.create');
    }

    public function store()
    {
        $this->validate(request(), [
            'name' => 'required|min:3',
            'piece' => 'required|numeric',
            'price' => 'required|numeric'
        ]);

        Tool::create([
            'name' => request('name'),
            'piece' => request('piece'),
            'price' => request('price')
        ]);

        return redirect('tools');
    }

    public function edit($id)
    {
        $tool = Tool::find($id);
        return view('tools.edit', compact('tool'));
    }

    public function update($id)
    {
        $this->validate(request(), [
            'name' => 'required|min:3',
            'piece' => 'required|numeric',
            'price' => 'required|numeric'
        ]);

        $tool = Tool::where("id", $id)->update([
            'name' => request('name'),
            'piece' => request('piece'),
            'price' => request('price')
        ]);
        return redirect('tools');
    }

    public function destroy($id) {
        $tool = Tool::findOrFail($id);
        $tool->delete();
    }
}
