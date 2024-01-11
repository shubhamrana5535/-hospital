<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background:#EBDEF0 ">

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src = "dataimgs/b7e7ddd7bba5d6a9ed8401985d246fc8.jpg" alt = "image1" class = "d-block" height="170px" width="150px"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
       
        <a class="nav-link" href="docter">Back</a>
        
      </div>
    </div>
  </div>
</nav>
<div class="container">
  <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-4 mt-2">
    <table class="table table-hover table-light table-bodered">  
<thead class="table-dark">  
<tr>  
<th> UserId </th>  
<th> Username </th>
<th> Number </th>  
<th> Email </th>  

<th> Address </th> 
<th> Department </th> 

<th> Delete </th>  
<th> Update </th>  


</tr>  
</thead>  
<tbody>  
<tr> 
@foreach($data as $item) 
<td> {{$item->id}} </td>
<td> {{$item->name}} </td>  
<td> {{$item->number}} </td>  
<td> {{$item->email}} </td>  
<td> {{$item->address}} </td> 
<td> {{$item->department}} </td> 

<td><a href="delete/{{$item->id}}">Delete</a></td>
<td><a href="edit/{{$item->id}}">Update</a></td>

  


  

</tr>  

@endforeach
</tbody>  
</table> 
    </div>
    <div class="col-md-2"></div>

  </div>
</div>

<div class="container-fluid  mt-2" style="background:#B9A7A3">
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


