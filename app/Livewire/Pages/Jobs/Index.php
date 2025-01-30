<?php

namespace App\Livewire\Pages\Jobs;

use App\Models\JobPosting;
use Livewire\Component;

class Index extends Component
{
    public $jobs = [];

    public function mount()
    {
        // get all the jobs
        $this->jobs = JobPosting::with('skills:name')->orderBy('id', 'desc')->get();
    }

    public function render()
    {
        return view('livewire.pages.jobs.index');
    }

    public function deleteJob($id)
    {
        // delete job using id
        JobPosting::where('id', $id)->delete();
        $this->jobs = JobPosting::all();
    }
}
