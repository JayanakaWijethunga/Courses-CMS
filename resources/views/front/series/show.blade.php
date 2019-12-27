@extends('layouts.app')

@section('content')

<div class="container">
    <div class="jumbotron">
    <h1 class="display-4">{{$cos->title}}</h1>
        <p class="lead">
            {{$cos->description}}
        </p>
        <hr class="my-4" />
        
        <a href="#" class="btn btn-primary btn-lg"  role="button"
            >Browse</a
        >
        <a href="#" class="btn btn-danger btn-lg"  role="button"
            >Subscribe</a
        >
    </div>
</div>
   
<vid :videos="{{$cos->videos}}"></vid>

@endsection