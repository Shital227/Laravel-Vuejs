<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\JobPosting;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use Inertia\Response;

class DashboardController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function index(Request $request): Response
    {
        // Fetch all job postings along with their associated skills
        $jobs = JobPosting::with('skills:name')->orderBy('id', 'desc')->get();
        
        return Inertia::render('Dashboard', [
           'jobs' => $jobs
        ]);
    }

    
}
