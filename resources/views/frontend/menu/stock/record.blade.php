@extends('frontend.welcome')
@section('frontend')
@section('title')
Stock Record
@endsection

<div class="pagetitle">
    <h1>Stock Record</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">Stock Record</li>
        <li class="breadcrumb-item active">View</li>
      </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Stock In</h5>
                    <table class="table datatable">
                        <thead>
                            <tr>
                                <th>
                                    Date
                                </th>
                                <th>
                                    name
                                </th>
                                <th>
                                    In / Out
                                </th>
                                <th>
                                    Quantity
                                </th>
                                {{-- <th>Action</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($record as $data)
                            <tr>
                                <td>{{ $data->created_at }}</td>
                                <td>{{ $data->name }}</td>
                                <td>{{ $data->inout }}</td>
                                @if ($data->inout == 'In')
                                    <td>+ {{ $data->quantity }}</td>
                                @else
                                    <td>- {{ $data->quantity }}</td>
                                @endif
                                {{-- <td>
                                    <a href="#" class="btn btn-info btn-sm" title="Edit Data">
                                        Edit 
                                    </a>
                                    <a href="#" class="btn btn-danger btn-sm" title="Delete Data" id="delete">
                                        Delete
                                    </a>
                                </td> --}}
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <!-- End Table with stripped rows -->
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
