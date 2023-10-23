@extends('frontend.layouts.layout')

@section('content')

<div class="col-sm-9 col-12">
    <div class="col-sm-12 col-12 p-0" data-aos="fade-in" data-aos-duration="2000">
        <ul class="list-group p-0">
            <li class="list-group-item font-weight-bold bg-success text-light" id="about">Notice</li>
        </ul>
        <li class="list-group-item">
            <div style="font-size: 14px; line-height: 25px; text-align: justify;">
                <h2>{{ $classmake->name }} Students</h2>
                <table class="table text-center">
                    <thead>
                        <tr>
                            <th>Section</th>
                            <th>Boy</th>
                            <th>Girl</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $item)
                            <tr>
                                <td>{{ $item->section }}</td>
                                <td>{{ $item->boy }}</td>
                                <td>{{ $item->girl }}</td>
                                <td>{{ $item->total }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </li>
    </div>
</div>

@endsection
