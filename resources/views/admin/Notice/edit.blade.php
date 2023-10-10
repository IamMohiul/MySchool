@extends('admin.layouts.layout')

@section('content')
<section class="section">
    <div class="section-header">
      <div class="section-header-back">
        <a href="features-posts.html" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
      </div>
      <h1>Notice</h1>
    </div>

    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
                <h4>Edit Notice</h4>
              </div>
            <div class="card-body">

                <form action="{{ route('admin.Notice.update', $Notice->id) }}"  method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title</label>
                        <div class="col-sm-12 col-md-7">
                                <input type="text" name="title" class="form-control" value="{{ $Notice->title }}">
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Category</label>
                        <div class="col-sm-12 col-md-7">
                          <select class="form-control selectric" name="category_id">
                            <option>Select</option>
                            @foreach ($categories as $category)
                                <option {{ $category->id == $Notice->category_id ? 'selected':''}} value="{{ $category->id }}">{{ $category ->name }}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Upload PDF</label>
                        <div class="col-sm-12 col-md-7">
                          <div class="custom-file">
                            <input type="file" name="npdf" class="custom-file-input" id="customFile">
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