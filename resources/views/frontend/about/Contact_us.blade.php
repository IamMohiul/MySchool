@extends('frontend.layouts.layout')

@section('content')

<div class="col-sm-9 col-12">
  <div class="col-sm-12 col-12 p-0"  data-aos="fade-in" data-aos-duration="2000" >
    <ul class="list-group p-0">
      <li class="list-group-item font-weight-bold bg-success text-light" id="about">যোগাযোগ করুন</li>
    </ul>
    <li class="list-group-item">
      {!! $Contact->content !!}
    <iframe src="" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
  </li>
</div>
</div>

 @endsection