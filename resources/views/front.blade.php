@extends('layouts.app')

@section('content')

    
<div class="container">
    <div class="jumbotron">
        <h1 class="display-4">Hello, world!</h1>
        <p class="lead">
            This is a simple hero unit, a simple jumbotron-style component
            for calling extra attention to featured content or information.
        </p>
        <hr class="my-4" />
        <p>
            It uses utility classes for typography and spacing to space
            content out within the larger container.
        </p>
    <a href="{{route('series.index')}}" class="btn btn-primary btn-lg"  role="button"
            >Browse</a
        >
    </div>
</div>

<div class="container">
    <div class="card-deck">
@foreach ($series as $s)
    

        <div class="card">
            <img
                src="https://images.unsplash.com/photo-1519682337058-a94d519337bc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80"
                class="card-img-top"
                alt="..."
            />
            <div class="card-body">
                <h5 class="card-title">{{$s->title}}</h5>
                <p class="card-text">
                   {{Str::words($s->description,200)}}
                </p>
                <p class="card-text">
                    <small class="text-muted"
                        >{{date("Y-M-d-D",strtotime($s->created_at))}}</small
                    >
                </p>
            </div>
        </div>
     @endforeach   
    </div>
</div>

<pricing></pricing>
    
    
@endsection