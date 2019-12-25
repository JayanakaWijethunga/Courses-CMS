@extends('layouts.app')

@section('content')

<all-series test={{route('series.show',['id' => 1])}}></all-series>
    
@endsection