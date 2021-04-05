<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Cao Thành Công 621065">
    <title>Women's Clothing Store</title>
    <link rel="shortcut icon" href="//images/front-end/icon/icon1.png"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;500;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="css/front-end/style.css">
</head>
<body>   
<header>
    <div class="header_nav">
        <nav class="navbar navbar-expand-lg navbar-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse w-100" id="navbarNav">
                <div class="container d-flex justify-content-between align-items-center">
                    <!-- <div class="logo-images">
                        <a href="index.html"><img src="./assets/images/logo/logo.png" alt="logo"></a>
                    </div> -->
                    <ul class="navbar-nav">
                        <div class="logo-img">
                            <a href="{{route('home.hi')}}"><img src="/images/front-end/icon/logo.png" alt="logo"></a>
                        </div>
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ route('home.index')}}" style="padding-right: 50px;">SHOP <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home.about')}}" style="padding-right: 50px;">ABOUT</a>
                        </li>
                        <li class="nav-item">
                            {{-- <a class="nav-link" href="{{route('home.journal')}}" style="padding-right: 50px;">JOURNAL</a> --}}
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home.contact')}}" style="padding-right: 50px;">CONTACT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home.login')}}" style="padding-right: 50px;"><i class="fas fa-user-circle" style="font-size: 20px;"></i> LOGIN</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('home.hi')}}"><i class="fas fa-shopping-bag" style="font-size: 20px;"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
@yield('content')
<footer style="padding-top: 110px;">
    <div class="footer-top">
        <div class="title" style="padding-top: 90px;">
            <img src="/images/front-end/icon/logo.png" alt="logo"> <hr style="width:65%; background-color: black;">
        </div>
        <div class="container">
            <div class="row w-100" style="padding-top: 50px; padding-bottom: 50px;">
                <div class="col-lg-3 col-sm-12">
                    <div class="content">
                        <a href="#">Shop</a> <br>
                        <a href="#">About</a> <br>
                        <a href="#">Journal</a> <br>
                        <a href="#">Contact</a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-12">
                    <div class="content">
                        <a href="#">FAQ</a> <br>
                        <a href="#">Shipping & Returns</a> <br>
                        <a href="#">Store Policy</a> <br>
                        <a href="#">Payments</a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-12">
                    <div class="content">
                        <a href="mailto:cong2702c@gmail.com">cong2702c@gmail.com</a> <br>
                        <a href="https://www.facebook.com/JinniIove/">Cao Thành Công</a> <br>
                        <a href="https://www.facebook.com/JinniIove/">Mã SV: 621065</a> <br>
                        <a href="https://www.facebook.com/JinniIove/">Học viện nông nghiệp Việt Nam</a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-12">
                    <div class="content">
                        <div class="form-group">
                            <label for="exampleInputEmail1" style="font-size: 16px;">Sign up. Stay stylish</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email here*" style="width:247px; height:42px; font-family:Arial, Helvetica, sans-serif; font-size:16px;">
                        </div>
                        <div class="subcribe" style="padding-top: 5px;">
                            <a href="#">Subscribe Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <p>© 2023 by Life Etc. Proudly created with <u>Wix.com</u></p>
    </div>
</footer>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
</body>
</body>

</html>