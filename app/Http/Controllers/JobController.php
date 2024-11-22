<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::all();
        return inertia("Jobs/Index", [
            'jobs' => $jobs
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

        return Job::create($data);
    }
}
