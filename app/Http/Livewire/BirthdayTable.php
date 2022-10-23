<?php

namespace App\Http\Livewire;

use App\Models\Student;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Livewire\Component;
use Livewire\WithPagination;

class BirthdayTable extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $recordInOnePage = 20;

    public function upcoming(Request $request)
    {
        $request->session()->put('upcoming_birthdays', 1);
    }

    public function todays(Request $request)
    {
        $request->session()->forget('upcoming_birthdays');
    }

    public function render()
    {
        if (session('upcoming_birthdays')) {
            $students = returnUpcomingBirthdays($this->recordInOnePage);
        } else {
            $students = returnBirthdays($this->recordInOnePage);
        }

        return view('livewire.birthday-table', compact('students'));
    }
}
