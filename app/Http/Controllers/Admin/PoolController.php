<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pool;
use Illuminate\Http\Request;

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
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pool $pool)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pool $pool)
    {
        //
    }
}
