@extends('layouts.app')

@section('content')

<div class="container">
    <form class="form-signin" action="{{route('pswTrue')}}" method="POST">
        {{ csrf_field() }}
        <h1 class="h3 mb-3 font-weight-normal">Please enter password</h1>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Submit</button>
    </form>
</div>

@endsection