@extends('layouts.master')

@section('link')    
    <!-- Bootstrap Core CSS -->
    {!! HTML::style('/asset/css/bootstrap.min.css') !!}
    
    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.caom/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
  
    {!! HTML::style('/asset/font-awesome/css/font-awesome.min.css') !!}
    
    <!-- Custom CSS -->
    {!! HTML::style('/asset/css/creative.css') !!}
    
@endsection

@section('header')
    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1>Where personal touch to our Seafarers is a Standard.</h1>
                <hr>
                <!--  <p>A Manning Agency  with SEC Registration No. 183060 filed on  October 25, 1990 and affixed on October 29, 1990.
                     A Manning Agency who are licensed to process applicants to work abroad.</p> -->
                <a href="#about" class="btn btn-primary btn-xl page-scroll">Find Out More</a>
            </div>
        </div>
    </header>
@endsection

@section('navigation')
    @include('layouts.partials._navigation')
@endsection

@section('content')
    @include('layouts.partials._content')
@endsection