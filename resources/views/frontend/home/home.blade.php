@extends('frontend.layouts.master')

@section('content')
    <!--==========================
        PRODUCT MODAL VIEW START
    ===========================-->
    @include('frontend.sections.home')
    <!--==========================
        PRODUCT MODAL VIEW END
    ===========================-->


    <!--============================
                BANNER PART 2 START
    ==============================-->
    @include('frontend.sections.banner-slider')
    <!--============================
        BANNER PART 2 END
    ==============================-->


    <!--============================
        FLASH SELL START
    ==============================-->
    @include('frontend.sections.flash-sale')
    <!--============================
        FLASH SELL END
    ==============================-->


    <!--============================
        MONTHLY TOP PRODUCT START
    ==============================-->
    @include('frontend.sections.top-category-product')
    <!--============================
        MONTHLY TOP PRODUCT END
    ==============================-->


    <!--============================
        BRAND SLIDER START
    ==============================-->
    @include('frontend.sections.brand-slider')
    <!--============================
        BRAND SLIDER END
    ==============================-->


    <!--============================
        SINGLE BANNER START
    ==============================-->
    @include('frontend.sections.single-banner')
    <!--============================
        SINGLE BANNER END
    ==============================-->


    <!--============================
        HOT DEALS START
    ==============================-->
    @include('frontend.sections.hot-deals')
    <!--============================
        HOT DEALS END
    ==============================-->


    <!--============================
        ELECTRONIC PART START
    ==============================-->
    @include('frontend.sections.category-product-slider-one')
    <!--============================
        ELECTRONIC PART END
    ==============================-->


    <!--============================
        ELECTRONIC PART START
    ==============================-->
    @include('frontend.sections.category-product-slider-two')
    <!--============================
        ELECTRONIC PART END
    ==============================-->


    <!--============================
        LARGE BANNER  START
    ==============================-->
    @include('frontend.sections.large_banner')
    <!--============================
        LARGE BANNER  END
    ==============================-->


    <!--============================
        WEEKLY BEST ITEM START
    ==============================-->
    @include('frontend.sections.weekly_best-item')
    <!--============================
        WEEKLY BEST ITEM END
    ==============================-->


    <!--============================
        HOME SERVICES START
    ==============================-->
    @include('frontend.sections.services')
    <!--============================
        HOME SERVICES END
    ==============================-->

    <!--============================
        HOME BLOGS START
    ==============================-->
    @include('frontend.sections.blogs')

    <!--============================
        HOME BLOGS END
    ==============================-->
@endsection
