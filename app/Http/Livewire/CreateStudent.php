<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Student;
use Carbon\Carbon;
use Livewire\WithFileUploads;

class CreateStudent extends Component
{
    use WithFileUploads;


    public Student $student;
    public $photo;

    protected $rules = [
        'student.name' => 'required|string|min:3',
        'student.grade' => 'required|string',
        'student.department' => 'required|string|min:3',
        'photo' => 'required',
    ];
    
    public function mount()
    {
        $this->student = new Student();
    }

    public function save()
    {
        $this->validate();

        //$this->student->photo = '';

        $photoName = Carbon::now()->timestamp. '.' .$this->photo->extension();
        $this->photo->storeAs('student_images', $photoName, 'public');
        $this->student->photo = $photoName;

        $this->student->save();        

        return redirect()->to('/student-list');
    }     
    
    
    public function render()
    {
        return view('livewire.create-student');
    }
}
