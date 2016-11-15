@extends('base')

@section('title', 'Lesson Create')

@section('content')
    <form class="form-horizontal" method="post" action="{{route('lesson.store')}}">
        {{ csrf_field() }}
        {{ method_field('POST') }}
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2 class="panel-title">Create New Lesson</h2>
            </div>
            <div class="panel-body">
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="form-group">
                    <label for="inputTitle" class="col-sm-2 control-label">Title</label>
                    <div class="col-sm-10">
                        <input type="text" name="title" class="form-control" id="inputTitle"
                               placeholder="Please enter title" value="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputContent" class="col-sm-2 control-label">Content</label>
                    <div class="col-sm-10">
                        <textarea name="content" class="form-control" id="inputContent" rows="10"
                                  placeholder="Please enter content ..."></textarea>
                    </div>
                </div>
            </div>
            <div class="panel-footer">
                <div class="row">
                    <div class="col-sm-6 text-left">
                        <a href="{{route('lesson.index')}}" class="btn btn-default">Cancel</a>
                    </div>
                    <div class="col-sm-6 text-right">
                        <button type="submit" class="btn btn-primary">Create</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection