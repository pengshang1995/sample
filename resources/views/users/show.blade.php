@extends('layouts.default')
@section('title','展示用户')
@section('content')
    @include('shared._messages')
    <div class="row">
        <div class="col-md-offset-2 col-md-8">
            <div class="col-md-12">
                <div class="col-md-offset-2 col-md-8">
                    <section class="user_info">
                        @include('shared._user_info',['user'=>$user])
                    </section>
                </div>
            </div>
        </div>
    </div>
@stop