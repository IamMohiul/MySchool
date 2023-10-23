@extends('frontend.layouts.layout')

@section('content')

<div class="col-sm-9 col-12">
    <div class="col-sm-12 col-12 p-0"  data-aos="fade-in" data-aos-duration="2000" >
       <ul class="list-group p-0">
        <li class="list-group-item font-weight-bold bg-success text-light" id="about">প্রধান শিক্ষক পরিচিতি</li>
      </ul>
      <li class="list-group-item">
        <div style="font-size: 14px; line-height: 25px; text-align: justify;">
          <table class="table table-bordered "id="studenttable">
            <tr>
              <td colspan="2">
                <center><img src="{{ asset($Headintro->image) }}" class="img-fluid rounded" id="" style="max-height: 100px"><br></center>
              </td>
            </tr>
            <tr>
              <th>Name</th>
              <td>{{ $Headintro->name }}</td>
            </tr>
            <tr>
              <th>Designation</th>
              <td>{{ $Headintro->title }}</td>
            </tr>
            {{-- <tr>
              <th>Mobile</th>
              <td>01728563480</td>
            </tr>
            <tr>
              <th>Email</th>
              <td>faruk.chhagalnaiya@gmail.com</td>
            </tr>               --}}
        </table>
       </div>
     </li>
   </div>
 </div>

 @endsection