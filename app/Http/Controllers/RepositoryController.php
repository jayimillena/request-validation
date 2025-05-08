<?php

namespace App\Http\Controllers;

use App\Models\Repository;
use Illuminate\Http\Request;
use App\Http\Requests\RepositoryRequest;

class RepositoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('repository.index', [
            'repositories' => Repository::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('repository.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RepositoryRequest $request)
    {
        $repository_validated_data = $request->validated();
        Repository::create($repository_validated_data);

        return redirect()->route('repositories.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Repository $repository)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Repository $repository)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RepositoryRequest $request, Repository $repository)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Repository $repository)
    {
        //
    }
}
