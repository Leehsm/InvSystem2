@extends('frontend.welcome')
@section('frontend')
@section('title')
Stock Out
@endsection

<div class="pagetitle">
    <h1>Stock Out</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">Stock Out</li>
        <li class="breadcrumb-item active">View</li>
      </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"></h5>
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
                                    Quantity
                                </th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($stockout as $data)
                            <tr>
                                <td>{{ $data->created_at }}</td>
                                <td>{{ $data->name }}</td>
                                <td>- {{ $data->quantity }}</td>
                                <td>
                                    <a href="#" class="btn btn-info btn-sm" title="Edit Data">
                                        Edit 
                                    </a>
                                    <a href="#" class="btn btn-danger btn-sm" title="Delete Data" id="delete">
                                        Delete
                                    </a>
                                </td>
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
