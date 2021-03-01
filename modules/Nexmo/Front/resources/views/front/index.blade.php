@extends('Front::front.layout.master')

@section('content')

    <!-- ======= Header ======= -->
    @include('Front::front.partials.header')
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    @include('Front::front.partials.hero')
    <!-- End Hero -->

    <!-- ======= About Section ======= -->
    @include('Front::front.partials.about')
    <!-- =======end  About Section ======= -->

    <!-- ======= Skills Section ======= -->
    @include('Front::front.partials.skills')
    <!-- End Skills Section -->

    <!-- ======= Portfolio Section ======= -->
    @include('Front::front.partials.portflio')
    <!-- End Portfolio Section -->

    <!-- ======= Contact Section ======= -->
    @include('Front::front.partials.contact')
    <!-- End Contact Section -->

    <!-- ======= Footer ======= -->
    @include('Front::front.partials.footer')
    <!-- End  Footer -->
@endsection
