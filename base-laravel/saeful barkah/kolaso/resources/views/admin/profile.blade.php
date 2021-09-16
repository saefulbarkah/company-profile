@extends('admin.layouts.master')

@section('title-page','Profile Website')
@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <ul class="nav nav-tabs nav-tabs-primary top-icon nav-justified">
                    <li class="nav-item">
                        <a href="javascript:void();" data-target="#profile" data-toggle="pill"
                            class="nav-link active"><i class="icon-user"></i> <span class="hidden-xs">Profile</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="javascript:void();" data-target="#edit" data-toggle="pill" class="nav-link"><i
                                class="icon-note"></i> <span class="hidden-xs">Edit</span></a>
                    </li>
                </ul>
                <div class="tab-content p-3">
                    <div class="tab-pane active" id="profile">
                        <h5 class="mb-3">Profile Website</h5>
                        <div class="row">
                            <div class="col-md-6">
                                <h6>Judul Website</h6>
                                <p class="ml-4">
                                    {{ ($profile) == '' ? '' : $profile->title_web }}
                                </p>
                                <h6>No Telepon Perusahaan</h6>
                                <p class="ml-4">
                                    {{ ($profile) == '' ? '' : $profile->phone_number }}
                                </p>
                                <h6>Email Perusahaan</h6>
                                <p class="ml-4">
                                    {{ ($profile) == '' ? '' : $profile->email }}
                                </p>
                                <h6>Alamat Perusahaan</h6>
                                <p class="ml-4">
                                    {{ ($profile) == '' ? '' : $profile->address }}
                                </p>
                            </div>
                        </div>
                        <!--/row-->
                    </div>
                    <div class="tab-pane" id="edit">
                        <form action="{{ url('admin/profile/update',($profile) == '' ? '' : $profile->id) }}"
                            method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{ ($profile) == '' ? '' : $profile->id }}">
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Judul Website</label>
                                <div class="col-lg-9">
                                    <input class="form-control" type="text" name="title_web"
                                        value="{{ ($profile) == '' ? '' : $profile->title_web }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Email Perusahaan</label>
                                <div class="col-lg-9">
                                    <input class="form-control" type="email" name="email"
                                        value="{{ ($profile) == '' ? '' : $profile->email }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">No Telepon Perusahaan</label>
                                <div class="col-lg-9">
                                    <input class="form-control" type="number" name="phone_number"
                                        value="{{ ($profile) == '' ? '' : $profile->phone_number }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="basic-textarea" class="col-sm-3 col-form-label">Alamat Perusahaan</label>
                                <div class="col-sm-9">
                                    <textarea rows="4" class="form-control" id="basic-textarea"
                                        name="address">{{ ($profile) == '' ? '' : $profile->address }}</textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label"></label>
                                <div class="col-lg-9">
                                    <input type="reset" class="btn btn-secondary" value="Batalkan">
                                    <input type="submit" class="btn btn-primary" value="Upadate">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection
