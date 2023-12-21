@extends('frontend.welcome')
@section('frontend')
@section('title')
Stocklist 
@endsection
<div class="pagetitle">
    <h1>Edit Stocklist</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item">Stocklist</li>
            <li class="breadcrumb-item active">Edit</li>
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
                    {{-- <form enctype="multipart/form-data"> --}}
                    <form method="post" action="{{ route('stocklist.update', $stocklist->id) }}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{ $stocklist->id }}">
                        {{-- <div class="row mb-3">
                            <label for="image" class="col-sm-2 col-form-label">Image</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="file" id="image" value="{{ $stocklist-> }}">
                            </div>
                        </div> --}}
                        <div class="row mb-3">
                            <label for="date" class="col-sm-2 col-form-label">Date</label>
                            <div class="col-sm-10">
                            <input type="date" class="form-control" name="date" id="date" value="{{ $stocklist->date }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="map" class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" name="name" value="{{ $stocklist->name }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="map" class="col-sm-2 col-form-label">Quantity</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="quantity" name="quantity" value="{{ $stocklist->quantity }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="map" class="col-sm-2 col-form-label">Price</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="price" name="price" value="{{ $stocklist->price }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="map" class="col-sm-2 col-form-label">Color</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="color" name="color" value="{{ $stocklist->color }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="map" class="col-sm-2 col-form-label">Size</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="size" name="size" value="{{ $stocklist->size }}">
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