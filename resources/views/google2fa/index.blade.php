@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center align-items-center " style="height: 70vh;S">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading font-weight-bold">Register</div>
                    <hr>
                    @if ($errors->any())
                        <b style="color: red">{{ $errors->first() }}</b>
                    @endif

                    <div class="panel-body d-flex justify-content-center align-items-center flex-column w-100">
                        <form class="form-horizontal" method="POST" action="{{ route('2fa') }}">
                            {{ csrf_field() }}

                            <div class="form-group d-flex justify-content-center align-items-center flex-column w-100">

                                <p class="text-center">
                                    Please enter the <strong>OTP</strong> generated on your Authenticator
                                    App. <br> Ensure you submit the current one because it refreshes every 30 seconds.
                                </p>
                                <label for="one_time_password" class="col-md-4 control-label">One Time Password</label>

                                <div class="col-md-12 mt-3 d-flex align-items-stretch justify-content-center">
                                    <input id="one_time_password" type="number" class="form-control w-100"
                                        name="one_time_password" required autofocus>
                                    <div class="form-group ms-2 h-100">
                                        <div class="col-md-6 col-md-offset-4">
                                            <button type="submit" class="btn btn-primary">
                                                Login
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
