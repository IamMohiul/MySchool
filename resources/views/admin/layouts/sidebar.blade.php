<div class="navbar-bg">
    <div class="col-lg-6 col-4 clearfix rtl-2">
        <div class="nav-btn float-left">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <div class="form-inline mr-auto"></div>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="../assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
            <div class="d-sm-none d-lg-inline-block">Hi, Ujang Maman</div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <div class="dropdown-title">Active Now</div>
              <a href="/profile" class="dropdown-item has-icon">
                <i class="far fa-user"></i> Profile
              </a>
              <a href="/profile" class="dropdown-item has-icon">
                <i class="fas fa-cog"></i> Settings
              </a>
              <div class="dropdown-divider"></div>

              <form method="POST" action="{{ route('logout') }}">
                @csrf
                <a href="#" onclick="event.preventDefault();
                this.closest('form').submit();" class="dropdown-item has-icon text-danger">
                  <i class="fas fa-sign-out-alt"></i> Logout
                </a>
            </form>


            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="/dashboard">Admin</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="/dashboard">BB</a>
          </div>
          <ul class="sidebar-menu">
              <li class="menu-header">Dashboard</li>
              <li class="nav-item active">
                <a href="/dashboard" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
              </li>

              {{-- Notice Section  --}}

              <li class="menu-header">নোটিশ সেকশন</li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Notice</span></a>
                <ul class="dropdown-menu" style="display: none;">
                  <li><a class="nav-link" href="{{ route('admin.Ncatagory.index') }}">নোটিশ ক্যাটাগরি</a></li>
                  <li><a class="nav-link" href="{{ route('admin.Notice.index') }}">নোটিশ</a></li>
                </ul>
              </li>

              {{-- Site Info Section --}}

              <li class="menu-header">ওয়েবসাইট এর তথ্য সমূহ</li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Header</span></a>
                <ul class="dropdown-menu" style="display: none;">
                  <li><a class="nav-link" href="{{ route ('admin.slider.index') }}">Slider Image</a></li>
                  {{-- <li><a class="nav-link" href="{{ route ('admin.Description.index') }}">Site Description</a></li>                 --}}
                </ul>
              </li>

              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>আমাদের সম্পর্কে</span></a>
                <ul class="dropdown-menu" style="display: none;">
                  <li><a class="nav-link" href="{{ route ('admin.About_school.index') }}">প্রতিষ্ঠান সম্পর্কে</a></li>
                  {{-- <li><a class="nav-link" href="{{ route ('admin.Mission_vission.index') }}">লক্ষ্য এবং উদ্দেশ্য</a></li> --}}
                  {{-- <li><a class="nav-link" href="{{ route ('admin.History.index') }}">ইতিহাস</a></li> --}}
                  {{-- <li><a class="nav-link" href="{{ route ('admin.Citizencharter.index') }}">সিটিজেন চার্টার</a></li> --}}
                  <li><a class="nav-link" href="{{ route ('admin.Teaching.index') }}">পাঠদানের অনুমতি ও স্বীকৃতি</a></li>
                  <li><a class="nav-link" href="{{ route ('admin.Mpo.index') }}">জাতীয়করণ তথ্য</a></li>
                  <li><a class="nav-link" href="{{ route ('admin.Infrastructure.index') }}">ভৌত অবকাঠামো</a></li>
                  <li><a class="nav-link" href="{{ route ('admin.Yearlywork.index') }}">বার্ষিক কর্ম পরিকল্পনা</a></li>
                  <li><a class="nav-link" href="{{ route ('admin.Contact.index') }}">যোগাযোগের ঠিকানা</a></li>
                </ul>
              </li>

              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>প্রশাসনিক তথ্য</span></a>
                <ul class="dropdown-menu" style="display: none;">
                  <li><a class="nav-link" href="{{ route ('admin.Headintro.index') }}">অধ্যক্ষ পরিচিতি</a></li>
                  <li><a class="nav-link" href="{{ route ('admin.Assheadintro.index') }}">উপাধ্যক্ষ পরিচিতি</a></li>
                  {{-- <li><a class="nav-link" href="{{ route ('admin.Presidentmsg.index') }}">সভাপতির বাণী</a></li> --}}
                  <li><a class="nav-link" href="{{ route ('admin.Messagehead.index') }}">প্রধান শিক্ষকের বাণী</a></li>
                  <li><a class="nav-link" href="{{ route ('admin.Principlelist.index') }}">প্রধান শিক্ষকদের তালিকা</a></li>
                  {{-- <li><a class="nav-link" href="{{ route ('admin.Managingcom.index') }}">পরিচালনা পর্ষদ তথ্য</a></li> --}}
                  {{-- <li><a class="nav-link" href="{{ route ('admin.Chairmanlist.index') }}">সভাপতির তালিকা</a></li> --}}
                  {{-- <li><a class="nav-link" href="{{ route ('admin.Donarslist.index') }}">দাতা সদস্যদের তালিকা</a></li> --}}
                  {{-- <li><a class="nav-link" href="{{ route ('admin.Exlist.index') }}">প্রাক্তন সদস্যদের তালিকা</a></li> --}}
                </ul>
              </li>

              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>শিক্ষক এবং কর্মচারী</span></a>
                <ul class="dropdown-menu" style="display: none;">
                  <li><a class="nav-link" href="{{ route ('admin.Teacher.index') }}">শিক্ষকবৃন্দের তথ্য</a></li>
                  <li><a class="nav-link" href="{{ route ('admin.Staff.index') }}">কর্মচারীদের তথ্য</a></li>
                </ul>
              </li>

              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>শিক্ষার্থী তথ্য</span></a>
                <ul class="dropdown-menu" style="display: none;">
                  <li><a class="nav-link" href="{{ route ('admin.Classmake.index') }}">শ্রেণী তৈরী করুন</a></li>
                  {{-- <li><a class="nav-link" href="{{ route ('admin.Sectionmake.index') }}">শাখা তৈরী করুন</a></li> --}}
                  <li><a class="nav-link" href="{{ route ('admin.Students.index') }}">শিক্ষার্থীর তথ্য যোগ করুন</a></li>
                </ul>
              </li>

              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>একাডেমিক তথ্য</span></a>
                <ul class="dropdown-menu" style="display: none;">
                  <li><a class="nav-link" href="{{ route ('admin.Holiday.index') }}">ছুটির তালিকা</a></li>
                  <li><a class="nav-link" href="{{ route ('admin.Calender.index') }}">একাডেমিক ক্যালেন্ডার</a></li>
                  <li><a class="nav-link" href="{{ route ('admin.Clsroutine.index') }}">ক্লাস রুটিন</a></li>
                  <li><a class="nav-link" href="{{ route ('admin.Syllabas.index') }}">পাঠ্যসূচী</a></li>
                  <li><a class="nav-link" href="{{ route ('admin.Rulesreg.index') }}">আচরণ বিধি</a></li>
                  <li><a class="nav-link" href="{{ route ('admin.Uniform.index') }}">ইউনিফর্ম</a></li>
                  <li><a class="nav-link" href="{{ route ('admin.Fees.index') }}">ফি সমূহ</a></li>
                </ul>
              </li>

              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>সহপাঠ্যক্রম</span></a>
                <ul class="dropdown-menu" style="display: none;">
                  <li><a class="nav-link" href="{{ route ('admin.Sports.index') }}">ক্রীড়া কার্যক্রম</a></li>
                  <li><a class="nav-link" href="{{ route ('admin.Cultural.index') }}">সাংস্কৃতিক কার্যক্রম</a></li>
                  <li><a class="nav-link" href="{{ route ('admin.Scouts.index') }}">স্কাউটস</a></li>
                  <li><a class="nav-link" href="{{ route ('admin.Crescent.index') }}">রেড ক্রিসেন্ট</a></li>
                  <li><a class="nav-link" href="{{ route ('admin.Studytour.index') }}">শিক্ষা সফর</a></li>
                  <li><a class="nav-link" href="{{ route ('admin.Cabinet.index') }}">স্টুডেন্ট ক্যাবিনেট</a></li>
                  <li><a class="nav-link" href="{{ route ('admin.Debate.index') }}">ডিবেটিং ক্লাব</a></li>
                  <li><a class="nav-link" href="{{ route ('admin.Sciencefair.index') }}">বিজ্ঞান মেলা</a></li>
                  <li><a class="nav-link" href="{{ route ('admin.Languageclub.index') }}">ল্যাঙ্গুয়েজ ক্লাব</a></li>
                </ul>
              </li>

              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>ভর্তি সংক্রান্ত তথ্য</span></a>
                <ul class="dropdown-menu" style="display: none;">
                  <li><a class="nav-link" href="{{ route ('admin.Prospects.index') }}">প্রসপেক্টাস</a></li>
                  <li><a class="nav-link" href="{{ route ('admin.Admrules.index') }}">ভর্তির নিয়মাবলী</a></li>
                  <li><a class="nav-link" href="{{ route ('admin.Admsyllabus.index') }}">ভর্তি পরীক্ষার সিলেবাস</a></li>
                  <li><a class="nav-link" href="{{ route ('admin.Admresult.index') }}">ভর্তির ফলাফল</a></li>
                </ul>
              </li>

              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>পরীক্ষা সংক্রান্ত তথ্য</span></a>
                <ul class="dropdown-menu" style="display: none;">
                  <li><a class="nav-link" href="{{ route ('admin.Examrules.index') }}">পরীক্ষার নিয়মাবলী</a></li>
                  <li><a class="nav-link" href="{{ route ('admin.Examroutine.index') }}">পরীক্ষা ও ফলাফলের সময়সূচী</a></li>
                  <li><a class="nav-link" href="{{ route ('admin.Suggestion.index') }}">সাজেশন্স</a></li>
                </ul>
              </li>

              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>ফলাফল</span></a>
                <ul class="dropdown-menu" style="display: none;">
                  <li><a class="nav-link" href="{{ route ('admin.Classresult.index') }}">অভ্যন্তরীণ ফলাফল</a></li>
                </ul>
              </li>

              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>গ্যালারী</span></a>
                <ul class="dropdown-menu" style="display: none;">
                  <li><a class="nav-link" href="{{ route ('admin.Photogal.index') }}">ফটো গ্যালারী</a></li>
                  {{-- <li><a class="nav-link" href="{{ route ('admin.Videogal.index') }}">ভিডিও গ্যালারী</a></li> --}}
                  {{-- <li><a class="nav-link" href="{{ route ('admin.Magazine.index') }}">ম্যাগাজিন</a></li> --}}
                </ul>
              </li>

            </ul>
        </aside>
      </div>
