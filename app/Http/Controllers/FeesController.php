<?php

namespace App\Http\Controllers;

use App\Models\Fees;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;

class FeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        return view('fees.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $student = Student::find($id);

        return view('fees.create', compact('student'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreFeesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $request->validate([
            'amount' => 'required|lte:payable_fees',
            'confirm_amount' => 'required|same:amount',
        ]);

        Fees::create([
            'student_id' => $id,
            'amount' => $request->amount,
            'date' => $request->date,
        ]);

        return redirect(route('fees.index'));
    }

    public function show()
    {
        $transactions = Fees::orderBy('id', 'desc')->paginate(10);
        return view('fees.transactions', compact('transactions'));
    }

    public function destroy($id)
    {
        Fees::findOrFail($id)->delete();

        return response()->json('Transaction deleted successfully!');
    }
}
