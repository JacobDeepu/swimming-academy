<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ScheduleRequest;
use App\Models\Day;
use App\Models\Schedule;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $this->authorize('view a schedule');

        $schedules = Schedule::where('status', 1)->latest();
        $schedules = $schedules->paginate(5);

        return view('admin.schedule.index', compact('schedules'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $this->authorize('create a schedule');

        $days = Day::all();

        return view('admin.schedule.create', compact('days'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ScheduleRequest $request): RedirectResponse
    {
        $this->authorize('create a schedule');

        $schedule = Schedule::create($request->validated());
        $days = $request->days ?? [];
        $schedule->days()->attach($days);

        return redirect()->route('schedule.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Schedule $schedule)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Schedule $schedule): View
    {
        $this->authorize('update a schedule');

        $days = Day::all();
        $schedule_has_days = array_column(json_decode($schedule->days, true), 'id');

        return view('admin.schedule.edit', compact('schedule', 'days', 'schedule_has_days'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ScheduleRequest $request, Schedule $schedule): RedirectResponse
    {
        $this->authorize('update a schedule');

        $schedule->update($request->validated());
        $days = $request->days ?? [];
        $schedule->days()->sync($days);

        return redirect()->route('schedule.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Schedule $schedule)
    {
        $this->authorize('delete a schedule');

        $schedule->update(['status' => 0]);

        return redirect()->route('schedule.index');
    }
}
