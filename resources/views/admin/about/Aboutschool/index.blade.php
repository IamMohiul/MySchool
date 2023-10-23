@extends('admin.layouts.layout')

@section('content')
<section class="section">
    <div class="section-header">
      <div class="section-header-back">
        <a href="{{ url()->previous() }}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
      </div>
      <h1>প্রতিষ্ঠান সম্পর্কে</h1>
    </div>

    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">

                <form action="{{ route('admin.About_school.update',1) }}"  method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    {{-- <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title</label>
                        <div class="col-sm-12 col-md-7">
                          <input type="text" name="title" class="form-control" value="{{ $aboutschool->title }}">
                        </div>
                    </div> --}}

                    {{-- <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Sub Title</label>
                      <div class="col-sm-12 col-md-7">
                        <textarea type="text" name="sub_title" id="" class="form-control" style="height:100px">{{ $aboutschool->sub_title }}</textarea>
                      </div>
                    </div> --}}

                    @if ($aboutschool->image)
                      <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Preview Image</label>
                        <div class="col-sm-12 col-md-7">
                          <img class="w-25" src="{{ asset($aboutschool->image) }}" alt="">
                        </div>
                      </div>
                    @endif

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Heading Image</label>
                        <div class="col-sm-12 col-md-7">
                            <div class="custom-file">
                                <input type="file" name="image" class="custom-file-input" id="customFile">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Description</label>
                      <div class="col-sm-12 col-md-7">
                        <textarea type="text" name="content" id="" class="summernote" style="">{{$aboutschool->content}}</textarea>
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
