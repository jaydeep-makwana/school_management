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
            'amount' => 'required',
        ]);

        Fees::create([
            'student_id' => $id,
            'amount' => $request->amount,
            'date' => Date('Y-m-d'),
        ]);

        return redirect(route('fees.index'));
    }

    public function show()
    {
        $transactions = Fees::orderBy('id', 'desc')->paginate(10);
       return view('fees.transactions',compact('transactions'));
    }
}
