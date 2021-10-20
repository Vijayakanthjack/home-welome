<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Seller Login" />
    <meta name="description" content="Seller Login" />
    <meta name="author" content="Seller Login" />

    <link rel="icon" href="public/images/fav.png" type="image/x-icon" />
    <title>Seller Signup</title>
    <?php include "main_link_css.php";?>
    <link rel="stylesheet" href="public/css/seller-style.css">
</head>

<body>

    <?php include "header.php";?>
    <div class="backg-bg" style="background-image:url('public/images/seller-bg.jpg');">
        <div class="login-box-in">
            <div class="left-b" style="background-image:url('public/images/seller-img.jpg');">
                <h1>Seller <span>Signup</span></h1>
            </div>
            <div class="right-b">
                <div class="user-in">
                    <img src="public/images/seller.png" class="img-fluid">
                </div>
                <!-- <h3>Login Now</h3> -->
                <form>
                    <div class="form-group">

                        <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Mobie Number">

                    </div>
                    <div class="form-group">

                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            placeholder="Email Address">

                    </div>
                    <div class="form-group">

                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>

                    <div class="form-group form-check forgot-text">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Remember me?</label>
                    </div>

                    <button type="submit" class="btn btn-success pull-right">Submit</button>
                    <div class="clearfix"></div>
                    <div class="form-group mt-3 mb-0 forgot-text">

                        <label class="form-check-label" for="exampleCheck1">Dont Have Account? Sign up</label>
                        <label class="form-check-label pull-right" for="exampleCheck1">Forgot your password?</label>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <?php include "footer-2.php";?>


    <?php include "main_link_js.php";?>


</body>

</html>