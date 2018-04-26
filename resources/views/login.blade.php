@extends('template')

@section('main')
<div class="form-handler">
    <div class="text-center">
        <ul class="nav nav-tabs mb-2">
            <li class="col-md-6 nav-item">
                <a href="#" class="nav-link active" id="login-form-link">Login</a>
            </li>
            <li class="col-md-6 nav-item">
                <a href="#" class="nav-link" id="register-form-link">Register</a>
            </li>
        </ul>

        <form id="login-form" action="" method="post" style="display: block">
            <div class="form-group">
                <input type="email" class="form-control" name="email" id="inputEmail" placeholder="Email">
            </div>
            
            <div class="form-group">
                <input type="password" class="form-control" name="password" id="inputPassword" placeholder="Password">
            </div>
            <div>
                <hr>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-outline-primary" value="Sign In">
            </div>
        </form>

        <form id="register-form" action="" method="post" style="display: none">
            <div class="form-group">
                <input type="text" class="form-control" name="nama" id="inputEmail" placeholder="Nama Lengkap">
            </div>
            <div class="form-group">
                <input type="email" class="form-control" name="email" id="inputEmail" placeholder="Email">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="" id="inputPassword" placeholder="Password">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password" id="inputPassword" placeholder="Retype Password">
            </div>
            <div>
                <hr>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-outline-primary" value="Sign Up">
            </div>
        </form>
        
    </div>
</div>
<script>
$(function() {

    $('#login-form-link').click(function(e) {
        $("#login-form").delay(100).fadeIn(100);
        $("#register-form").fadeOut(100);
        $('#register-form-link').removeClass('active');
        $(this).addClass('active');
        e.preventDefault();
    });
    $('#register-form-link').click(function(e) {
        $("#register-form").delay(100).fadeIn(100);
        $("#login-form").fadeOut(100);
        $('#login-form-link').removeClass('active');
        $(this).addClass('active');
        e.preventDefault();
    });

});
</script>
@stop