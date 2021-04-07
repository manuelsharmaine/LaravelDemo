@extends('layouts.app')

@section('content')

<form method="POST" action="/posts">
    @csrf
    <input type="text" name="title">
    <textarea name="description"></textarea>


    <input type="submit" value="Submit">

</form>    
@endsection