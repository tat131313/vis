@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add new comment</div>

                @if(count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                <div class="card-body">
                    <form action="{{route('addNewComment')}}" method="POST">
                        {{ csrf_field() }}
                        <input type="text" class="form-control" placeholder="Name" id="name" value="{{ old('name') }}" name="name" maxlength="32">
                        <br>
                        <input type="email" class="form-control" placeholder="E-mail" id="email" value="{{ old('email') }}" name="email" maxlength="255">
                        <br>
                        <input type="text" class="form-control" placeholder="Comment" id="comment" value="{{ old('comment') }}" name="comment" maxlength="255">
                        <br>
                        <button type="submit" class="btn btn-outline-primary">Submit</button>
                    </form>
                </div>

                <div class="card-header">Reviews</div>
                <div class="card-body">
                    <div class="comment__content">
                        @foreach($comments as $comment)
                            <p><b>{{ $comment->name }}</b></p>
                            <p>{{ $comment->comment }}</p>
                            <hr>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
