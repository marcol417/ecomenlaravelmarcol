@extends('master')

@section('content')

<div class="container custom-login">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <form>  
                <div class="form-group"> 
                    <label for="email">User Name</label> 
                    <input type="email" class="form-control" id="email" placeholder="Enter email"> 
                </div>  
                <div class="form-group"> 
                    <label for="pwd">Password</label> 
                    <input type="password" class="form-control" id="pwd" placeholder="Enter password"> 
                </div>  
                <button type="submit" class="btn btn-primary">Submit</button> 
            </form> 
        </div>
    </div>
</div>

@endsection