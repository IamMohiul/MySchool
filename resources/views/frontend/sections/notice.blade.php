<div class="col-sm-12 col-12 p-0 pb-2 cnotice">
    <div class="row">
      <div class="col-md-2 col-12 d-sm-block d-none">
        <img src="frontend/assets/img/notice.png" class="img-fluid">
      </div>
      <div class="col-md-10 col-11 pt-3 p-4">
        <strong class="text-success">নোটিশ বোর্ড</strong><br>
        <div class="mt-3">
          @foreach ($Notice as $Notice)
          <li><i class="fa fa-caret-right" aria-hidden="true"></i>&nbsp;&nbsp;<a href="/Notice" >{{ $Notice->title }}</a></li>   
          @endforeach
        </div>
        <div class="mt-4">
          <a href="/Notice" class="float-right all">সকল নোটিশ</a>
        </div>
      </div>
    </div>
  </div>