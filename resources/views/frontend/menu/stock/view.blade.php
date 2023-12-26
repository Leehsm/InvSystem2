@extends('frontend.welcome')
@section('frontend')
@section('title')
Stock List
@endsection

<div class="pagetitle">
    <h1>Stock List</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">Stock List</li>
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
                                    Name
                                </th>
                                <th>
                                    Quantity Left
                                </th>
                                <th>
                                    Price
                                </th>
                                <th>
                                    Color
                                </th>
                                <th>
                                    Size
                                </th>
                                <th>Action</th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($stocklist as $data)
                            <tr>
                                <td>{{ $data->date }}</td>
                                <td>{{ $data->name }}</td>
                                <td>{{ $data->quantity }}</td>
                                <td>{{ $data->price }}</td>
                                <td>{{ $data->color }}</td>
                                <td>{{ $data->size }}</td>
                                <td>
                                    <a href="{{ route('stockin.add', $data->id) }}" class="btn btn-success btn-sm" title="View Data">
                                        Stock in
                                    </a>
                                    <a href="{{ route('stockout.add', $data->id) }}" class="btn btn-warning btn-sm" title="View Data">
                                        Stock out
                                    </a>
                                    <a href="{{ route('stockrecord.view', $data->id) }}" class="btn btn-dark btn-sm" title="View Data">
                                        Record
                                    </a>
                                    <a href="{{ route('stocklist.edit',$data->id) }}" class="btn btn-info btn-sm" title="Edit Data">
                                        Edit 
                                    </a>
                                    <a href="{{ route('stocklist.delete',$data->id) }}" class="btn btn-danger btn-sm" title="Delete Data" id="delete">
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
