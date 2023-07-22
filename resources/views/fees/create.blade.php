@extends('layout.app')

@section('title')
    Add Fees
@endsection

@section('content')
    <form action="{{ route('fees.store', ['id' => $student->id]) }}" method="POST"
        class="border shadow-lg p-3 w-50 text-center mx-auto mt-5   ">
        <h1 class="text-center m-1">Pay Fees</h1>
        @csrf
        <div class="row">
            <div class="col-lg-6">
                <div class="form-floating mb-3 mt-3">
                    <input type="text" readonly class="form-control" value="{{ $student->full_name }}">
                    <label for="inputName" class="form-check-label">Student Name</label>
                </div>


                <div class="form-floating mb-3 mt-3">
                    <input type="text" readonly class="form-control" value="{{ $student->net_fees }}">
                    <label for="inputName" class="form-check-label">Total Fees</label>
                </div>

                <div class="form-floating mb-3 mt-3">
                    <input type="text" readonly class="form-control" value="{{ paidAmount($student->id) }}">
                    <label for="inputName" class="form-check-label">Paid Amount</label>
                </div>

                <div class="form-floating mb-3 mt-3">
                    <input type="date" class="form-control" name="date" value="{{ old('date') ?? Date('Y-m-d') }}">
                    <label for="inputName" class="form-check-label">Date</label>
                </div>

            </div>
            <div class="col-lg-6">

                <div class="form-floating mb-3 mt-3">
                    <input type="text" readonly class="form-control"
                        value="{{ $student->net_fees - paidAmount($student->id) }}" name="payable_fees">
                    <label for="inputName" class="form-check-label">Payable Fees</label>
                </div>

                <div class="form-floating mb-3 mt-3">
                    <input type="number" placeholder="Full Name" name="amount" class="form-control"
                        value="{{ old('amount') }}"  step="0.01">
                    <label for="inputName" class="form-check-label">Enter Amount</label>
                    <span class="text-danger">
                        @error('amount')
                            {{ $message }}
                        @enderror
                    </span>
                </div>

                <div class="form-floating mb-3 mt-3">
                    <input type="number" placeholder="Full Name" name="confirm_amount" class="form-control"
                        value="{{ old('confirm_amount') }}"  step="0.01">
                    <label for="inputName" class="form-check-label">Confirm Amount</label>
                    <span class="text-danger">
                        @error('confirm_amount')
                            {{ $message }}
                        @enderror
                    </span>
                </div>

                <button type="submit" class="btn btn-primary">Add Fees</button>
                <a href="{{ route('fees.index') }}" class="btn btn-secondary">Back</a>
            </div>
        </div>

    </form>
@endsection
