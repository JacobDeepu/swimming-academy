<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\BatchRequest;
use App\Models\Batch;
use App\Models\Pool;
use App\Models\Schedule;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
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
    public function create(): View
    {
        $this->authorize('create a batch');

        $schedules = Schedule::get();

        $instructors = User::role('Instructor')->get();

        $pools = Pool::get();

        return view('admin.batch.create', compact('schedules', 'instructors', 'pools'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BatchRequest $request): RedirectResponse
    {
        $this->authorize('create a batch');

        Batch::create($request->validated());

        return redirect()->route('batch.index');
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
    public function edit(Batch $batch): View
    {
        $this->authorize('update a batch');

        $schedules = Schedule::get();

        $instructors = User::role('Instructor')->get();

        $pools = Pool::get();

        return view('admin.batch.edit', compact('batch', 'schedules', 'instructors', 'pools'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BatchRequest $request, Batch $batch): RedirectResponse
    {
        $this->authorize('update a batch');

        $batch->update($request->validated());

        return redirect()->route('batch.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Batch $batch)
    {
        $this->authorize('delete a batch');

        $batch->update(['status' => 0]);

        return redirect()->route('batch.index');
    }
}
