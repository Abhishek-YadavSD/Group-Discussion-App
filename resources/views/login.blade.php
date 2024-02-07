@extends('layout.main')
@section('tittle')
    login
@endsection
@section('cssstyle')
    <link rel="stylesheet" href="{{ asset('cssfiles/login.css') }}">
@endsection

@section('mainbody')
    <div class="background laptop-view">
        <div class=" laptopview h-100">
            <div class="w-50  ms-auto me-auto modalbgid " id="lgin">
                <div class=" modalbg border rounded  ">
                    <div class="mt-4">
                        <h1 class=" fs-5 text-center weltestclr" id="exampleModalLabel">Welcome back!</h1>
                    </div>
                    <div class="">
                        <p class="text-center textclr">We're so excited to see you again!</p>
                    </div>
                    <div class="px-4">
                        <form class="form" autocomplete="off">
                            <div class="mb-3">
                                <label for="" class="form-label emailpassclr">EMAIL OR PHONE
                                    NUMBER</label>
                                <input type="email" class="w-100 emailpassinput" id="exampleInputEmail1">
                                <div class="form-text textclr">We'll never share your email with anyone
                                    else.
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label emailpassclr">Password</label>
                                <input type="password" class="w-100 emailpassinput">
                                <a href="" class=" forgotpass">Forgot your password?</a>
                            </div>
                            <div class="d-grid gap-2 col-12 mx-auto mb-4 ">
                                <button class="btn btn-primary rounded-0 " type="button">Log In</button>
                                <div class="d-flex ">
                                    <span class="textclr">Need an account?</span><span>
                                        <a href="#" onclick="register()" class=" forgotpass ms-1">Register</a></span>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="w-50  ms-auto me-auto reg-view d-none" id="register1">
                <div class=" modalbg border rounded  " id="">
                    <div class="mt-4">
                        <h1 class=" fs-5 text-center weltestclr" id="exampleModalLabel">Create an account</h1>
                    </div>
                    <div class="px-4">
                        <form class="form" autocomplete="off">
                            <div class="mb-3">
                                <label for="" class="form-label emailpassclr">EMAIL</label>
                                <input type="email" class="w-100 emailpassinput" id="exampleInputEmail1">
                                <div class="form-text textclr">We'll never share your email with anyone
                                    else.
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label emailpassclr">DISPLAY NAME</label>
                                <input type="text" class="w-100 emailpassinput" id="exampleInputEmail1">
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label emailpassclr">USERNAME</label>
                                <input type="text" class="w-100 emailpassinput" id="exampleInputEmail1">

                            </div>

                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label emailpassclr">Password</label>
                                <input type="password" class="w-100 emailpassinput">
                                <a href="" class=" forgotpass">Forgot your password?</a>
                            </div>

                            <div class="d-grid gap-2 col-12 mx-auto mb-4 ">
                                <button class="btn btn-primary rounded-0 " type="button">Continue</button>
                                <div class="d-flex ">
                                    <a href="" class=" forgotpass ms-1">Already have an
                                        account</a></span>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="phone-view-bg mobile-form " id="phoneView">
        <div class=" container  pt-3 ">
            <div class="d-flex justify-content-center">
                <h3 class="">Sign in to Site</h3>
            </div>
            <form>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail2" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                    <a href="" class=" forgotpass">Forgot password?</a>
                </div>
                <div class="d-grid gap-2 col-12 mx-auto mb-4 ">
                    <button class="btn btn-primary rounded-0 " type="button">Log In</button>
                    <div class="d-flex ">
                        <span class="textclr">Emailed us for support</span><span><a href=""
                                class=" forgotpass ms-1">Get
                                a password</a></span>
                    </div>
                    <div class="d-flex ">
                        <span class="textclr">New to site?</span><span><a href="" class=" forgotpass ms-1">Sign
                                up</a></span>
                    </div>
                </div>
            </form>
        </div>
    </div>



@section('contentOfScript')
    <script>
        function register() {
                $(".modalbgid").addClass("d-none")
                $(".reg-view").removeClass("d-none")
            }
    </script>
@endsection
@endsection
