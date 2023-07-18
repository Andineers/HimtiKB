@extends('kerangka.auth-main')

@section('content')
    <div class="container">
        <div class="row" style="margin-top: 300px;">
            <div class="col-md-8"></div>
            <div class="col-md-4">
                <form class="needs-validation" novalidate>
                    <div class="form-row">
                        <div class="col-md-4">Email</div>
                        <div class="col-md-8 mb-3">
                            <input type="email" class="form-control" placeholder="Email" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-4">Password</div>
                        <div class="col-md-8 mb-3">
                            <input type="password" class="form-control" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-4"></div>
                        <div class="col-md-8 mb-3">
                            <p class="pt12">
                                <input type="checkbox"> Remember Me
                            </p>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-4"></div>
                        <div class="col-md-8 mb-3">
                            <a href="{{ route('home.home') }}"><button class="btn btn-info" type="button">Log
                                    In</button></a>
                            <a href="{{ route('auth.register') }}"><button class="btn btn-info"
                                    type="button">Register</button></a>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
