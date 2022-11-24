<?php

namespace App\Http\Controllers;

use App\Models\School;
use Illuminate\Http\Request;

class SchoolController extends Controller
{
    public function index(Request $request)
    {
        if ($request->search) {
            return School::where('name', 'like', '%' . $request['search'] . '%')->get();
        }
        if ($request->sort === "country") {
            return School::with('country')->get()->sortBy('country.name')->values();
        }
        if ($request->sort === "price") {
            return School::with('country')->orderBy('price')->get();
        }


        return School::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255|unique:schools,name',
            'address' => 'required|max:255',
            'code' => 'required|max:255',
        ]);
        return School::create($request->all());
    }

    public function show($id, Request $request)
    {
        if ($request->embed === "comments")
            return School::with('comments')->find($id);
        return School::find($id);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:255',
            'address' => 'required|max:255',
            'code' => 'required|max:255',
        ]);
        $School = School::find($id);
        $School->update($request->all());
        return $School;
    }

    public function destroy($id)
    {
        return School::destroy($id) === 0
            ? response(["status" => "failure"], 404)
            : response(["status" => "success"], 200);
    }

    public function search($name)
    {
        return School::where('name', 'like', '%' . $name . '%')->with('country')->get();
    }
}
