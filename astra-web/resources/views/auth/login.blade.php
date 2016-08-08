@extends('layouts.master')

@section('link')

@section('link')

    <!-- Google Font -->
    <link href="http://fonts.googleapis.com/css?family=Lato:100italic,100,300italic,300,400italic,400,700italic,700,900italic,900" rel="stylesheet" type="text/css">
    <!-- Bootstrap Core CSS -->
    {!! HTML::style('/asset/css/bootstrap.min.css') !!}

    <!-- Font Awesome CSS -->
    {!! HTML::style('/asset/font-awesome/css/font-awesome.min.css') !!}

    <!-- Custom CSS -->
    {!! HTML::style('/asset/css/creative.css') !!}

    <!-- Login From CSS -->
    {!! HTML::style('/asset/css/login-style.css') !!}


    <!-- Jquery Core JS -->
    {!! HTML::script('/asset/js/jquery.min.js') !!}

    <!-- Bootstrap Core JS -->
    {!! HTML::script('/asset/js/bootstrap.min.js') !!}
@endsection
@endsection

@section('navigation')
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top ">
        <div class="container-fluid" >
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a class="navbar-brand page-scroll" href="/" ><span class="fa fa-ship" aria-hidden="true"  ></span>  Astra Marine International Inc.</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
@endsection

@section('content')
    <header>
        <div class="header-content">
            <section class="container">
                <section class="login-form">
                    <h4>Sign in with your Astra Account</h4>
                    <form method="post" action="/auth/login" role="login">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <img src="{{ asset('/asset/img/user.png') }}" alt="" />
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <input type="text" name="username" required placeholder="User Name" 
                               class="form-control input-lg" value="{{ old('email') }}" />
                        <input type="password" name="password" required placeholder="Password"
                               class="form-control input-lg" />
                        <button type="submit" name="go" class="btn btn-block btn-info">Sign in</button>
                    </form>
                </section>
            </section>
        </div>
    </header>
@endsection