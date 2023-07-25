<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFeesRequest;
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
    public function store(StoreFeesRequest $request, $id)
    {
        $input = $request->all();
        $input['student_id'] = $id;
        Fees::create($input);

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
