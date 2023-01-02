<?php

namespace App\Http\Livewire;

use App\Models\Student;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithPagination;

class StudentTable extends Component
{
    use WithPagination;


    protected $paginationTheme = 'bootstrap';
    protected $listeners = ['deleteConfirmed' => 'deleteStudent'];

    public $search;
    public $deleteId;
    public $startsAt;
    public $endsAt;

    public function deleteConfirmation($id): void
    {
        $this->deleteId = $id;
        $this->dispatchBrowserEvent('delete-student');
    }

    public function deleteStudent(): void
    {
        Student::find($this->deleteId)->delete();
    }

    public function render()
    {
        $search =  $this->search;
        $students = Student::with('courses')->where('full_name', 'like', '%' . $search . '%')->whereBetween()->paginate(10);

        return view('livewire.student-table', compact('students'));
    }
}
