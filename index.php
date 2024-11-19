<html>

<head>
    <title>Health Centre NIT Delhi</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
    <link rel="stylesheet" type="text/css" href="style1.css">
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="footer.css">
    <style>
        .form-control {
            border-radius: 0.75rem;
        }
    </style>
    <script>
        var check = function() {
            if (document.getElementById('password').value ==
                document.getElementById('cpassword').value) {
                document.getElementById('message').style.color = '#5dd05d';
                document.getElementById('message').innerHTML = 'Matched';
            } else {
                document.getElementById('message').style.color = '#f55252';
                document.getElementById('message').innerHTML = 'Not Matching';
            }
        }

        function alphaOnly(event) {
            var key = event.keyCode;
            return ((key >= 65 && key <= 90) || key == 8 || key == 32);
        };

        function checklen() {
            var pass1 = document.getElementById("password");
            if (pass1.value.length < 6) {
                alert("Password must be at least 6 characters long. Try again!");
                return false;
            }
        }
    </script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#" style="margin-top: 10px;margin-left:-65px;font-family: 'IBM Plex Sans', sans-serif;">
                <h4><i class="fa fa-user-plus" aria-hidden="true"></i>&nbsp Health Centre NIT Delhi</h4>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item" style="margin-right: 40px;">
                        <a class="nav-link js-scroll-trigger" href="index.php" style="color: white;font-family: 'IBM Plex Sans', sans-serif;">
                            <h6>HOME</h6>
                        </a>
                    </li>

                    <li class="nav-item" style="margin-right: 40px;">
                        <a class="nav-link js-scroll-trigger" href="services.html" style="color: white;font-family: 'IBM Plex Sans', sans-serif;">
                            <h6>ABOUT US</h6>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="contact.html" style="color: white;font-family: 'IBM Plex Sans', sans-serif;">
                            <h6>CONTACT</h6>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>



    <div class="container register" style="font-family: 'IBM Plex Sans', sans-serif;">
        <div class="row">
            <div class="col-md-3 register-left" style="margin-top: 10%;right: 5%">
                <img src="./img/hi.png" alt="" style="scale: 1.4;" />
                <h3>Welcome</h3>

            </div>
            <div class="col-md-9 register-right" style="margin-top: 40px;left: 80px;">
                <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist" style="width: 40%;">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Patient</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Doctor</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#admin" role="tab" aria-controls="admin" aria-selected="false">Admin</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <h3 class="register-heading">Register as Patient</h3>
                        <form method="post" action="patientloginhandler.php">
                            <div class="row register-form">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="First Name *" name="fname" onkeydown="return alphaOnly(event);" required />
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Your Email *" name="email" />
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Password *" id="password" name="password" onkeyup='check();' required />
                                    </div>

                                    <div class="form-group">
                                        <div class="maxl">
                                            <label class="radio inline">
                                                <input type="radio" name="gender" value="Male" checked>
                                                <span> Male </span>
                                            </label>
                                            <label class="radio inline">
                                                <input type="radio" name="gender" value="Female">
                                                <span>Female </span>
                                            </label>
                                        </div>
                                        <a href="patientlogin.php">Already have an account?</a>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Last Name *" name="lname" onkeydown="return alphaOnly(event);" required />
                                    </div>

                                    <div class="form-group">
                                        <input type="tel" minlength="10" maxlength="10" name="contact" class="form-control" placeholder="Your Phone *" />
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" id="cpassword" placeholder="Confirm Password *" name="cpassword" onkeyup='check();' required /><span id='message'></span>
                                    </div>
                                    <input type="submit" class="btnRegister" name="patient" onclick="return checklen();" value="Register" />
                                </div>

                            </div>
                        </form>
                    </div>


                    <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <h3 class="register-heading">Login as Doctor</h3>
                        <form method="post" action="func1.php">
                            <div class="row register-form">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="User Name *" name="username3" onkeydown="return alphaOnly(event);" required />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Password *" name="password3" required />
                                    </div>

                                    <input type="submit" class="btnRegister" name="docsub1" value="Login" />
                                </div>
                            </div>
                        </form>
                    </div>


                    <div class="tab-pane fade show" id="admin" role="tabpanel" aria-labelledby="profile-tab">
                        <h3 class="register-heading">Login as Admin</h3>
                        <form method="post" action="func3.php">
                            <div class="row register-form">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="User Name *" name="username1" onkeydown="return alphaOnly(event);" required />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Password *" name="password2" required />
                                    </div>

                                    <input type="submit" class="btnRegister" name="adsub" value="Login" />
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>

    </div>
    <!DOCTYPE html>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }
    .slider {
      position: relative;
      width: 80%;
      max-width: 800px;
      /* max-height: 600px; */
      aspect-ratio: 16/9;
      object-fit: cover;
      margin: 50px auto;
      overflow: hidden;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }
    .slides {
      display: flex;
      transition: transform 0.5s ease-in-out;
    }
    .slides img {
      width: 100%;
      border: none;
      display: block;
    }
    .dots {
      text-align: center;
      margin-top: 10px;
      position: absolute;
      bottom: 0;
      left: 30%;    
    }
    .dot {
      height: 12px;
      width: 12px;
      margin: 0 5px;
      background-color: #bbb;
      border-radius: 50%;
      display: inline-block;
      cursor: pointer;
    }
    .dot.active {
      background-color: #717171;
    }
  </style>
