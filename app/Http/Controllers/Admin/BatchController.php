<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\BatchRequest;
use App\Models\Batch;
use Illuminate\View\View;

class BatchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $this->authorize('view a batch');

        $batches = Batch::latest();
        $batches = $batches->paginate(5);

        return view('admin.batch.index', compact('batches'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->authorize('create a batch');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BatchRequest $request)
    {
        $this->authorize('create a batch');
    }

    /**
     * Display the specified resource.
     */
    public function show(Batch $batch)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Batch $batch)
    {
        $this->authorize('update a batch');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BatchRequest $request, Batch $batch)
    {
        $this->authorize('update a batch');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Batch $batch)
    {
        $this->authorize('delete a batch');
    }
}
