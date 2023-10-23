@extends('admin.layouts.layout')

@section('content')
<section class="section">
    <div class="section-header">
      <div class="section-header-back">
        <a href="features-posts.html" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
      </div>
      <h1>চেয়ারম্যান</h1>
    </div>

    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
                <h4>Edit Member</h4>
              </div>
            <div class="card-body">

                <form action="{{ route('admin.Chairmanlist.update', $Chairmanlist->id) }}"  method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Name</label>
                        <div class="col-sm-12 col-md-7">
                                <input type="text" name="name" class="form-control" value="{{ $Chairmanlist->name }}">
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Profession</label>
                      <div class="col-sm-12 col-md-7">
                              <input type="text" name="profession" class="form-control" value="{{ $Chairmanlist->profession }}">
                      </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Duration</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="text" name="duration" class="form-control" value="{{ $Chairmanlist->duration }}">
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Mobile</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="text" name="mobile" class="form-control" value="{{ $Chairmanlist->mobile }}">
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">E-mail</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="email" name="email" class="form-control" value="{{ $Chairmanlist->email }}">
                        </div>
                    </div>

                    @if ($Chairmanlist->image)
                      <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Preview Image</label>
                        <div class="col-sm-12 col-md-7">
                          <img class="w-25" src="{{ asset($Chairmanlist->image) }}" alt="">
                        </div>
                      </div>
                    @endif

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Upload Image</label>
                        <div class="col-sm-12 col-md-7">
                          <div class="custom-file">
                            <input type="file" name="image" class="custom-file-input" id="customFile">
                            <label class="custom-file-label" for="customFile">Choose file</label>
                          </div>
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                        <div class="col-sm-12 col-md-7">
                          <button class="btn btn-primary">Update</button>
                        </div>
                    </div>

                </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection