<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::all()->sortByDesc('created_at')->toArray();
        return inertia("Jobs/Index", [
            'jobs' => array_values($jobs)
        ]);
    }

    public function create()
    {
        return inertia('Jobs/Create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => ['required'],
            'description' => ['required'],
        ]);

        Job::create($data);

        return redirect('/jobs');
    }
}
