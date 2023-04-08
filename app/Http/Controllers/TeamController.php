<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teams = Team::all()->sortByDesc('created_at');
        return view('admin.teams', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.team-create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        Team::create([
            'name' => $request->name,
            'pic' => $request->pic,
            'address' => $request->address,
            'total_member' => $request->total_member
        ]);

        return redirect('/admin/team');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $team = Team::find($id);
        return view('admin.team-update', compact('team'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        // dd($request);
        $team = Team::find($id);
        $team->update([
            'name' => $request->name,
            'pic' => $request->pic,
            'address' => $request->address,
            'total_member' => $request->total_member
        ]);

        return redirect('/admin/team');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $team = Team::find($id);
        $team->delete();
        return redirect('/admin/team');
    }
}
