@extends('admin.layouts.layout')

@section('content')
<section class="section">
    <div class="section-header">
      <div class="section-header-back">
        <a href="features-posts.html" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
      </div>
      <h1>Section</h1>
    </div>

    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
                <h4>Add Section</h4>
              </div>
            <div class="card-body">

                <form action="{{ route('admin.Students.store') }}"  method="POST" enctype="multipart/form-data">
                    @csrf


                    <div class="form-group row mb-4">
                        <label for="class" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">শ্রেণি</label>
                        <div class="col-sm-12 col-md-7">
                          <select class="form-control selectric" name="class_id" id="class">
                            <option>Select</option>
                            @foreach ($Classes as $class)
                                <option value="{{ $class->id }}">{{ $class ->name }}</option>
                            @endforeach
                          </select>
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">শাখা</label>
                        <div class="col-sm-12 col-md-7">
                          <input type="text" name="section" class="form-control" value="">
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">ছাত্র</label>
                        <div class="col-sm-12 col-md-7">
                                <input type="text" name="boy" class="form-control" value="">
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">ছাত্রী</label>
                        <div class="col-sm-12 col-md-7">
                                <input type="text" name="girl" class="form-control" value="">
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                        <div class="col-sm-12 col-md-7">
                          <button class="btn btn-primary">Create</button>
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