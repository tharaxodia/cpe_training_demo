@extends('base')

@section('title', 'Lesson List')

@section('content')
    <div class="panel panel-info">
        <div class="panel-heading">All Lessons</div>
        <div class="panel-body">
            <table class="table table-striped table-hover">
                <thead>
                <tr>
                    <th width="50" class="text-right">#</th>
                    <th>Title</th>
                    <th width="60">&nbsp;</th>
                    <th width="60">&nbsp;</th>
                    <th width="60">&nbsp;</th>
                </tr>
                </thead>
                <tbody>
                @forelse($list as $index => $lesson)
                    <tr>
                        <th scope="row" class="text-right">{{ $lesson->id }}</th>
                        <td>{{ $lesson->title }}</td>
                        <td class="text-center">
                            <a class="btn btn-block btn-default"
                               href="{{ route('lesson.show', ['lesson' => $lesson]) }}">View</a>
                        </td>
                        <td class="text-center">
                            <a class="btn btn-block btn-success"
                               href="{{ route('lesson.edit', ['lesson' => $lesson]) }}">Edit</a>
                        </td>
                        <td class="text-center">
                            <form class="form-horizontal" method="post"
                                  action="{{route('lesson.destroy', ['lesson' => $lesson])}}">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button class="btn btn-block btn-danger" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="10" class="text-center">
                            <p>No lesson found.</p>
                        </td>
                    </tr>
                @endforelse
                </tbody>
            </table>

            <div class="text-center">
                {{ $list->links() }}
            </div>
        </div>
        <div class="panel-footer">
            <a class="btn btn-primary pull-right" href="{{ route('lesson.create') }}">Create</a>
            <div class="clearfix"></div>
        </div>
    </div>
@endsection