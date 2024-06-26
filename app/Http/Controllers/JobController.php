<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Mail;
use App\Mail\JobPosted;


class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::with('employer')->latest()->simplePaginate(7);
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

        $job = Job::create([
            'title' => request('title'),
            'salary' => request('salary'),
            'employer_id' => 1,
        ]);

        Mail::to($job->employer->user)->send(new JobPosted($job));


        return redirect('/jobs');
    }

    public function edit(Job $job)
    {




        return view('jobs.edit', ['job' => $job]);
    }

    public function update(Job $job)
    {
        //authorize


        //validate
        request()->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required']
        ]);
        //update the job and persist

        $job->update([
            'title' => request('title'),
            'salary' => request('salary')
        ]);
        //redirect on the job page
        return redirect('/jobs/' . $job->id);
    }

    public function destroy(Job $job)
    {
        //authorize


        //delete
        $job->delete();
        //redirect
        return redirect('/jobs');
    }
}
