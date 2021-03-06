@extends('layouts.app')
@section('content')
    <!-- CSS -->
    <link rel="stylesheet" href="{{URL::asset('/')}}assets/css/reset.css">
    <link rel="stylesheet" href="{{URL::asset('/')}}assets/css/supersized.css">
    <link rel="stylesheet" href="{{URL::asset('/')}}assets/css/style.css">

<div class="page-container">
    <h1>登录</h1>
    <form action="" method="post">
        <input type="text" name="username" class="username" placeholder="用户名">
        <input type="password" name="password" class="password" placeholder="密码">
        <button type="submit">提交</button>
        <div class="error"><span>+</span></div>
    </form>
    <div class="connect">
        <p>Or connect with:</p>
        <p>
            <a class="facebook" href=""></a>
            <a class="twitter" href=""></a>
        </p>
    </div>
</div>

<!-- Javascript -->
<script src="{{URL::asset('/')}}assets/js/jquery-1.8.2.min.js"></script>
<script src="{{URL::asset('/')}}assets/js/supersized.3.2.7.min.js"></script>
<script src="{{URL::asset('/')}}assets/js/supersized-init.js"></script>
<script src="{{URL::asset('/')}}assets/js/scripts.js"></script>
@endsection