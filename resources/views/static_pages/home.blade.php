@extends('layouts.default')
@section('title','主页')
@section('content')
    <div class="jumbotron">
        <h1>hello Laravel</h1>
        <p class="lead">
            你现在看到得是 <a href="http://blog.psonlyweb.cn">彭尚的博客</a>
        </p>
        <p>一切从这里开始</p>
        <p>
            <a class="btn btn-lg btn-success" href="{{ route('signup') }}" role="button">现在注册</a>
        </p>
    </div>

@stop