</head>
<body>
  <div class="slider">
    <div class="slides">
      <img src="./images/slide1.webp" alt="Slide 1">
      <img src="./images/slide2.webp" alt="Slide 2">
      <img src="./images/slide3.webp" alt="Slide 3">
      <img src="./images/slide4.webp" alt="Slide 3">
      <img src="./images/slide5.webp" alt="Slide 3">
      <img src="./images/slide6.webp" alt="Slide 3">
      <img src="./images/slide7.webp" alt="Slide 3">
      <img src="./images/slide8.webp" alt="Slide 3">
    </div>
    <div class="dots">
        <span class="dot" onclick="showSlide(0)"></span>
        <span class="dot" onclick="showSlide(1)"></span>
        <span class="dot" onclick="showSlide(2)"></span>
        <span class="dot" onclick="showSlide(3)"></span>
        <span class="dot" onclick="showSlide(4)"></span>
        <span class="dot" onclick="showSlide(5)"></span>
        <span class="dot" onclick="showSlide(6)"></span>
        <span class="dot" onclick="showSlide(7)"></span>
        <span class="dot" onclick="showSlide(8)"></span>
    </div>
</div>
    
  <script>
    let currentIndex = 0;
    const slides = document.querySelector('.slides');
    const dots = document.querySelectorAll('.dot');
    const slideCount = dots.length;

    function showSlide(index) {
      currentIndex = index;
      slides.style.transform = `translateX(-${index * 100}%)`;
      updateDots();
    }
    function updateDots() {
      dots.forEach((dot, idx) => {
        dot.classList.toggle('active', idx === currentIndex);
      });
    }
    setInterval(() => {
      currentIndex = (currentIndex + 1) % slideCount;
      showSlide(currentIndex);
    }, 2000);
    showSlide(0);
  </script>

<footer>
      <div class="footer-container">
        <div class="footer-section about">
          <h2>About NIT Delhi Health Care</h2>
          <p>
            The NIT Delhi Health Centre provides health services to students,
            faculty, and staff. We aim to deliver top-quality healthcare and
            maintain a database of student and employee health records for
            effective management.
          </p>
        </div>
        <div class="footer-section contact">
          <h2>Contact Us</h2>
          <p><span class="icon">📞</span> +91-11-33861000</p>
          <p><span class="icon">✉️</span> healthcare@nitdelhi.ac.in</p>
          <p>
            <span class="icon">📍</span> Zone P1, National Institute of
            Technology, Plot No. FA7, GT Karnal Rd, Garthi Khurad, Bakoli,
            Delhi, 110036
          </p>
        </div>
        <div class="footer-section links">
          <h2>Quick Links</h2>
          <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/services">Services</a></li>
            <li><a href="/contact">Contact</a></li>
          </ul>
        </div>
      </div>
      <div class="footer-bottom">
        <p>&copy; 2024 NIT Delhi. All Rights Reserved.</p>
      </div>
    </footer>
</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>

</html>