<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Warehouse M.</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/master.css">
    <link rel="stylesheet" href="js/app.js">
  </head>
  <body>
    <header>
      <nav class="navbar sticky navbar-dark bg-dark">
  <img src="img/whlogo.png" class="logohead">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
<!--  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
  </div>
</nav> -->
    </header>
    <div class="row">
      <section class="col col-lg-7 form-wh">
      <form method="post" action="model/empresa.php">
  <div class="form-group">
    <label for="shipping-company">Shipping Company</label>
    <select class="form-control" name="company" id="exampleFormControlSelect2">
      <option>DHL</option>
      <option>UPS</option>
      <option>Fedex</option>
      <option>USPS</option>
    </select>
  </div>
    <div class="form-group">
      <label for="shipping-reference">Shipping Reference</label>
      <input class="form-control" type="text" placeholder="85020495" name="reference">
    </div>
    <div class="form-group">
      <label for="box-number">Box Number</label>
      <hr>
      <input type="number" min="1" max="100" style="width:50%; margin-bottom:2%" name="number">
    </div>
    <div class="form-group">
      <label for="product" class="product">Product</label>
      <select class="form-control" id="exampleFormControlSelect2" name="product">
        <option>case s8</option>
        <option>case s10e</option>
        <option>case s9</option>
        <option>case note 9</option>
      </select>
    </div>
    <div class="offset-col-4 text-center" style="">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">new product</button>
  </div>
  <div class="form-group">
    <label for="shipping-reference">Quantity</label>
    <input class="form-control" type="text" name="quantity">
  </div>
  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">add box</button>
  <div class="form-group text-center">
    <input type="submit" name="enviar" value="enviar" class=" ">enviar
  </div>
  </form>
  </section>
  <section class="col col-lg-3">
    <div class="invoice-box">
  </section>

  </div>

  <?php

require('empresa.php');

</html>
