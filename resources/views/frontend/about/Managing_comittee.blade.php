@extends('frontend.layouts.layout')

@section('content')

<div class="col-sm-9 col-12">
    <div class="col-sm-12 col-12 p-0"  data-aos="fade-in" data-aos-duration="2000" >
       <ul class="list-group p-0">
        <li class="list-group-item font-weight-bold bg-success text-light" id="about">ম্যানেজিং কমিটি</li>
      </ul>
      <li class="list-group-item">
        <div style="font-size: 14px; line-height: 25px; text-align: justify;">
        @if ($Managing && count($Managing) > 0)
          <table class="table text-center">
            <thead>
                <tr>
                    <th>Photo</th>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Mobile</th>
                    <th>E-Mail</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($Managing as $item)
              <tr>
                <td><img src="{{ asset($item->image) }}" alt="{{ $item->title }}" width="100"></td>
                <td>{{ $item ->title}}</td>
                <td>{{ $item ->position}}</td>
                <td>{{ $item ->mobile}}</td>
                <td>{{ $item ->email}}</td>
              </tr>
            @endforeach
            </tbody>
        </table>
        @else
        <p>No Yearly Work data available.</p>
        @endif
       </div>
     </li>
   </div>
</div>

 @endsection