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
            <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
              <img
                src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp"
                class="w-100 shadow-1-strong rounded mb-4"
                alt="Boat on Calm Water"
              />

              <img
                src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain1.webp"
                class="w-100 shadow-1-strong rounded mb-4"
                alt="Wintry Mountain Landscape"
              />
            </div>

            <div class="col-lg-4 mb-4 mb-lg-0">
              <img
                src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain2.webp"
                class="w-100 shadow-1-strong rounded mb-4"
                alt="Mountains in the Clouds"
              />

              <img
                src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp"
                class="w-100 shadow-1-strong rounded mb-4"
                alt="Boat on Calm Water"
              />
            </div>

            <div class="col-lg-4 mb-4 mb-lg-0">
              <img
                src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(18).webp"
                class="w-100 shadow-1-strong rounded mb-4"
                alt="Waves at Sea"
              />

              <img
                src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain3.webp"
                class="w-100 shadow-1-strong rounded mb-4"
                alt="Yosemite National Park"
              />
            </div>
          </div>
          <!-- Gallery -->
       </div>
     </li>
   </div>
 </div>

 @endsection