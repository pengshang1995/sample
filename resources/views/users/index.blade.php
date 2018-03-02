@extends('layouts.default')
@section('title','用户列表')
@section('content')
    <div class="col-md-10 col-md-offset-1">
        <div class="row">
            @foreach($users as $user)
                <div class="col-xs-6 col-md-3">

                    <div class="user-header">

                        <ul>
                            <li class="user-title">操作</li>
                            @can('destroy',$user)
                            <li>
                                <form action="{{ route('users.destroy', $user->id) }}" method="post">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button type="submit" class="btn btn-sm btn-danger delete-btn"><i class="fa fa-trash-o fa-fw"></i></button>
                                </form>
                            </li>
                            @endcan
                        </ul>
                    </div>

                    <a href="{{ route('users.show',$user->id) }}" class="thumbnail">
                        <img src="{{ $user->gravatar('200') }}"  alt="{{ $user->name }}">
                    </a>
                    <div class="caption user-name">
                        <h3><a href="{{ route('users.show',$user->id) }}">{{ $user->name }}</a></h3>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row page-common">
            {!! $users->render() !!}
        </div>
    </div>
@stop