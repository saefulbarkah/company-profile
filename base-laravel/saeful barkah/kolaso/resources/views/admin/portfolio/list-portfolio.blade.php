@extends('admin.layouts.master')


@section('pages-title','List Portfolio')
@section('content')

@push('styles')
<!-- DataTables -->
<link rel="stylesheet" href="{{ asset('assets2/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets2/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets2/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endpush


{{-- content --}}
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <a href="{{ url('admin/list-tag-portfolio') }}" class="btn btn-warning">
                    <i class="fa fa-tags"></i>
                    List tag
                </a>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default">
                    <i class="fa fa-plus"></i>
                    New portfolio
                </button>

                {{-- modal create --}}
                <div class="modal fade" id="modal-default">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">New Portfolio</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ url('admin/portfolio/post') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" name="name" class="form-control" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleSelectRounded0">Tag</label>
                                        <select class="custom-select rounded-0" name="portfolio_tag_id"
                                            id="exampleSelectRounded0">
                                            <option selected disabled>-- Choose Tag --</option>
                                            @foreach ($tag as $data)
                                            <option value="{{ $data->id }}">{{ $data->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputFile">Upload image</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" onchange="previewFile(this);" name="image"
                                                    class="custom-file-input" id="exampleInputFile">
                                                <label class="custom-file-label" for="exampleInputFile">Choose
                                                    file</label>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="img-preview">
                                        <div class="col-lg-12">
                                            <label for="">Image Preview</label>
                                        </div>
                                        <img id="previewImg" src="https://ti.unima.ac.id/assets_web/img/no_image.jpg"
                                            alt="Placeholder" class="img-fluid" width="30%">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default"
                                            data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <table id="dataTable" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Tag</th>
                            <th>action</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>
{{-- end --}}

@push('scripts')
<script src="{{ asset('assets2/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets2/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets2/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('assets2/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets2/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('assets2/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script>
    $('#dataTable').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });

      function previewFile(input){
        var file = $("input[type=file]").get(0).files[0];

        if(file){
            var reader = new FileReader();

            reader.onload = function(){
                $("#previewImg").attr("src", reader.result);
            }

            reader.readAsDataURL(file);
        }
    }

</script>

@endpush

@endsection
