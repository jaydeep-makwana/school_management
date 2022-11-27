<?php

namespace App\Http\Livewire;

use App\Models\Course;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;
use PHPUnit\Framework\Constraint\Count;

class CourseTable extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    protected $listeners = ['deleteConfirmed' => 'deleteCourse'];

    public $search;
    public $deleteId;

    public function render()
    {
        $courses = Course::where('name', 'like', '%' . $this->search . '%')->paginate(10);

        return view('livewire.course-table', compact('courses'));
    }


    public function deleteConfirmation($id): void
    {
        $this->deleteId = $id;
        $this->dispatchBrowserEvent('delete-course');
    }

    public function deleteCourse(): void
    {
        Course::find($this->deleteId)->delete();
    }
}
