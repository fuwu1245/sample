@extends('layout.default')
@section('title', '主页')
@section('content')
  <div class="jumbotron">
    <h1>Hello Laravel</h1>
    <p class="lead">
      你现在看到的是 <a href="http://github.com/fuwu1245" target="_blank">fuwu1245</a>编写的Laravel示例项目
    </p>
    <p>
      一切，将从这里开始
    </p>
    <p>
      <a href="{{ route('signup') }}" class="btn btn-lg btn-success" role="button">现在注册</a>
    </p>
  </div>
@stop
