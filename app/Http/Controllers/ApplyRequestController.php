<?php

namespace App\Http\Controllers;

use App\Models\ApplyRequest;
use Illuminate\Http\Request;

class ApplyRequestController extends Controller
{
    public function index(Request $request)
    {
        if ($request->search === "name")
            return ApplyRequest::all();
        return ApplyRequest::with(['school', 'user'])->get();
    }

    public function store(Request $request)
    {
        $request->validate([
            'school_id' => 'required|max:255',
            'hotel_id' => 'required|max:255',
            'full_name' => 'required|max:255',
            'id_code' => 'required|max:255',
            'grade' => 'required|max:255',
        ]);
        return ApplyRequest::create($request->all());
    }

    public function show($id, Request $request)
    {
        // $user = User::find($id)->get();
        $ApplyRequests = ApplyRequest::where('user_id', $id)->with('school')->get();

        return $ApplyRequests;
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'school_id' => 'required|max:255',
            'hotel_id' => 'required|max:255',
            'full_name' => 'required|max:255',
            'id_code' => 'required|max:255',
            'grade' => 'required|max:255',
        ]);
        $ApplyRequest = ApplyRequest::find($id);
        $ApplyRequest->update($request->all());
        return $ApplyRequest;
    }

    public function destroy($id)
    {
        return ApplyRequest::destroy($id) === 0
            ? response(["status" => "failure"], 404)
            : response(["status" => "success"], 200);
    }
}
