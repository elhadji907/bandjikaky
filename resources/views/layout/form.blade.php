@extends('layout.default')
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header card-header-primary">
                <h3 class="card-title">Enregistrement</h3>
                <p class="card-category">Handcrafted by our friend
                    <a target="_blank" href="#">Robert McIntosh</a>. Please checkout the
                    <a href="#" target="_blank">full documentation.</a>
                </p>
            </div>
            <div class="card-body">
                    <div class="row pt-5"></div>

                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">Well never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" value="">
                            Option one is this
                            <span class="form-check-sign">
                                <span class="check"></span>
                            </span>
                        </label>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                <div class="row">
                </div>
            </div>
        </div>
        
        
    </div>
</div>
@endsection