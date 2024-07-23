@extends('layouts.admin')

@section('title')
User Payments
@endsection

@section('content')
<section class="content">
    <div class="">
        <div class="row">
           
            <div class="col-md-12 table-responsive">
                <div class="card table">
                    <div class="card-header">
                        <h4>Successful Applicants</h4>
                    </div>

                    <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">State</th>
                            {{-- <th scope="col">Country</th> --}}
                            <th scope="col">Amount Paid</th>
                            <th scope="col"> Status</th>
                            {{-- <th scope="col"> Reference</th> --}}
                            <th scope="col">Telegram Username</th>
                          </tr>
                        </thead>
                        <tbody>
                            @php
                            $i=1;
                            @endphp
                        @foreach ($payments as $payment)
                        <tr>
                            <th scope="row">{{ $i++ }}</th>
                            <td>{{ $payment->fname }}</td>
                            <td>{{ $payment->lname }}</td>
                            <td>{{ $payment->email }}</td>
                            <td>{{ $payment->phone }}</td>
                            <td>{{ $payment->state }}</td>
                            {{-- <td>{{ $payment->country }}</td> --}}
                            <td> @money($payment->amount)</td>
                            <td>{{ $payment->status }}</td>
                            {{-- <td>{{ $payment->reference }}</td> --}}
                            <td>{{ $payment->username }}</td>
                          </tr>
                        @endforeach
                         
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
