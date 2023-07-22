<?php

namespace App\Http\Livewire;

use App\Models\Course;
use App\Models\Student;
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
    public $gender;

    public function mount()
    {
        $this->courses = Course::all();
    }

    public function gender($value)
    {
        $this->gender = $value === Student::GENDER[Student::MALE] ? Student::MALE : Student::FEMALE;
    }

    public function deleteConfirmation($id): void
    {
        $this->deleteId = $id;
        $this->dispatchBrowserEvent('delete-student');
    }

    public function deleteStudent(): void
    {
        $student = Student::find($this->deleteId);
        $student->studentFees()->delete();
        $student->delete();
    }

    public function render()
    {
        $search =  $this->search;
        $startsAt =  $this->startsAt;
        $endsAt =  $this->endsAt;
        $courseId =  $this->courseId;
        $gender =  $this->gender;

        $students = Student::with('courses')
            ->where('full_name', 'like', '%' . $search . '%')
            ->where('course_id', manageOperator($courseId), $courseId)
            ->where('gender', manageOperator($gender), $gender)
            ->paginate(10);

        if (!empty($startsAt) && !empty($endsAt)) {
            $students = Student::with('courses')
                ->where('full_name', 'like', '%' . $search . '%')
                ->where('course_id', manageOperator($courseId), $courseId)
                ->where('gender', manageOperator($gender), $gender)
                ->whereBetween('start_batch_time', [$startsAt, $endsAt])
                ->whereBetween('end_batch_time', [$startsAt, $endsAt])
                ->paginate(10);
        }

        $searchResult = $students->total();

        return view('livewire.student-table', compact('students', 'searchResult'));
    }
}
