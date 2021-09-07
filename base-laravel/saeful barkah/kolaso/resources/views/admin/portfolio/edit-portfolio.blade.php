@extends('admin.layouts.master')

@section('title-page','Tambah Portfolio')
@section('content')
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <i class="icon-menu"></i>
                Menu
            </div>
            <div class="card-body">
                <a href="{{ url('admin/portofolio') }}" class="btn btn-warning">
                    <i class="fa fa-arrow-left"></i>
                    Kembali
                </a>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <i class="fa fa-pencil"></i>
                Form
            </div>
            <div class="card-body">
                <form action="{{ url('admin/portofolio/update',$portfolio->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{ $portfolio->id }}">
                    <div class="form-group row">
                        <label for="basic-input" class="col-sm-3 col-form-label">Nama Item</label>
                        <div class="col-sm-9">
                            <input type="text" name="name" id="basic-input" class="form-control"
                                value="{{ $portfolio->name }}" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="basic-select" class="col-sm-3 col-form-label">jenis Item</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="item_id" id="basic-select" required>
                                <option value="" disabled selected>-- Pilih Jenis Item --</option>
                                @foreach ($item as $data)
                                <option {{ ($portfolio->item_id) == $data->id ? 'selected' : '' }}
                                    value="{{ $data->id }}">
                                    {{ $data->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="input-8" class="col-sm-3 col-form-label">Upload Gambar</label>
                        <div class="col-sm-9">
                            <input id="uploadImage" type="file" class="form-control" id="input-8" name="image"
                                value="{{ $portfolio->image }}" onchange="PreviewImage();">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="input-8" class="col-sm-3 col-form-label">Gambar Preview</label>
                        <div class="col-sm-9">
                            <img id="uploadPreview" src="{{ asset('images/'.$portfolio->image) }}" alt=""
                                class="img-fluid" width="20%">
                        </div>
                    </div>
                    <div class="form-footer">
                        <button type="submit" class="btn btn-success"><i class="fa fa-check-square-o"></i>
                            Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script type="text/javascript">
    function PreviewImage() {
    var oFReader = new FileReader();
    oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);
    oFReader.onload = function (oFREvent)
     {
        document.getElementById("uploadPreview").src = oFREvent.target.result;
    };
    };
</script>
@endpush
