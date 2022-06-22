<?php
include('includes/header.php');
include('includes/navbar.php');
?>
<h1 style="text-align: center; padding-top:2vh; font-family:Comic Sans MS, Comic Sans, cursive;">Royola Pacific of Seattle, Inc.</h1>
<hr style="width:52%; margin: auto;">
<p style="text-align: center; color:red; padding-top:2vh; font-family:Comic Sans MS, Comic Sans, cursive;">FINE FURNITURE SINCE 1976</p>

<h6 style="text-align:center; font-family:Brush Script MT, Brush Script Std, cursive; font-size: x-large;">Established in 1976, our mission is to provide quality fine furniture to retailers.<br>With our warehouse in Seattle, we provide our valued customers with the styles of furniture for all your needs.</h6>
<br>
<div id="carouselExampleCaptions" class="carousel slide w-50" style="margin: auto;" data-bs-ride="carousel" data-bs-interval="3000">
  
  <div class="carousel-inner">
    <div class="carousel-item active">
      <a href="category.php?title=bedroom">
        <img src="uploads/home/Bedroom.jpg" class="d-block w-100" alt="Bedroom"/>
      </a>
      <div class="d-flex justify-content-center">
        <button type="button" onclick="window.location.href='category.php?title=bedroom'" class="fs-2 w-100 pt-2 pb-2" style="border: none;">Bedroom</button>
      </div>
      
    </div>
    <div class="carousel-item">
      <a href="category.php?title=dining">
      <img src="uploads/home/Dining.jpg" class="d-block w-100" alt="Dining"/>
      </a>
      <div class="d-flex justify-content-center">
        <button type="button" onclick="window.location.href='category.php?title=dining'" class="fs-2 w-100 pt-2 pb-2" style="border: none;">Dining</button>
      </div>
    </div>
    
    <div class="carousel-item">
    <a href="category.php?title=counter-height-dining">
    <img src="uploads/home/Pub Tables.jpg" class="d-block w-100" alt="Pub Tables"/>
      </a>
      <div class="d-flex justify-content-center">
        <button type="button" onclick="window.location.href='category.php?title=counter-height-dining'" class="fs-2 w-100 pt-2 pb-2" style="border: none;">Pub Tables</button>
      </div>
    </div>
    <div class="carousel-item">
    <a href="category.php?title=bunkbeds">
    <img src="uploads/home/Bunk Beds.jpg" class="d-block w-100" alt="Bunk Beds"/>
    </a>
    <div class="d-flex justify-content-center">
        <button type="button" onclick="window.location.href='category.php?title=bunkbeds'" class="fs-2 w-100 pt-2 pb-2" style="border: none;">Bunk Beds</button>
      </div>
    </div>
    <div class="carousel-item">
    <a href="category.php?title=click-clack-sofas">
    <img src="uploads/home/Click Clack Sofas.jpg" class="d-block w-100" alt="Click Clack Sofas"/>
    </a>
    <div class="d-flex justify-content-center">
        <button type="button" onclick="window.location.href='category.php?title=click-clack-sofas'" class="fs-2 w-100 pt-2 pb-2" style="border: none;">Click Clack Sofas</button>
      </div>
    </div>
    <div class="carousel-item">
    <a href="category.php?title=sofas">
    <img src="uploads/home/Sofas.jpg" class="d-block w-100" alt="Sofas"/>
    </a>
    <div class="d-flex justify-content-center">
        <button type="button" onclick="window.location.href='category.php?title=sofas'" class="fs-2 w-100 pt-2 pb-2" style="border: none;">Sofas</button>
      </div>
    </div>
    <div class="carousel-item">
    <a href="category.php?title=home-office">
    <img src="uploads/home/Home Office.jpg" class="d-block w-100" alt="Home Office"/>
      </a>
      <div class="d-flex justify-content-center">
        <button type="button" onclick="window.location.href='category.php?title=home-office'" class="fs-2 w-100 pt-2 pb-2" style="border: none;">Home Office</button>
      </div>
    </div>
    <div class="carousel-item">
    <a href="category.php?title=barstools">
    <img src="uploads/home/Bar Stools.png" class="d-block w-100" alt="Bar Stools"/>
      </a>
      <div class="d-flex justify-content-center">
        <button type="button" onclick="window.location.href='category.php?title=barstools'" class="fs-2 w-100 pt-2 pb-2" style="border: none;">Bar Stools</button>
      </div>
    </div>
    <div class="carousel-item">
    <a href="category.php?title=occasional-accessories">
    <img src="uploads/home/Occasional & Accessories.jpg" class="d-block w-100" alt="Occasional & Accessories"/>
      </a>
      <div class="d-flex justify-content-center">
        <button type="button" onclick="window.location.href='category.php?title=occasional-accessories'" class="fs-2 w-100 pt-2 pb-2" style="border: none;">Occasional & Accessories</button>
      </div>
    </div>
    
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
      

<?php
include('includes/footer.php');
?>