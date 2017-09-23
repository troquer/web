@extends('layouts.app')
<link href="{{ asset('css/home.css') }}" rel="stylesheet">
@section('content')

<div id="home-top">
  <div class="container" style="padding-top:20vh;">
    <div class="row">
      <div class="col-md-12" style="text-align:center;">
        <h1 style="color:white;">勉強仲間を見つけよう!</h1>
        <form class="" action="index.html" method="post">
          <select style="width:200px; font-size:30px; margin-bottom:15px;" class="" name="">
            <option value="">--------</option>
          </select>
          <input style="display:block; margin:0 auto; background-color:dd5866; color:white;" class="btn" type="button" name="" value="勉強仲間を探す">
        </form>
      </div>
    </div>
  </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
