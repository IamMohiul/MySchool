@extends('frontend.layouts.layout')

@section('content')

        <!-- Main Page Start-->
        <div class="col-sm-9 col-12">
          <!--Notice Board-->
          @include('frontend.sections.notice')
          <!-------------End Notice---------->
            <!--About Us -->
          @include('frontend.sections.about')
          <!--End of About Us-->
          <!--Card section-->
          @include('frontend.sections.card')
          <!-- End Card Section-->
          <!-- Featured Section -->
          @include('frontend.sections.featured')
          <!--End Featured Section-->
        </div>
        <!-------------End Mainpage----------->


@endsection