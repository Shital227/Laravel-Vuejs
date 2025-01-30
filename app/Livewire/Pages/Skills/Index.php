<?php

namespace App\Livewire\Pages\Skills;

use App\Models\Skill;
use Livewire\Component;

class Index extends Component
{
    public $skills = [];
    public string $name = '';

    public function mount()
    {
        // get all the skills from database
        $this->skills = Skill::all();
    }

    public function render()
    {
        return view('livewire.pages.skills.index');
    }

    // Method to add a new skill
    public function addSkill()
    {
        // check validation
        $this->validate([
            'name' => 'required|string|max:255|unique:skills',
        ]);

        // add new skill to database
        Skill::create(['name' => $this->name]);
        $this->skills = Skill::all();

        // Refresh the skill list after adding the new skill
        $this->name = ''; // Reset the form field

    }

    public function deleteSkill($id)
    {
        // delete the skill by id
        Skill::where('id', $id)->delete();
        $this->skills = Skill::all();
    }
    
}
