@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-header">Social Login</div>

                <div class="card-body">
                        <a href="#" class="btn btn-block btn-lg btn-social btn-facebook social-button">
                            <span class="fa fa-facebook"></span> login with Facebook
                        </a>
                        <a href="#" class="btn btn-block btn-lg btn-social btn-google social-button">
                            <span class="fa fa-google"></span> login with Google
                        </a>
                        <a href="#" class="btn btn-block btn-lg btn-social btn-twitter social-button">
                            <span class="fa fa-twitter"></span> login with Twitter
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
