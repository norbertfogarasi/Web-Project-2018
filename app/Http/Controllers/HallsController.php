<?php

namespace App\Http\Controllers;

use App\Hall;

class HallsController extends Controller
{
    public function index()
    {
        $halls = Hall::all();
        return view('halls.index', compact('halls'));
    }

    public function show(Hall $hall)
    {
        return view('halls.show', compact('hall'));
    }

    public function create()
    {
        return view('halls.create');
    }

    public function store()
    {
        $this->validate(request(), [
            'name' => 'required|min:3',
            'piece' => 'required|numeric',
            'price' => 'required|numeric'
        ]);

        Hall::create([
            'name' => request('name'),
            'piece' => request('piece'),
            'price' => request('price')
        ]);

        return redirect('halls');
    }

    public function edit($id)
    {
        $hall = Hall::find($id);
        return view('halls.edit', compact('hall'));
    }

    public function update($id)
    {
        $this->validate(request(), [
            'name' => 'required|min:3',
            'piece' => 'required|numeric',
            'price' => 'required|numeric'
        ]);

        $hall = Hall::where("id", $id)->update([
            'name' => request('name'),
            'piece' => request('piece'),
            'price' => request('price')
        ]);

        return redirect('halls');
    }

    public function destroy($id) {
        $hall = Hall::findOrFail($id);
        $hall->delete();
    }
}
