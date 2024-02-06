<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        
     <link rel="stylesheet" href="{{asset('cssfiles/login.css')}}">
</head>

<body>

    <div class="laptop-view ">
        <div class="w-50 ms-auto me-auto ">
            <div class=" modalbg border rounded boxset ">
                <div class="mt-4">
                    <h1 class=" fs-5 text-center weltestclr" id="exampleModalLabel">Welcome back!</h1>
                </div>
                <div class="">
                    <p class="text-center textclr">We're so excited to see you again!</p>
                </div>
                <div class="px-4">
                    <form class="form">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label emailpassclr">EMAIL OR PHONE
                                NUMBER</label>
                            <input type="email" class="w-100 emailpassinput" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text textclr">We'll never share your email with anyone else.
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label emailpassclr">Password</label>
                            {{-- <input type="password" class="d-block w-100 emailpassinput rounded-0" id="exampleInputPassword1"> --}}
                            <input type="password" class="w-100 emailpassinput">
                            <a href="" class=" forgotpass">Forgot your password?</a>
                        </div>
                        <div class="d-grid gap-2 col-12 mx-auto mb-4 ">
                            <button class="btn btn-primary rounded-0 " type="button">Log In</button>
                            <div class="d-flex ">
                                <span class="textclr">Need an account?</span><span><a href=""
                                        class=" forgotpass ms-1">Register</a></span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class=" container mobile-form mt-3 ">

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
                            class=" forgotpass ms-1">Get a password</a></span>
                </div>
                <div class="d-flex ">
                  <span class="textclr">New to site?</span><span><a href=""
                          class=" forgotpass ms-1">Sign up</a></span>
              </div>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
</body>

</html>
