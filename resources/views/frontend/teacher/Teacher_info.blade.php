@extends('frontend.layouts.layout')

@section('content')

<div class="col-sm-9 col-12">
    <div class="col-sm-12 col-12 p-0"  data-aos="fade-in" data-aos-duration="2000" >
       <ul class="list-group p-0">
        <li class="list-group-item font-weight-bold bg-success text-light" id="about">সভাপতি</li>
      </ul>
      <li class="list-group-item">
        <div style="font-size: 14px; line-height: 25px; text-align: justify;">
        @if ($Teachers && count($Teachers) > 0)
          <table class="table text-center">
            <thead>
                <tr>
                    <th>Photo</th>
                    <th>Name</th>
                    <th>Profession</th>
                    <th>Join Date</th>
                    <th>Mobile</th>
                    <th>E-Mail</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($Teachers as $item)
              <tr>
                <td><img src="{{ asset($item->image) }}" alt="{{ $item->name }}" width="100"></td>
                <td>{{ $item ->name}}</td>
                <td>{{ $item ->profession}}</td>
                <td>{{ $item ->joindate}}</td>
                <td>{{ $item ->mobile}}</td>
                <td>{{ $item ->email}}</td>
              </tr>
            @endforeach
            </tbody>
        </table>
        @else
        <p>No data available.</p>
        @endif
       </div>
     </li>
   </div>
</div>

 @endsection