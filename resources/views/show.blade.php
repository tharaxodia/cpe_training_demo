@extends('base')

@section('title', 'Lesson Show')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <h2 class="panel-title visible-lg-inline-block">{{ $lesson->title }}</h2>
            <a class="btn btn-default pull-right" href="{{ route('lesson.edit', ['lesson' => $lesson]) }}">
                <i class="fa fa-pencil-square-o"></i>
            </a>
            <div class="clearfix"></div>
        </div>
        <div class="panel-body">
            <p>
                {!! $lesson->content !!}
            </p>
        </div>
    </div>
@endsection