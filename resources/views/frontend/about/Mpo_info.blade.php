@extends('frontend.layouts.layout')

@section('content')

<div class="col-sm-9 col-12">
    <div class="col-sm-12 col-12 p-0"  data-aos="fade-in" data-aos-duration="2000" >
       <ul class="list-group p-0">
        <li class="list-group-item font-weight-bold bg-success text-light" id="about">এমপিও/জাতীয়করণ তথ্য</li>
      </ul>
      <li class="list-group-item">
        <div style="font-size: 14px; line-height: 25px; text-align: justify;">
          @if ($Mpo->image)
          <img class="w-25" src="{{ asset($Mpo->image) }}" alt="">
        @endif
          <p>{!! $Mpo->content !!}</p>
       </div>
     </li>
   </div>
 </div>

 @endsection