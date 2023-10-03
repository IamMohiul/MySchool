@extends('frontend.layouts.layout')

@section('content')

<div class="col-sm-9 col-12">
    <div class="col-sm-12 col-12 p-0"  data-aos="fade-in" data-aos-duration="2000" >
       <ul class="list-group p-0">
        <li class="list-group-item font-weight-bold bg-success text-light" id="about">পাঠদানের অনুমতি ও স্বীকৃতি</li>
      </ul>
      <li class="list-group-item">
        <div style="font-size: 14px; line-height: 25px; text-align: justify;">
          @if ($Teaching->image)
          <img class="w-25" src="{{ asset($Teaching->image) }}" alt="">
        @endif
          <p>{!! $Teaching->content !!}</p>
       </div>
     </li>
   </div>
 </div>

 @endsection