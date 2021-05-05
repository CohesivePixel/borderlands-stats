@extends('layouts.master')

@section('content')
    <div class="jumbotron">
        <h1 class="display-3">Yay!</h1>
        <p class="lead">o7 CMDR. You've succesfully added or edited {{ $entity_name }}</p>
        <hr class="my-4">
        <a href="/" class="btn btn-success" role="button">Return to editor</a>
    </div>
@endsection()