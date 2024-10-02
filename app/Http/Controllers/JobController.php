<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index()
    {
        // avoids n+1 query call
        // $jobs = Job::with('employer')->paginate(5);
        // $jobs = Job::with('employer')->latest()->simplePaginate(4);
        // $jobs = Job::with('employer')->get();
        $jobs = Job::with('employer')->get();
        // dd($jobs);
        return view('jobs.index', [
            'jobs' => $jobs
        ]);
    }

    public function create()
    {
        return view('jobs.create');
    }

    public function show(Job $job)
    {
        return view('jobs.show', ['job' => $job]);
    }

    public function store()
    {
        request()->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required'],
        ]);

        Job::create([
            'title' => request('title'),
            'salary' => request('salary'),
            'employer_id' => 1, // Hardcoded, needs to be fetched from User
        ]);

        return redirect('/jobs');
    }

    public function edit(Job $job)
    {
        return view('jobs.edit', ['job' => $job]);
    }

    public function update(Job $job)
    {
        // auth the request (later...)

        // vaidate the request
        request()->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required'],
        ]);
        // update the job and persist
        $job->update([
            'title' => request('title'),
            'salary' => request('salary'),
        ]);
        // redirect
        return redirect('/jobs/' . $job->id);

    }

    public function destroy(Job $job)
    {
        // auth the request (later...)
        // delete job
        $job->delete();
        // redirect
        return redirect('/jobs');
    }

}
