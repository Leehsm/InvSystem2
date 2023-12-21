@extends('frontend.welcome')
@section('frontend')
@section('title')
Stocklist 
@endsection
<div class="pagetitle">
    <h1>Add Stocklist</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item">Stocklist</li>
            <li class="breadcrumb-item active">Add</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <!-- General Form Elements -->
                    <form method="post" action="{{ route('stocklist.store') }}" enctype="multipart/form-data">
                        @csrf
                        {{-- <div class="row mb-3">
                            <label for="image" class="col-sm-2 col-form-label">Image</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="file" name="image" id="image">
                            </div>
                        </div> --}}
                        <div class="row mb-3">
                            <label for="date" class="col-sm-2 col-form-label">Date</label>
                            <div class="col-sm-10">
                            <input type="date" class="form-control" name="date" id="date">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="name" class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" name="name" id="name">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="quantity" class="col-sm-2 col-form-label">Quantity</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" name="quantity" id="quantity">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="price" class="col-sm-2 col-form-label">Price</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" name="price" id="price">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="color" class="col-sm-2 col-form-label">Color</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" name="color" id="color">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="size" class="col-sm-2 col-form-label">Size</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" name="size" id="size">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label"></label>
                            <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form><!-- End General Form Elements -->
                </div>
            </div>
        </div>
    </div>
</section>
@endsection