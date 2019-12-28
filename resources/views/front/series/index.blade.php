@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row row-cols-1 row-cols-md-3">
        
        
        @foreach ($courses as $course)
           
        <div class="col mb-4">
            <div class="card">
            <img src="{{$course->image ? asset('storage/'.$course->image) : "https://mdbootstrap.com/wp-content/uploads/2018/10/vue.jpg"}}" class="card-img-top" alt="" />
              <div class="card-body">
                <h5 class="card-title">{{$course->title}}</h5>
                <p
                  class="card-text"
                >{{Str::words($course->description,200)}}</p>
              <a href="{{route('series.show',$course->id)}}" class="btn btn-success btn-md"  role="button"
                    >Play</a>
              </div>
             
            </div>
          </div>

        @endforeach
     
    </div>
  </div>
    
@endsection