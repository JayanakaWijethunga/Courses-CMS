@extends('layouts.app')

@section('content')

<div class="container">

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
        <h1 class="display-4">{{$series->title}}</h1>
        <p class="lead">Episode {{$episode_id}}</p>
        </div>
      </div>

      <video width="1000" height="400" controls>
        <source src="{{asset('example.mp4')}}" type="video/mp4">
      Your browser does not support the video tag.
      </video>

      <div class="jumbotron jumbotron-fluid">
        <div class="container">
        
        <p class="lead">Episode {{$series->description}}</p>
        </div>
      </div>

      <vid :videos="{{$cos->videos}}"></vid>

</div>
    
@endsection