<?php

namespace App\Http\Livewire;

use App\Models\Course;
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
    public $courses;
    public $courseId;

    public function mount()
    {
        $this->courses = Course::all();
    }

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
        $startsAt =  $this->startsAt;
        $endsAt =  $this->endsAt;
        $courseId =  $this->courseId;

        if (!empty($startsAt) && !empty($endsAt) && !empty($courseId)) {
            $students = Student::with('courses')->where('full_name', 'like', '%' . $search . '%')->whereBetween('start_batch_time', [$startsAt, $endsAt])->whereBetween('end_batch_time', [$startsAt, $endsAt])->where('course_id', 'like', $this->courseId)->paginate(10);
        } elseif (!empty($startsAt) && !empty($endsAt)) {
            $students = Student::with('courses')->where('full_name', 'like', '%' . $search . '%')->whereBetween('start_batch_time', [$startsAt, $endsAt])->whereBetween('end_batch_time', [$startsAt, $endsAt])->paginate(10);
        } elseif (!empty($courseId)) {
            $students = Student::with('courses')->where('full_name', 'like', '%' . $search . '%')->where('course_id', 'like', $this->courseId)->paginate(10);
        } else {
            $students = Student::with('courses')->where('full_name', 'like', '%' . $search . '%')->paginate(10);
        }

        return view('livewire.student-table', compact('students'));
    }
}
