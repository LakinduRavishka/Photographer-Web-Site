<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Me | 📸</title>
  <link rel="icon" href="images/favicon/apple-touch-icon.png">
  <link rel="stylesheet" href="Style.css">
  <script defer src="script.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script defer src="https://cdn.jsdelivr.net/npm/i8-icon@0.9.4/index.min.js"></script>
  <script defer src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script> <!-- Font Awesome for icons -->
  <script defer src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="bg-black">
  <div class="">
    <?php include('header.php') ?>
  </div>
    <div class="container-fluid d-flex align-items-center justify-content-center absec2">
        <div class="row text-white text-center align-items-center">
          
          <div class="col-12 col-lg-6 col-md-6">
            <img src="images/image 3.png" class="img-fluid mt-5 mb-5" alt="Malcolm Lismore" style="max-height: 600px;">
          </div>
          <div class="col-12 col-lg-6 col-md-6 mb-4 mb-lg-0">
            <p class="text-start txt-yellow txtmain fs-4">About Me ----</p>
            <h1 class="display-5 fw-bold text-start mb-3  fontsec">Hi, I'm Malcolm <span class="txt-yellow">Lismore</span></h1>
            <h2 class="fs-2  text-start fontsec fw-medium"><span class="txt-yellow">PHOTO</span> GRAPHER</h2><br>
            <div class="mt-4 text-start">
              <p class="fontsec fs-4"><i class="fa-solid fa-phone mb-3 iconcolor p-2 me-3 rounded"></i><strong class="me-4 fw-semibold fs-5">  Number :</strong>+94 767 75 0118</p>
              <p class="fontsec fs-4"><i class="fa-solid fa-envelope mb-3 iconcolor p-2 me-3 rounded"></i><strong class="me-5 fw-semibold fs-5">  Email :</strong>example@gmail.com</p>
              <p class="fontsec fs-4"><i class="fa-brands fa-steam mb-3 iconcolor p-2 me-3 rounded"></i><strong class="me-4 fw-semibold fs-5">  Website :</strong>www.example.com</p>
              <a href="mycv.pdf" DOWNLOAD="mycv.pdf" class=""><button class="btn cvbtn fw-bold text-white border-0 custom-button" style="background-color: #3D1C63;width: 180px;height: 60px;">DOWNLOAD CV <i class="fa-solid fa-file ms-1 txt-yellow"></i></button></a>            
            </div>
          </div>
        </div>
    </div>
    <div class="absec2 mb-5">
        <p class="text-center txt-yellow fs-6 fw-semibold txtmain">------ MY SERVICES ------</p>
        <h2 class="text-center text-white display-3 fw-semibold fontsec">Services</h2>
        <div class="container-fluid row text-center">
            <!--Services 2-->
            <div class="col col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 ">
                <div class="card h-100 bg-black text-light ">
                  <img src="images/portfolio/img2.png" class="card-img-top pt-2 px-2 card-images" alt="...">
                  <div class="card-body">
                    <h5 class="card-title fontsec">Wedding Shoots</h5><hr class="text-warning">
                  </div>
                  <div class="card-footer bg-dark txtmain">
                    <a href="Contact.php"><button class="btn" style="background-color: #FDB40A;">Contact For More</button></a>
                  </div>
                </div>
            </div>
            <!--Services 2-->
            <div class="col col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 ">
                <div class="card h-100 bg-black text-light ">
                  <img src="images/portfolio/img6.png" class="card-img-top pt-2 px-2 card-images" alt="...">
                  <div class="card-body">
                    <h5 class="card-title fontsec">Promotion Shoots</h5><hr class="text-warning">
                  </div>
                  <div class="card-footer bg-dark txtmain card-button">
                  <a href="Contact.php"><button class="btn" style="background-color: #FDB40A;">Contact For More</button></a>
                  </div>
                </div>
            </div>
            <!--Services 3-->
            <div class="col col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                <div class="card h-100 bg-black text-light ">
                    <img src="images/portfolio/img5.png" class="card-img-top pt-2 px-2 card-images" alt="...">
                    <div class="card-body">
                      <h5 class="card-title fontsec">Random Shoots</h5><hr class="text-warning">
                    </div>
                    <div class="card-footer bg-dark txtmain text-dark">
                      <a href="Contact.php"><button class="btn" style="background-color: #FDB40A;">Contact For More</button></a>
                    </div>
                </div>
            </div>
            <!--Services 4-->
            <div class="col col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                <div class="card h-100 bg-black text-light ">
                    <img src="images/portfolio/img2.png" class="card-img-top pt-2 px-2 card-images" alt="...">
                    <div class="card-body">
                      <h5 class="card-title fontsec">Event Shoots</h5><hr class="text-warning">
                    </div>
                    <div class="card-footer bg-dark txtmain">
                      <a href="Contact.php"><button class="btn" style="background-color: #FDB40A;">Contact For More</button></a>
                    </div>
                </div>
            </div>
        </div>
      
    </div>
    <?php include('Footer.php')?>
</div>
</body>
</html>