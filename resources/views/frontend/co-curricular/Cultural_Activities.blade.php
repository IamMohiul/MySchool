@extends('frontend.layouts.layout')

@section('content')

<div class="col-sm-9 col-12">
    <div class="col-sm-12 col-12 p-0"  data-aos="fade-in" data-aos-duration="2000" >
       <ul class="list-group p-0">
        <li class="list-group-item font-weight-bold bg-success text-light" id="about">প্রতিষ্ঠান সম্পর্কে</li>
      </ul>
      <li class="list-group-item">
        <div style="font-size: 14px; line-height: 25px; text-align: justify;">
              @if ($Cultural->image)
                <div class="text-center">
                  <img src="{{ asset($Cultural->image) }}" alt="">
                </div>
              @endif
            <p>{!! $Cultural->content !!}</p>
       </div>
     </li>
   </div>
 </div>

 @endsection