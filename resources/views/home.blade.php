@extends('layouts.main')

@section('container')
        <div id="about">
            @include('section.about')
        </div>
        <div id="rooms">
            @include('section.rooms')
        </div>
        @include('section.paralax')
        @include('section.testimonial')
        <div id="contact">
            @include('section.contact')
        </div>
 @endsection
