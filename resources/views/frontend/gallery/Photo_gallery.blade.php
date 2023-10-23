@extends('frontend.layouts.layout')

@section('content')

<div class="col-sm-9 col-12">
    <div class="col-sm-12 col-12 p-0"  data-aos="fade-in" data-aos-duration="2000" >
       <ul class="list-group p-0">
        <li class="list-group-item font-weight-bold bg-success text-light" id="about">ফটো গ্যালারি</li>
      </ul>
      <li class="list-group-item">
        <div style="font-size: 14px; line-height: 25px; text-align: justify;">
          <!-- Gallery -->
          <div class="row">
            
              @foreach ($Photogal as $Photo)
              <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
              <img
                src="{{asset($Photo->image)}}"
                class="w-100 shadow-1-strong rounded mb-4"
                alt="Boat on Calm Water"
              />
            </div>
              @endforeach
            
          </div>
          <!-- Gallery -->
       </div>
     </li>
   </div>
 </div>

 @endsection