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
@section('content')
    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <section class="container">
                    <section class="login-form">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">Register</div>
                                        <div class="panel-body">

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

                                            <form class="form-horizontal" role="form" method="POST" action="/auth/register">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                                <div class="form-group">
                                                    <label class="col-md-4 control-label" style="color: black;">Name</label>
                                                    <div class="col-md-6">
                                                        <input type="text" class="form-control" name="username" value="{{ old('username') }}">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-md-4 control-label" style="color: black;">Access Type</label>
                                                    <div class="col-md-6">
                                                        <label class="checkbox-inline" style="color: black;"><input type="radio" name="access" value="1"/>Admin</label>
                                                        <label class="checkbox-inline" style="color: black;"><input type="radio" name="access" value="0" checked="checked"/>User</label>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-md-4 control-label" style="color: black;">Password</label>
                                                    <div class="col-md-6">
                                                        <input type="password" class="form-control" name="password">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-md-4 control-label" style="color: black;">Confirm Password</label>
                                                    <div class="col-md-6">
                                                        <input type="password" class="form-control" name="password_confirmation">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="col-md-6 col-md-offset-4">
                                                        <button type="submit" class="btn btn-primary">
                                                            Register
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </section>
            </div>
        </div>
    </header>
@endsection