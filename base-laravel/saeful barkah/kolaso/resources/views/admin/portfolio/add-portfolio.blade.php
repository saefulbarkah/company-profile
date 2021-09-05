@extends('admin.layouts.master')

@section('content')
<!--breadcrumb-->
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Portfolio</div>
    <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}"><i class="bx bx-home-alt"></i></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Add Portfolio</li>
            </ol>
        </nav>
    </div>
</div>
<!--end breadcrumb-->
<hr>

<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <form action="{{ url('admin/portfolio/post') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-4">
                        <label class="form-label">Name :</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tag :</label>
                        <select class="form-select mb-3" aria-label="Default select example">
                            <option selected disabled>-- Choose Tag --</option>
                            <option>Kaos</option>
                            <option>Kemeja</option>
                            <option>Jeysey</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Upload Image</label>
                        <input type="file" name="image" class="form-control">
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
