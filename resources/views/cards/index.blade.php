@extends('pages.layout')

@section('title')
All Cards
@stop
@section('body')


<h1>All Cards</h1>

@foreach ($cards as  $card)
<h3>{{$card->title}}</h3>
@endforeach
@stop
