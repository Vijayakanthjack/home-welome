<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Sign-up as Seller" />
    <meta name="description" content="Sign-up as Seller" />
    <meta name="author" content="Sign-up as Seller" />

    <link rel="icon" href="public/images/fav.png" type="image/x-icon" />
    <title>Sign-up as Seller</title>
    <?php include "main_link_css.php";?>
    <link rel="stylesheet" href="public/css/signup-seller-style.css">
    
</head>

<body>

    <?php include "header.php";?>
    <div class="backg-bg" style="background-image:url('public/images/abstract-blur-defocused-shopping-mall0.jpg');">
        <div class="login-box-in">
            <div class="left-b" style="background-image:url('public/images/business-owner.jpg');">
                <h1>Sign-up as Seller</h1>
            </div>


            <div class="right-b">
                <div class="user-in">
                    <img src="public/images/man01.png" class="img-fluid">
                </div>
                <!-- <h3>Login Now</h3> -->
                <form>

                    <div class="form-group">

                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            placeholder="Email Address">

                    </div>

                  <div class="form-group">

                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter your Password">
                    </div>
                  <div class="form-group text-black-50">
                       <small>(6 characters minimum)</small>
                    </div>

                    <div class="form-group">

                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Confirm Password">
                    </div>

                    <div class="form-group form-check forgot-text">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1"><strong>I Agree to the Terms </strong>&
                            Conditions</label>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-success ">Register Now</button>
                    </div>

                </form>

            </div>

        </div>
    </div>
    <?php include "footer-2.php";?>

    <?php include "main_link_js.php";?>


</body>

</html>