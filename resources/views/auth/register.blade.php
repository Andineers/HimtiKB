@extends('kerangka.auth-main')

@section('content')
    <div class="container">
        <div class="row" style="margin-top: 300px;">
            <div class="col-md-8"></div>
            <div class="col-md-4">
                <form>
                    <div class="form-row">
                        <div class="col-md-4">Name</div>
                        <div class="col-md-8 mb-3">
                            <input type="text" class="form-control" placeholder="Name" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-4">Email</div>
                        <div class="col-md-8 mb-3">
                            <input type="email" class="form-control" placeholder="Email" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-4">Mobile</div>
                        <div class="col-md-8 mb-3">
                            <input type="text" class="form-control" placeholder="Mobile" required>
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
                            <a href="{{ route('auth.login') }}"><button class="btn btn-info"
                                    type="button">Submit</button></a>
                            <button class="btn btn-secondary" type="button">Reset</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
