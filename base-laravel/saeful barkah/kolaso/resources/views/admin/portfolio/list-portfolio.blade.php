@extends('admin.layouts.master')


@section('content')

@push('styles')
<link href="{{ asset('assets2/plugins/datatable/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" />
@endpush


{{-- content --}}
<!--breadcrumb-->
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Portfolio</div>
    <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}"><i class="bx bx-home-alt"></i></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">List Portfolio</li>
            </ol>
        </nav>
    </div>
</div>
<!--end breadcrumb-->
<hr />
<div class="card shadow">
    <div class="card-body">
        <a href="" class="btn btn-primary"><i class='bx bx-cloud-upload'></i>Upload</a>
    </div>
</div>
<hr />
<div class="card shadow">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped table-bordered DataTable" style="width:100%">
                <thead>
                    <tr>
                        <th>Images</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Portfolio Tag</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>saa</td>
                        <td>saa</td>
                        <td>saa</td>
                        <td>saa</td>
                        <td>
                            <a href="{{ url('#') }}" class="btn btn-primary btn-sm"><i class="bx bx-edit-alt"></i></a>
                            <a href="{{ url('#') }}" class="btn btn-danger btn-sm "><i class="bx bx-trash-alt"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
{{-- end --}}

@push('scripts')
<script src="{{ asset('assets2/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets2/plugins/datatable/js/dataTables.bootstrap5.min.js') }}"></script>
<script>
    $(document).ready(function() {
        $('.DataTable').DataTable();
      } );
</script>
@endpush

@endsection
