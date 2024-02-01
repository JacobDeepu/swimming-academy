<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PoolRequest;
use App\Models\Pool;

class PoolController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->authorize('view a pool');

        $pools = Pool::latest();
        $pools = $pools->paginate(5);

        return view('admin.pool.index', compact('pools'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->authorize('create a pool');

        return view('admin.pool.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PoolRequest $request)
    {
        $this->authorize('create a pool');

        Pool::create($request->validated());

        return redirect()->route('pool.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pool $pool)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pool $pool)
    {
        $this->authorize('update a pool');

        return view('admin.pool.edit', compact('pool'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PoolRequest $request, Pool $pool)
    {
        $this->authorize('update a pool');

        $pool->update($request->validated());

        return redirect()->route('pool.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pool $pool)
    {
        //
    }
}
