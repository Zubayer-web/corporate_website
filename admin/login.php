<?php 
namespace App\classes;
require_once '../vendor/autoload.php';
$user = new User();
    $user->logincheck() ? header("location: index.php") : false ;
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from thevectorlab.net/flatlab-4/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Jul 2019 15:06:09 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.html">

    <title>FlatLab - Flat & Responsive Bootstrap Admin Template</title>




    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css">
    <!-- Custom styles for this template -->
    <!-- <link href="css/style.css" rel="stylesheet"> -->

    <link href="css/custom.css" rel="stylesheet">
    <!-- <link href="css/style-responsive.css" rel="stylesheet" /> -->
    <style>
    .container {
        width: 1140px;
    }

    .gr {
        background: rgb(2, 0, 36);
        background: linear-gradient(90deg, rgba(2, 0, 36, 1) 0%, rgba(9, 121, 108, 1) 35%, rgba(0, 212, 255, 1) 100%);
    }
    </style>
</head>

<body class="login-page">
    <!-- login form -->
    <section class="login-section gr" id="loginFormBox">
        <div class="vh-100 d-flex justify-content-center align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 bg-light p-5 rounded-2">
                        <h2 class=" pb-4 ">Login Your Account</h2>
                        <hr class="bg-black">
                        <div id="loginError"></div>
                        <form id="loginForm">
                            <div class="form-user  mb-3">
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon1">@</span>
                                    <input type="email" id="loginUsername" name="useremail" class="form-control"
                                        placeholder="Email address" aria-label="Username" aria-describedby="basic-addon1" value="<?php echo isset($_COOKIE['useremail']) ? $_COOKIE['useremail'] : ''; ?>">
                                </div>
                                <div id="loginUsernameEorr" class="form-text"></div>
                            </div>
                            <div class="form-user  mb-3">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1"><i
                                            class="fa-solid fa-key"></i></span>
                                    <input type="password" id="loginPassword" name="password" class="form-control"
                                        placeholder="Password" aria-label="Username" aria-describedby="basic-addon1" value="<?php echo isset($_COOKIE['password']) ? $_COOKIE['password'] : ''; ?>">
                                </div>
                                <div id="loginPasswordError" class="form-text"></div>
                            </div>

                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="loginCheck" name="remember" <?php echo isset($_COOKIE['useremail']) ? 'checked':''; ?>>
                                <label class="form-check-label" for="loginCheck">Remember Me</label>
                                <a class="float-end" id="forgetForm">Forget Password?</a>
                            </div>
                            <button id="login" type="submit" class="btn btn-primary">Log in</button>
                        </form>
                    </div>
                    <div class="col-md-6 bg-dark p-5">
                        <section class="justify-content-center align-items-center text-center">
                            <h2 class="text-light">Lorem ipsum dolor sit amet.</h2>
                            <hr class="text-light">
                            <p class="text-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit
                                reiciendis modi
                                tenetur architecto beatae nesciunt! Est id, doloremque impedit non sint eligendi soluta
                                quod
                                perspiciatis repudiandae cum?.</p>
                            <button id="registerBack" class="btn btn-primary">Sign up</button>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Register form -->
    <section class="register-section gr" id="registerFormBox" style="display: none;">
        <div class="vh-100 d-flex justify-content-center align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 bg-light p-5 rounded-2">
                        <h2 class="pb-4">Login Your Account</h2>
                        <hr class="bg-black">
                        <div id="displayError"></div>
                        <form id="registerForm">
                            <div class="form-user mb-3">
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-user"></i></span>
                                    <input type="text" id="fullname" name="fullname" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                                <div id="fullNameError" class="form-text"></div>
                            </div>
                            <div class="form-user mb-3">
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-envelope"></i></span>
                                    <input type="email" id="useremail" name="useremail" class="form-control" placeholder="Email Address" aria-label="Email" aria-describedby="basic-addon1">
                                </div>
                                <div id="emailError" class="form-text"></div>
                            </div>


                            <div class="form-user  mb-3">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-key"></i></span>
                                    <input type="password" id="password" name="password" class="form-control" placeholder="Password" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                            <div id="passwordError" class="form-text"></div>

                                <div class="form-user  mb-3">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-key"></i></span>
                                        <input type="password" id="c_password" class="form-control" placeholder="Re-type Password" aria-label="Username" aria-describedby="basic-addon1">
                                    </div>
                                    <div id="matcherror" class="form-text"></div>                                    
                                </div>

                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="registerCheck">
                                    <label class="form-check-label" for="registerCheck">Check me out</label>
                                </div>
                                <button id="register" type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
                <div class="col-md-6 bg-dark p-5">
                    <section class="justify-content-center align-items-center text-center">
                        <h2 class="text-light">Lorem ipsum dolor sit amet.</h2>
                        <hr class="text-light">
                        <p class="text-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit
                            reiciendis modi
                            tenetur architecto beatae nesciunt! Est id, doloremque impedit non sint eligendi soluta
                            quod
                            perspiciatis repudiandae cum?.</p>
                        <button id="loginBack" class="btn btn-primary">log in</button>
                    </section>
                </div>
            </div>
        </div>
        </div>
    </section>

    <!-- Forget form -->
    <section class="forget-section gr" id="forgetFormBox" style="display: none;">
        <div class="vh-100 d-flex justify-content-center align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 bg-light p-5 rounded-2">
                        <h2 class=" pb-4 ">Login Your Account</h2>
                        <form id="forgetForm">
                            <div class="form-user  mb-3">
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon1"><i
                                            class="fa-solid fa-envelope"></i></span>
                                    <input type="email" id="forgetmail" name="useremail" class="form-control"
                                        placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                                <div id="emailHelp" class="form-text"></div>
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                    <div class="col-md-6 bg-dark p-5">
                        <section class="justify-content-center align-items-center text-center">
                            <h2 class="text-light">Lorem ipsum dolor sit amet.</h2>
                            <hr class="text-light">
                            <p class="text-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit
                                reiciendis modi tenetur architecto beatae nesciunt! Est id, doloremque impedit non sint eligendi soluta
                                quod perspiciatis repudiandae cum?.</p>
                            <button id="registerBackFormForget" class="btn btn-primary">Sign up</button>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>
<form>