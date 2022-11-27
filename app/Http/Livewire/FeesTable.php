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
    protected $listeners = ['deleteConfirmed' => 'deleteTransaction'];

    public $search;
    public $transactions;
    public $deleteId;

    public function showTransactions($id)
    {
        $this->transactions = Fees::where('student_id', $id)->get();
        $this->dispatchBrowserEvent('open-modal');
    }

    public function deleteConfirmation($id): void
    {
        $this->deleteId = $id;
        $this->dispatchBrowserEvent('delete-transaction');
    }

    public function deleteTransaction(): void
    {
        Fees::find($this->deleteId)->delete();
        $this->dispatchBrowserEvent('close-modal');
    }

    public function render()
    {
        $students = Student::with('courses')->where('full_name', 'like', '%' . $this->search . '%')->paginate(10);

        return view('livewire.fees-table', compact('students'));
    }
}
