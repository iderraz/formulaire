<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset("css/app.css")}}">

    <title>Document</title>
</head>
<body>

@include('partials/nav')

    <!--section-->
    <section class="d-flex justify-content-evenly align-items-center" id="section">

        <div class="mt-5">   
          
                <h3 class="slide-right1">Website</h3>
                <h1 class="slide-right2">Contact</h1>
                <p class="slide-right3">Lorem ipsum dolor sit amet</p>
            

    
            <div  class="col-lg-6 mt-4 mt-md-0 w-100">
                <form action="{{ route('sendEmail')}}" method="POST">
                  @csrf
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                    </div>
                    <div class="col-md-6 form-group mt-3 mt-md-0">
                      <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                    </div>
                  </div>
                  <div class="form-group mt-3">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                  </div>
                  <div class="form-group mt-3">
                    <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                  </div>
                  <div class="text-center mt-5"><button type="submit" class="btn btn-outline-primary text-dark">send your message</button></div>
                </form>
              </div>
            </div>


            <div id="d" class="card " style="width: 12rem; height: 12rem;">
                <img src="img/bouh.jpg" class="card-img-top" alt="...">
                <div id="radius" class="card-body d-flex flex-column align-items-center">
                  <h5 class="card-title">Our website</h5>
                  <p class="card-text ">+32423523453</p>
                  <h6 class="card-text">website@mail.com</h6>
                  <a href="#" class="btn btn-success">Play it</a>
                </div>
              </div>
    </section>






    <script src="{{asset("js/app.js")}}"></script>
</body>
</html>