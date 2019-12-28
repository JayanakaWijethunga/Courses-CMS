@extends('layouts.app')

@section('content')

  <series-component :series="{{$courses}}"></series-component>
    
@endsection