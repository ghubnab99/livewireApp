<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Student;

class ShowStudents extends Component
{

    public function deleteStudent($id)
    {
        $student = Student::where('id', $id)->first();

        if(!$student)
        {
            return;
        }
        else
        {
            $student->delete();
            return;
        }
    }  


    public function render()
    {
        return view('livewire.show-students', [
            'students' => Student::orderBy('created_at', 'DESC')->get()
        ]);        
    }
}
