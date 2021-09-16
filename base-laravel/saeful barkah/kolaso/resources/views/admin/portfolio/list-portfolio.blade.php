@extends('admin.layouts.master')

@section('title-page','List Portfolio')
@section('content')
@push('styles')
<!--Data Tables -->
<link href="{{ asset('assets2/plugins/bootstrap-datatable/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet"
    type="text/css">
<link href="{{ asset('assets2/plugins/bootstrap-datatable/css/buttons.bootstrap4.min.css') }}" rel="stylesheet"
    type="text/css">
@endpush

<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <i class="icon-menu"></i>
                Menu
            </div>
            <div class="card-body">
                <a href="{{ url('admin/portofolio/tambah') }}" class="btn btn-primary">
                    <i class="icon-camera"></i>
                    Tambah Foto
                </a>
                <a href="" class="btn btn-warning">
                    <i class="icon-camera"></i>
                    List item
                </a>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header"><i class="fa fa-table"></i> Data Portofolio</div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="default-datatable" class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Gambar </th>
                                <th>Jenis Item</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($portfolio as $no => $data)
                            <tr>
                                <td>{{ $no+1 }}</td>
                                <td>{{ $data->name }}</td>
                                <td>
                                    <img src="{{ asset('images/'.$data->image) }}" alt="" width="60px"
                                        class="img-fluid">
                                </td>
                                <td>{{ $data->item }}</td>
                                <td>
                                    <a href="{{ url('admin/portofolio/edit='.$data->id) }}"
                                        class="btn-sm btn-danger">Edit</a>
                                    <a href="{{ url('admin/portofolio/hapus/'.$data->id) }}"
                                        class="btn-sm btn-danger">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Row-->
@endsection
@push('scripts')
<!--Data Tables js-->
<script src="{{ asset('assets2/plugins/bootstrap-datatable/js/jquery.dataTables.min.js') }}">
</script>
<script src="{{ asset('assets2/plugins/bootstrap-datatable/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets2/plugins/bootstrap-datatable/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('assets2/plugins/bootstrap-datatable/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets2/plugins/bootstrap-datatable/js/jszip.min.js') }}"></script>
<script src="{{ asset('assets2/plugins/bootstrap-datatable/js/pdfmake.min.js') }}"></script>
<script src="{{ asset('assets2/plugins/bootstrap-datatable/js/vfs_fonts.js') }}"></script>
<script src="{{ asset('assets2/plugins/bootstrap-datatable/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('assets2/plugins/bootstrap-datatable/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('assets2/plugins/bootstrap-datatable/js/buttons.colVis.min.js') }}"></script>

<script>
    $(document).ready(function () {
      //Default data table
      $('#default-datatable').DataTable();


      var table = $('#example').DataTable({
        lengthChange: false,
        buttons: ['copy', 'excel', 'pdf', 'print', 'colvis']
      });

      table.buttons().container()
        .appendTo('#example_wrapper .col-md-6:eq(0)');

    });

</script>
@endpush
