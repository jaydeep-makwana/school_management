<?php

namespace App\Http\Livewire;

use App\Models\Fees;
use App\Models\Student;
use Livewire\Component;
use Livewire\WithPagination;

class FeesTable extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $search;
    public $transactions;

    public function showTransactions($id)
    {
        $this->transactions = Fees::where('student_id',$id)->get();

    }

    public function render()
    {
        if (strlen($this->search) > 0) {
            $students = Student::with('courses')->where('full_name', 'like', '%' . $this->search . '%')->paginate(10);
        } else {
            $students = Student::with('courses')->paginate(10);
        }
         
        // $sdsa =  Fees::where('student_id',$this->transactions)->get();

        return view('livewire.fees-table', compact('students'));
    }
}
