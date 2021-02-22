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

    <!-- ======= Facts Section ======= -->
    @include('Front::front.partials.fact')
    <!-- End Facts Section -->


    <!-- ======= Skills Section ======= -->
    @include('Front::front.partials.skills')
    <!-- End Skills Section -->

    <!-- ======= Resume Section ======= -->
    @include('Front::front.partials.resume')
    <!-- End Resume Section -->

    <!-- ======= Portfolio Section ======= -->
    @include('Front::front.partials.portflio')
    <!-- End Portfolio Section -->


    <!-- ======= Services Section ======= -->
    @include('Front::front.partials.services')
    <!-- End Services Section -->

    <!-- ======= Testimonials Section ======= -->
    @include('Front::front.partials.testimonial')
    <!-- End Testimonials Section -->

    <!-- ======= Contact Section ======= -->
    @include('Front::front.partials.contact')
    <!-- End Contact Section -->

    <!-- ======= Footer ======= -->
    @include('Front::front.partials.footer')
    <!-- End  Footer -->
@endsection
