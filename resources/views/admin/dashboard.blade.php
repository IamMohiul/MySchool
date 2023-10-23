@extends('admin.layouts.layout')
@section('content')

      <div class="page-content-wrapper">
        <!-- Product Catagories -->
        <div class="product-catagories-wrapper py-3">
          <div class="container">
            <!-- DashBoard -->
            <div class="col-6">
                <div class="card catagory-card">
                  <div class="card-body px-2"><a href="/dashboard"><img src="{{ asset('') }}" alt=""><span class="d-flex justify-content-center">Dashboard</span></a></div>
                </div>
              </div>
            <div class="row g-2 rtl-flex-d-row-r">
            <!-- Notice -->
              <div class="col-6">
                <div class="card catagory-card">
                  <div class="card-body px-2" id="memberMenuButton" data-toggle="dropdown" aria-expanded="false"><img src="{{ asset('assets/img/dashboard/circle.png') }}" alt=""><span class="d-flex justify-content-center">Notice</span></div>
                    <div class="dropdown-menu" aria-labelledby="memberMenuButton">
                      <a class="dropdown-item" href="{{ route('admin.Ncatagory.index') }}">নোটিশ ক্যাটাগরি</a>
                      <a class="dropdown-item" href="{{ route('admin.Notice.index') }}">নোটিশ</a>
                    </div>
                </div>
              </div>

              <!-- Header -->
              <div class="col-6">
                <div class="card catagory-card">
                  <div class="card-body px-2" id="memberMenuButton" data-toggle="dropdown" aria-expanded="false"><img src="{{ asset('assets/img/dashboard/circle.png') }}" alt=""><span class="d-flex justify-content-center">Header</span></div>
                    <div class="dropdown-menu" aria-labelledby="memberMenuButton">
                      <a class="dropdown-item" href="{{ route ('admin.slider.index') }}">Slider Image</a>
                      {{-- <a class="dropdown-item" href="{{  route ('admin.Description.index')  }}">Site Description</a> --}}
                    </div>
                </div>
              </div>

            <!-- About Us -->
              <div class="col-6">
                <div class="card catagory-card">
                  <div class="card-body px-2" id="memberMenuButton" data-toggle="dropdown" aria-expanded="false"><img src="{{ asset('assets/img/dashboard/circle.png') }}" alt=""><span class="d-flex justify-content-center">আমাদের সম্পর্কে</span></div>
                    <div class="dropdown-menu" aria-labelledby="memberMenuButton">
                      <a class="dropdown-item" href="{{ route ('admin.About_school.index') }}">প্রতিষ্ঠান সম্পর্কে</a>
                      <a class="dropdown-item" href="{{ route ('admin.Teaching.index') }}">পাঠদানের অনুমতি ও স্বীকৃতি</a>
                      <a class="dropdown-item" href="{{ route ('admin.Mpo.index') }}">জাতীয়করণ তথ্য</a>
                      <a class="dropdown-item" href="{{ route ('admin.Infrastructure.index') }}">ভৌত অবকাঠামো</a>
                      <a class="dropdown-item" href="{{ route ('admin.Yearlywork.index') }}">বার্ষিক কর্ম পরিকল্পনা</a>
                      <a class="dropdown-item" href="{{ route ('admin.Contact.index') }}">যোগাযোগের ঠিকানা</a>
                    </div>
                </div>
              </div>

            <!-- Administration -->
            <div class="col-6">
                <div class="card catagory-card">
                  <div class="card-body px-2" id="memberMenuButton" data-toggle="dropdown" aria-expanded="false"><img src="{{ asset('assets/img/dashboard/circle.png') }}" alt=""><span class="d-flex justify-content-center">প্রশাসনিক তথ্য</span></div>
                    <div class="dropdown-menu" aria-labelledby="memberMenuButton">
                      <a class="dropdown-item" href="{{ route ('admin.Headintro.index') }}">অধ্যক্ষ পরিচিতি</a>
                      <a class="dropdown-item" href="{{ route ('admin.Assheadintro.index') }}">উপাধ্যক্ষ পরিচিতি</a>
                      <a class="dropdown-item" href="{{ route ('admin.Messagehead.index') }}">প্রধান শিক্ষকের বাণী</a>
                      <a class="dropdown-item" href="{{ route ('admin.Principlelist.index') }}">প্রধান শিক্ষকদের তালিকা</a>
                    </div>
                </div>
              </div>

            <!-- Teachers & Stuff -->
            <div class="col-6">
                <div class="card catagory-card">
                  <div class="card-body px-2" id="memberMenuButton" data-toggle="dropdown" aria-expanded="false"><img src="{{ asset('assets/img/dashboard/circle.png') }}" alt=""><span class="d-flex justify-content-center">শিক্ষক এবং কর্মচারী</span></div>
                    <div class="dropdown-menu" aria-labelledby="memberMenuButton">
                      <a class="dropdown-item" href="{{ route ('admin.Teacher.index') }}">শিক্ষকবৃন্দের তথ্য</a>
                      <a class="dropdown-item" href="{{ route ('admin.Staff.index') }}">কর্মচারীদের তথ্য</a>
                    </div>
                </div>
              </div>

            <!-- Students -->
            <div class="col-6">
                <div class="card catagory-card">
                  <div class="card-body px-2" id="memberMenuButton" data-toggle="dropdown" aria-expanded="false"><img src="{{ asset('assets/img/dashboard/circle.png') }}" alt=""><span class="d-flex justify-content-center">শিক্ষার্থী তথ্য</span></div>
                    <div class="dropdown-menu" aria-labelledby="memberMenuButton">
                      <a class="dropdown-item" href="{{ route ('admin.Classmake.index') }}">শ্রেণী তৈরী করুন</a>
                      {{-- <a class="dropdown-item" href="{{ route ('admin.Sectionmake.index') }}">শাখা তৈরী করুন</a> --}}
                      <a class="dropdown-item" href="{{ route ('admin.Students.index') }}">শিক্ষার্থীর তথ্য যোগ করুন</a>
                    </div>
                </div>
              </div>

            <!-- Academic -->
            <div class="col-6">
                <div class="card catagory-card">
                  <div class="card-body px-2" id="memberMenuButton" data-toggle="dropdown" aria-expanded="false"><img src="{{ asset('assets/img/dashboard/circle.png') }}" alt=""><span class="d-flex justify-content-center">একাডেমিক তথ্য</span></div>
                    <div class="dropdown-menu" aria-labelledby="memberMenuButton">
                      <a class="dropdown-item" href="{{ route ('admin.Holiday.index') }}">ছুটির তালিকা</a>
                      <a class="dropdown-item" href="{{ route ('admin.Calender.index') }}">একাডেমিক ক্যালেন্ডার</a>
                      <a class="dropdown-item" href="{{ route ('admin.Clsroutine.index') }}">ক্লাস রুটিন</a>
                      <a class="dropdown-item" href="{{ route ('admin.Syllabas.index') }}">পাঠ্যসূচী</a>
                      <a class="dropdown-item" href="{{ route ('admin.Rulesreg.index') }}">আচরণ বিধি</a>
                      <a class="dropdown-item" href="{{ route ('admin.Uniform.index') }}">ইউনিফর্ম</a>
                      <a class="dropdown-item" href="{{ route ('admin.Fees.index') }}">ফি সমূহ</a>
                    </div>
                </div>
              </div>

            <!-- Co-education -->
            <div class="col-6">
                <div class="card catagory-card">
                  <div class="card-body px-2" id="memberMenuButton" data-toggle="dropdown" aria-expanded="false"><img src="{{ asset('assets/img/dashboard/circle.png') }}" alt=""><span class="d-flex justify-content-center">সহপাঠ্যক্রম</span></div>
                    <div class="dropdown-menu" aria-labelledby="memberMenuButton">
                      <a class="dropdown-item" href="{{ route ('admin.Sports.index') }}">ক্রীড়া কার্যক্রম</a>
                      <a class="dropdown-item" href="{{ route ('admin.Cultural.index') }}">সাংস্কৃতিক কার্যক্রম</a>
                      <a class="dropdown-item" href="{{ route ('admin.Scouts.index') }}">স্কাউটস</a>
                      <a class="dropdown-item" href="{{ route ('admin.Crescent.index') }}">রেড ক্রিসেন্ট</a>
                      <a class="dropdown-item" href="{{ route ('admin.Studytour.index') }}">শিক্ষা সফর</a>
                      <a class="dropdown-item" href="{{ route ('admin.Cabinet.index') }}">স্টুডেন্ট ক্যাবিনেট</a>
                      <a class="dropdown-item" href="{{ route ('admin.Debate.index') }}">ডিবেটিং ক্লাব</a>
                      <a class="dropdown-item" href="{{ route ('admin.Sciencefair.index') }}">বিজ্ঞান মেলা</a>
                      <a class="dropdown-item" href="{{ route ('admin.Languageclub.index') }}">ল্যাঙ্গুয়েজ ক্লাব</a>
                    </div>
                </div>
              </div>


            <!-- Admission -->
            <div class="col-6">
                <div class="card catagory-card">
                  <div class="card-body px-2" id="memberMenuButton" data-toggle="dropdown" aria-expanded="false"><img src="{{ asset('assets/img/dashboard/circle.png') }}" alt=""><span class="d-flex justify-content-center">ভর্তি সংক্রান্ত তথ্য</span></div>
                    <div class="dropdown-menu" aria-labelledby="memberMenuButton">
                      <a class="dropdown-item" href="{{ route ('admin.Prospects.index') }}">প্রসপেক্টাস</a>
                      <a class="dropdown-item" href="{{ route ('admin.Admrules.index') }}">ভর্তির নিয়মাবলী</a>
                      <a class="dropdown-item" href="{{ route ('admin.Admsyllabus.index') }}">ভর্তি পরীক্ষার সিলেবাস</a>
                      <a class="dropdown-item" href="{{ route ('admin.Admresult.index') }}">ভর্তির ফলাফল</a>
                    </div>
                </div>
              </div>


            <!-- Exam -->
            <div class="col-6">
                <div class="card catagory-card">
                  <div class="card-body px-2" id="memberMenuButton" data-toggle="dropdown" aria-expanded="false"><img src="{{ asset('assets/img/dashboard/circle.png') }}" alt=""><span class="d-flex justify-content-center">পরীক্ষা সংক্রান্ত তথ্য</span></div>
                    <div class="dropdown-menu" aria-labelledby="memberMenuButton">
                      <a class="dropdown-item" href="{{ route ('admin.Examrules.index') }}">পরীক্ষার নিয়মাবলী</a>
                      <a class="dropdown-item" href="{{ route ('admin.Examroutine.index') }}">পরীক্ষা ও ফলাফলের সময়সূচী</a>
                      <a class="dropdown-item" href="{{ route ('admin.Suggestion.index') }}">সাজেশন্স</a>
                    </div>
                </div>
              </div>

            <!-- Results -->
            <div class="col-6">
                <div class="card catagory-card">
                  <div class="card-body px-2" id="memberMenuButton" data-toggle="dropdown" aria-expanded="false"><img src="{{ asset('assets/img/dashboard/circle.png') }}" alt=""><span class="d-flex justify-content-center">ফলাফল</span></div>
                    <div class="dropdown-menu" aria-labelledby="memberMenuButton">
                      <a class="dropdown-item" href="{{ route ('admin.Classresult.index') }}">অভ্যন্তরীণ ফলাফল</a>
                    </div>
                </div>
              </div>

            <!-- Gallary -->
            <div class="col-6">
                <div class="card catagory-card">
                  <div class="card-body px-2" id="memberMenuButton" data-toggle="dropdown" aria-expanded="false"><img src="{{ asset('assets/img/dashboard/circle.png') }}" alt=""><span class="d-flex justify-content-center">গ্যালারী</span></div>
                    <div class="dropdown-menu" aria-labelledby="memberMenuButton">
                      <a class="dropdown-item" href="{{ route ('admin.Photogal.index') }}">ফটো গ্যালারী</a>
                    </div>
                </div>
              </div>


            </div>
          </div>
        </div>
      </div>


@endsection
