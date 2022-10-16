<div>

    <div class="table-responsive  container">
        <div class="contaier">
            <div class="row">

                <div class="d-flex justify-content-start col-lg-6">
                    <div class="m-2">
                        <input wire:model="search" class="form-control me-2" type="search" placeholder="Search By Name">
                    </div>
                </div>
            </div>
        </div>

        <table class="table text-center align-middle">
            <thead>
                <tr>
                    <th>ID</th>
                    <th><a href=""></a>Name</th>
                    <th>Total Fees</th>
                    <th>Paid</th>
                    <th>Due</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody id="studentData">
                @forelse ($students as $student)
                    <tr>
                        <td>{{ $student->id }}</td>
                        <td><span class="m-2">{{ $student->full_name }}</span><a
                                href="{{ route('students.show', $student->id) }}"><i
                                    class="bi bi-info-circle text-warning"></i></a></td>
                        <td class="text-primary"><i class="bi bi-currency-rupee"></i>{{ $student->net_fees }}</td>
                        <td class="text-success"><i class="bi bi-currency-rupee"></i>{{ paidAmount($student->id) }}</td>
                        <td class="text-danger"><i class="bi bi-currency-rupee"></i>{{ dueAmount($student->id) }}</td>
                        @if (paidAmount($student->id) == 0)
                            <td>
                                <a type="button" class="m-1" href="{{ route('fees.create', $student->id) }}"
                                    class="text-success"><i class="bi bi-plus-square fs-5 text-success"
                                        title="Pay"></i></i></a>
                            </td>
                        @elseif(paidAmount($student->id) == $student->net_fees)
                            <td>
                                <i class="bi bi-check2-square fs-5 text-success" title="Paid"></i>
                            </td>
                        @else
                            <td>
                                <a type="button" class="m-1" wire:click="showTransactions({{ $student->id }})">
                                    <i class="bi bi-info-square fs-5 text-primary" title="Fees History"></i></a>
                                <a type="button" class="m-1" href="{{ route('fees.create', $student->id) }}"
                                    class="text-success">
                                    <i class="bi bi-plus-square fs-5 text-success" title="Pay"></i></i></a>
                            </td>
                        @endif


                    </tr>
                @empty
                    <tr>
                        <td colspan="6">
                            <div class="alert alert-warning m-0" role="alert">
                                No Records Found
                            </div>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <div class="mx-auto w-fit-content">
        {{ $students->links() }}
    </div>


    <!-- Transaction Modal -->
    <div wire:ignore.self class="modal fade" id="feesDetails" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Fees Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Amount</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @isset($transactions)
                                @foreach ($transactions as $transaction)
                                    <tr>
                                        <td>{{ $transaction->amount }}</td>
                                        <td>{{ $transaction->date }}</td>
                                        <td class="w-0"><a type="button"
                                                wire:click="deleteConfirmation({{ $transaction->id }})"><i
                                                    class="bi bi-trash3-fill text-danger fs-5"></i></a></td>
                                    </tr>
                                @endforeach
                            @endisset
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
