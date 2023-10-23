@extends('frontend.layouts.layout')

@section('content')

<div class="col-sm-9 col-12">
    <div class="col-sm-12 col-12 p-0"  data-aos="fade-in" data-aos-duration="2000" >
       <ul class="list-group p-0">
        <li class="list-group-item font-weight-bold bg-success text-light" id="about">Calender</li>
      </ul>
      <li class="list-group-item">
        <div style="font-size: 14px; line-height: 25px; text-align: justify;">
            <table class="table text-center">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Date</th>
                        <th>Download</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($Calender as $item)
                  <tr>
                    <td>{{ $item -> title }}</td>
                    <td>{{ $item ->created_at}}</td>
                    <td><a href="{{ asset($item->npdf) }}" download="{{ $item->npdf }}"><i class="fas fa-file-pdf"></i></a></td>
                  </tr>
                  @endforeach
                </tbody>
            </table>
       </div>
     </li>
   </div>
 </div>

 @endsection
