@extends('layouts.master')

@section('content')
    <h1>dice roll was: {{{$num}}}</h1>
	<h1>your guess was: {{{$guess}}}</h1>
	<h2>you <?= ($guess == $num) ? 'win' : 'lose'; ?>!</h2>
@stop