
<x-header />

<body class="bg-dark">
<div class="container">
    <div class="row d-flex justify-content-center align-items-center vh-100 px-5">
        <div class="authBox card col-md-6 py-4 mx-5 pt-5">
            <h2 class="align-self-center text-white">Login to Client Dashboard</h2>
            <div class="p-3 text-center">
                <img class="img-fluid" src="Assets/images/forex235_logo.svg" alt="">
            </div>
            <div class="card-body bg-transparent px-5">
                <form action="{{route('dashboard')}}" class="loginForm">
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating mb-1">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                    </div>
                    <div class="col text-center">
                        <p>
                            <a href="#">Forgot password ?</a>
                        </p>
                    </div>
                    <div class="text-center mb-3">
                       <button class="btn platform-btn form-control" type="submit">Login</button>
                   </div>
                    <div class="col signup-link text-center">
                        <div> Don't have an account ? </div>
                        <div>
                            <a href="#">Sign-up Now</a>                           
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
 <x-footer/>
 
