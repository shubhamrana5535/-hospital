<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background:#40E0D0" >
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src = "dataimgs/b7e7ddd7bba5d6a9ed8401985d246fc8.jpg" alt = "image1" class = "d-block" height="170px" width="150px"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
       
        <a class="nav-link" href="/">Back</a>
        
      </div>
    </div>
  </div>
</nav>
<div class="continer-fluid mt-3"> <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4 text-dark" style="background:#FF7F50">
        <form action="reg" method="post">
    @csrf
    <div class="form-group">
    <label for="">Name</label>
    <input type="text" name="name" value="" class="form-control">
	</div>
   
    <div class="form-group">
    <label for="">Email</label>
    <input type="text" name="email" value="" class="form-control">
	</div>
    <div class="form-group">
    <label for="">Phone</label>
    <input type="text" name="phone" value="" class="form-control">
	</div>
    <div class="form-group">
    <label for="">Address</label>
    <input type="text" name="address" value="" class="form-control">
	</div>
    
    <div class="form-group ">
    <label for="">Password</label>
    
    <input type="text" name="password" value="" class="form-control">
 </div>
    <input class="btn btn-success mt-2" type="submit" name="submit" value="submit">
    <button class="btn btn-info mt-2"> <a href="login">Login</a></button>

    </form>
 </div>
       
        <div class="col-md-4"></div>

    </div></div>
   
    <div class="container-fluid mt-2" style="background:#B9A7A3">
  <div class="row">
   <div class="col-md-4"><h1>Address</h1>
   <p>Line One street, New York, USA</p>
   <p>Phone-:+99-676767676</p>
   <p>Email-:jhon@gmail.com</p>
   <p>Web-:www.jhonlifeline.com</p>
  </div>
   <div class="col-md-4 text-center"><h1>Founder</h1>
    <img src="dataimgs/859aac2350164fe7f7d0af6d3f8af831.jpg" alt="" width="300px" height="300px"></div>
   <div class="col-md-4"><h1>More about us</h1>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora repellendus asperiores quam eligendi nisi in eaque autem quisquam magni consequatur.</p></div>

  </div>
</div> 
</body>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" >
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" ></script>
</html>