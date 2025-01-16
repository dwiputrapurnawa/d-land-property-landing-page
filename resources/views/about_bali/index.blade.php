@extends('layouts.main')

@section('meta-description')
<meta name="description" content="Explore Bali’s premier property market with D'Land Properties. Learn about the best land and real estate opportunities, and contact us via WhatsApp or by number for more information.">
@endsection

@section('title')
    D'Land Property - {{ __('landing.navbar_about_bali') }}
@endsection

@section('content')

    <input type="hidden" name="company_number" value="{{ str_replace([' ', '-'], '', $company->phone) }}">

    @include('partials.navbar_black')

    @include('sections.about_bali_headline')
      
    @include('sections.awards')

    @include('sections.benefits')

    @include('sections.bali_tourism')

    @include('sections.bali_tourism_places')
 
    @include('sections.contact_us')

    @include('sections.footer')

    @include('modal.whatsapp_overlay')

    @include('modal.request_call_overlay')

@endsection