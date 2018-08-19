@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Reviews</div>
                    <div class="card-body">
                        <div class="comment__content">
                            <form action="{{route('deleteComment')}}" method="POST">
                            {{ csrf_field() }}
                                @foreach($comments as $comment)
                                    <p><b>{{ $comment->name }}</b>
                                    <button type="submit" value="{{$comment->id}}" name="delete" class="btn btn-outline-danger btn-sm">x</button></p>
                                    <p><em>{{ $comment->email }}</em></p>
                                    <p>{{ $comment->comment }}</p>
                                    <hr>
                                @endforeach
                            </form>                              
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>

@endsection