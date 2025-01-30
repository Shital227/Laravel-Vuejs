<?php

namespace App\Livewire\Pages\Jobs;

use App\Models\Skill;
use Livewire\Component;
use App\Models\JobPosting;
use Illuminate\Support\Arr;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads; // Required for handling file uploads

    public $skills = [];

    // Form data for creating a new job posting
    public $formData = [
        'title' => '',
        'description' => '',
        'skills' => '',
        'company_name' => '',
        'company_logo' => null,
        'experience' => '',
        'salary' => '',
        'location' => '',
        'extra' => ''
    ];

    // Validation rules for form data
    protected $rules = [
        'formData.title' => 'required|string|max:255',
        'formData.description' => 'required|string',
        'formData.skills' => 'required|array|min:1',
        'formData.company_name' => 'required|string|max:255',
        'formData.company_logo' => 'required|image',
        'formData.experience' => 'required',
        'formData.salary' => 'required',
        'formData.location' => 'required|string|max:255',
        'formData.extra' => 'required|string',
    ];

    public function mount()
    {
        // Fetch all skill names and their IDs, for selection
        $this->skills = Skill::pluck('name', 'id')->toArray();
    }

    public function render()
    {
        return view('livewire.pages.jobs.create');
    }

    public function addJob()
    {
        // Validate the form data based on the rules
        $this->validate();

        // Check if a company logo was uploaded and store it to local
        if ($this->formData['company_logo']) {
            $path = $this->formData['company_logo']->store('company_logos', 'public'); // Store the file in the 'public/company_logos' directory
            $this->formData['company_logo'] = $path;
        }

        // Remove the 'skills' field from the form data before saving it to the database
        $data = Arr::except($this->formData, ['skills']);

        // Create a new job posting using the form data
        $jobPosting = JobPosting::create($data); 

        // If skills were selected, associate them with the new job posting
        if (!empty($this->formData['skills'])) {
            $jobPosting->skills()->sync($this->formData['skills']); // Associate selected skills
        }

        return redirect()->route('admin.jobs.index');
    }

   
}
