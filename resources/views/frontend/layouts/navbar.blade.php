<div class="col-sm-12 col-12 p-0">
    <!--Top Slider Background-->

    <div class="slider" id="slider1">

      @foreach ($slider as $bgslider)
      <div style="background:linear-gradient(0deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('{{asset(''.$bgslider->image)}}'); background-position: center; background-size: cover;"></div>
      @endforeach

      <span class="titleBar">
        <a href="/" style="color:yellow; font-size:18px;"><img src="frontend/assets/otherimage/logo.jpg" class="img-fluid rounded">গলাচিপা সরকারি কলেজ</a>
      </span>
    </div>
    <!--Mobile Slider-->
    <div id="carouselExampleIndicators" class="carousel slide d-block d-sm-none" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="frontend/assets/frontend/otherimage/slider-01.jpg" class="d-block w-100">
        </div>       
        {{-- <div class="carousel-item">
          <img src="frontend/assets/otherimage/1775045118474611.jpg" class="d-block w-100">
        </div> --}}
        {{-- <div class="carousel-item">
          <img src="frontend/assets/otherimage/1775045487148905.jpg" class="d-block w-100">
        </div> --}}
        {{-- <div class="carousel-item">
          <img src="frontend/assets/otherimage/1775045561085415.jpg" class="d-block w-100">
        </div> --}}
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-----End Mobile Slider------>
  </div><!-------End Slider----->
  <!--Nav Bar-->
  <nav class="navbar navbar-expand-lg navbar-light btco-hover-menu menubar" style="background: #fff; border-bottom: 1px solid #e5e5e5; padding: 0px; box-shadow: 0 1px 5px -2px #999;">
    <a class="navbar-brand d-sm-none d-block" style="color: #000; font-weight: bold;" href="#">Menu</a>
    <button  class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation" style="background-color: #f4f4f4; color: #fff; padding: 5px 10px;">
      <span class="navbar-toggler-icon" style="color: #fff;"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="/"><i class="fa fa-home" aria-hidden="true" style="font-size: 15px;"></i></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">আমাদের সম্পর্কে</a>
          <ul class="dropdown-menu pb-3 bg-white" aria-labelledby="navbarDropdownMenuLink" style="min-width: 400px; ">
            <div class="col-md-12 col-12 dmenu mt-3">
              <div class="row">
                <div class="col-md-6">
                    <li><a href="/About_school">প্রতিষ্ঠান সম্পর্কে</a></li>
                    <li><a href="/Mission_vission">লক্ষ্য এবং উদ্দেশ্য</a></li>
                    <li><a href="/History">ইতিহাস</a></li>
                    <li><a href="/Citizen_charter">সিটিজেন চার্টার</a></li>
                    <li><a href="/Teaching_permission">পাঠদানের অনুমতি ও স্বীকৃতি</a></li>
                    <li><a href="/Mpo_info">এমপিও/জাতীয়করণ তথ্য</a></li>
                </div>
                <div class="col-md-6">
                  <li><a href="/Infrastructure">ভৌত অবকাঠামো</a></li>
                  <li><a href="/Yearly_working_plan">বার্ষিক কর্ম পরিকল্পনা</a></li>
                  <li><a href="/Head_intro">প্রধান শিক্ষক পরিচিতি</a></li>
                  <li><a href="/Contact_us">যোগাযোগের ঠিকানা</a></li>
                </div>
              </div>
            </div>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">প্রশাসনিক তথ্য</a>
            <ul class="dropdown-menu pb-3 bg-white" aria-labelledby="navbarDropdownMenuLink">
              <div class="col-md-12 col-12 dmenu mt-3">
                <li><a href="/President_Message">সভাপতির বাণী</a></li>
                <li><a href="/Message_head">প্রধান শিক্ষকের বাণী</a></li>
                <li><a href="/Managing_comittee">পরিচালনা পর্ষদ তথ্য</a></li>
                <li><a href="/Chairman_list">সভাপতির তালিকা</a></li>
                <li><a href="/Principle_list">প্রধান শিক্ষকদের তালিকা</a></li>
                <li><a href="/Donars_list">দাতা সদস্যদের তালিকা</a></li>
                <li><a href="/Ex_member_list">প্রাক্তন সদস্যদের তালিকা</a></li>
              </div>
            </ul>
        </li>
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">শিক্ষক এবং কর্মচারী</a>
            <ul class="dropdown-menu pb-3 bg-white" aria-labelledby="navbarDropdownMenuLink">
              <div class="col-md-12 col-12 dmenu mt-3">
                <li><a href="/Teacher_info">শিক্ষকবৃন্দের তথ্য</a></li>
                <li><a href="/Staff_info">কর্মচারীদের তথ্য</a></li>
              </div>
            </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">শিক্ষার্থীর তথ্য</a>
            <ul class="dropdown-menu pb-3 bg-white" aria-labelledby="navbarDropdownMenuLink">
              <div class="col-md-12 col-12 dmenu mt-3">
                <li><a href="/gender_based">শ্রেণী ও লিঙ্গ ভিত্তিক শিক্ষার্থী তথ্য</a></li>
                <li><a href="/class6">৬ষ্ঠ শ্রেণী শিক্ষার্থী তথ্য</a></li>
                <li><a href="/class7">৭ম শ্রেণী শিক্ষার্থী তথ্য</a></li>
                <li><a href="/class8">৮ম শ্রেণী শিক্ষার্থী তথ্য</a></li>
                <li><a href="/class9">৯ম শ্রেণী শিক্ষার্থী তথ্য</a></li>
                <li><a href="/class10">১০ম শ্রেণী শিক্ষার্থী তথ্য</a></li>
              </div>
            </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">একাডেমিক তথ্য</a>
          <ul class="dropdown-menu pb-3 bg-white" aria-labelledby="navbarDropdownMenuLink">
            <div class="col-md-12 col-12 dmenu mt-3">
              <li><a href="/Holiday_list">ছুটির তালিকা</a></a></li>
              <li><a href="/Academic_Calender">একাডেমিক ক্যালেন্ডার</a></li>
              <li><a href="/Class_routine">ক্লাস রুটিন</a></li>
              <li><a href="/Syllabas">পাঠ্যসূচী</a></li>
              <li><a href="/Rules_regulation">আচরণ বিধি</a></a></li>
              <li><a href="/Uniform">ইউনিফর্ম</a></li>
              <li><a href="/Fees">ফি সমূহ</a></li>
            </div>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">সহপাঠ্যক্রম</a>
          <ul class="dropdown-menu pb-3 bg-white" aria-labelledby="navbarDropdownMenuLink" style="min-width: 500px;  max-width:100%;">
            <div class="col-md-12 col-12 dmenu mt-3">
              <div class="row">
                <div class="col-md-6">
                  <li><a  href="/Sports">ক্রীড়া কার্যক্রম</a></li>
                  <li><a  href="/Cultural_Activities">সাংস্কৃতিক কার্যক্রম</a></li>
                  <li><a  href="/Scouts">স্কাউটস</a></li>
                  <li><a  href="/Red_Crescent">রেড ক্রিসেন্ট</a></li>
                  <li><a  href="/Study_Tour">শিক্ষা সফর</a></li>
                </div>
                <div class="col-md-6">
                  <li><a  href="/Students_Cabinet">স্টুডেন্টস কেবিনেট</a></li>
                  <li><a  href="/Debate">ডিবেটিং ক্লাব</a></li>
                  <li><a  href="/Science_Fair">বিজ্ঞান মেলা</a></li>
                  <li><a  href="/Language_Club">ল্যাঙ্গুয়েজ ক্লাব</a></li>
                </div>
              </div>
            </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ভর্তি সংক্রান্ত তথ্য</a>
          <ul class="dropdown-menu pb-3 bg-white" aria-labelledby="navbarDropdownMenuLink">
            <div class="col-md-12 col-12 dmenu mt-3">
              <li><a href="/Prospects">প্রসপেক্টাস</a></li>
              <li><a href="/Admission_Rules">ভর্তির নিয়মাবলী</a></li>
              <li><a href="/Admission_Syllabus">ভর্তি পরীক্ষার সিলেবাস</a></li>
              <li><a href="/Admission_Result">ভর্তির ফলাফল</a></li>
            </div>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">পরীক্ষা সংক্রান্ত তথ্য</a>
          <ul class="dropdown-menu pb-3 bg-white" aria-labelledby="navbarDropdownMenuLink">
            <div class="col-md-12 col-12 dmenu mt-3">
              <li><a href="/Exam_rules">পরীক্ষার নিয়মাবলী</a></li>
              <li><a href="/Exam_routine">পরীক্ষা ও ফলাফলের সময়সূচী</a></li>
              <li><a href="/Suggestion">সাজেশন্স</a></li>
            </div>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ফলাফল</a>
          <ul class="dropdown-menu pb-3 bg-white" aria-labelledby="navbarDropdownMenuLink">
            <div class="col-md-12 col-12 dmenu mt-3">
              <li><a href="/Class_Result">অভ্যন্তরীণ ফলাফল</a></li>
              <li><a href="https://eboardresults.com/v2/home" target="blank">পাবলিক পরীক্ষার ফলাফল</a></li>
            </div>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">গ্যালারী</a>
          <ul class="dropdown-menu pb-3 bg-white" aria-labelledby="navbarDropdownMenuLink" style="min-width:180px;">
            <div class="col-md-12 col-12 dmenu mt-3">
              <li><a href="/Photo_gallery">ফটো গ্যালারী</a></li>
              <li><a href="/Video_gallery">ভিডিও গ্যালারী</a></li>
              <li><a href="/Magazine">ম্যাগাজিন</a></li>
            </div>
          </ul>
        {{-- </li>
        <li class="nav-item">
            <a class="nav-link" href="#">অভিযোগ বাক্স</a>
        </li> --}}
      </ul>
    </div>
  </nav><!-- End Navbar -->