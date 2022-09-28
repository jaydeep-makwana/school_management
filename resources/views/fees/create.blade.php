@extends('layout.app')

@section('title')
    Add Course
@endsection

@section('content')
    <form action="{{ route('fees.store', ['id' => $student->id]) }}" method="POST"
        class="border shadow-lg p-3 w-25 text-center mx-auto mt-5   ">
        <h1 class="text-center m-1">Add Fees</h1>
        @csrf


        <div class="form-floating mb-3 mt-3">
            <input type="text" disabled class="form-control" value="{{ $student->full_name }}">
            <label for="inputName" class="form-check-label">Student Name</label>
        </div>

        <div class="form-floating mb-3 mt-3">
            <input type="text" disabled class="form-control" value="{{ $student->net_fees }}">
            <label for="inputName" class="form-check-label">Payable Fees</label>
        </div>

        <div class="form-floating mb-3 mt-3">
            <input type="number" placeholder="Full Name" name="amount" class="form-control" value="{{ old('amount') }}">
            <label for="inputName" class="form-check-label">Enter Amount</label>
            <span class="text-danger">
                @error('amount')
                    {{ $message }}
                @enderror
            </span>
        </div>

        <button type="submit" class="btn btn-primary">Add Fees</button>
        <a href="{{ route('fees.index') }}" class="btn btn-secondary">Back</a>




        </div>

    </form>
@endsection
