@extends('layout.app')

@section('title', 'Home - Furni')

@section('content')

	<!-- Start Hero Section -->
    @include('partials.hero')
    <!-- End Hero Section -->

    <!-- Start Product Section -->
    @include('partials.product')
    <!-- End Product Section -->

    <!-- Start Why Choose Us Section -->
    @include('partials.why-us')
    <!-- End Why Choose Us Section -->

    <!-- Start We Help Section -->
    @include('partials.help')
    <!-- End We Help Section -->

    <!-- Start Popular Product -->
    @include('partials.populerproduct')
    <!-- End Popular Product -->

    <!-- Start Testimonial Slider -->
    @include('partials.testimonial')
    <!-- End Testimonial Slider -->

    <!-- Start Blog Section -->
    @include('partials.blog')
    <!-- End Blog Section -->	

@endsection