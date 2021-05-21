@extends('layouts.main-layout')

@section('principal')

<div class="container">
    [{{$ospite -> id}}]
    {{ $ospite -> name }}
    {{ $ospite -> name }}
</div>
    
@endsection