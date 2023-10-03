@extends('frontend.layouts.layout')

@section('content')

<div class="col-sm-9 col-12">
  <div class="col-sm-12 col-12 p-0"  data-aos="fade-in" data-aos-duration="2000" >
    <ul class="list-group p-0">
     <li class="list-group-item font-weight-bold bg-success text-light" id="about">প্রধান শিক্ষকের বাণী</li>
   </ul>
   <div class="image" style="text-align:center!important;">
       <img src="{{ asset ('frontend/assets/otherimage/head.jpg')}}" class="img-fluid p-2" style="max-height:300px;">
   </div>
   <div class="name" style="text-align: center;margin-top:20px;font-size:20px;">
     <p>মোঃ ফোরকান কবির</p>
   </div>
   <div>
       <p style="margin-bottom: 10px;">{!! $Headmsg->content !!}</p>
        <p style="margin-bottom: 10px;"><br></p><p style="margin-bottom: 10px;">অধ্যক্ষ <br></p><p style="margin-bottom: 10px;">গলাচিপা সরকারি কলেজ<br></p><p style="margin-bottom: 10px;">গলাচিপা, পটুয়াখালী।</p>
   </div>
</div>
</div>

 @endsection