@extends('pages.layout')

@section('title')
welcome
@stop
@section('body')

        @if(empty($people))
        Ngm aqui
        @else
        Tem gente aqui
        @endif


                @foreach ($people as $person)
                  <li>{{$person}}</li>
                @endforeach

@stop
