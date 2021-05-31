@extends('master')

@section('content')

<div class="container custom-login">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <form action="register" method="POST">  
                @csrf
                <div class="form-group"> 
                    <label for="email">User Name</label> 
                    <input type="text" name="name" class="form-control" id="email" placeholder="Enter name"> 
                </div>
                <div class="form-group"> 
                    <label for="email">User Email</label> 
                    <input type="email" name="email" class="form-control" id="email" placeholder="Enter email"> 
                </div>  
                <div class="form-group"> 
                    <label for="pwd">Password</label> 
                    <input type="password" name="password" class="form-control" id="pwd" placeholder="Enter password"> 
                </div>  
                <button type="submit" class="btn btn-primary">Register</button> 
            </form> 
        </div>
    </div>
</div>

@endsection