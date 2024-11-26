<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Me | 📸</title>
  <link rel="icon" href="images/favicon/apple-touch-icon.png">
  <link rel="stylesheet" href="Style.css">
  <script defer src="script.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script defer src="https://cdn.jsdelivr.net/npm/i8-icon@0.9.4/index.min.js"></script>
  <script defer src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script> <!-- Font Awesome for icons -->
  <script defer src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</head>
<body class="bg-black">
  <div class="">
    <?php include('header.php') ?>
  </div>
    <div class="container-fluid row section4 pt-3">
        <p class="text-center txt-yellow fs-6 fw-semibold txtmain">------ CONTACT ME ------</p>
        <h2 class="text-center text-white display-6 fw-semibold fontsec"><span class="txt-yellow">Feel</span> Free to Of Contacts</h2>
        <h2 class="text-center text-white display-6 fw-semibold fontsec">With <span class="txt-yellow">Me</span></h2>
        <div class=" text-white">
          <div class="container-fluid row  mb-5">
            <div class="col-6 col-md-6">
              
              <!--locate me-->
              <div class="d-flex align-items-start mb-4">
                    <i class="fa-solid fa-location mb-3 iconcolor p-2 me-3 rounded"></i>
                    <div>
                        <strong class="me-3 fontsec fs-5 fw-bold">Studio Address</strong>
                        <p class="mb-0 fs-6 lh-lg txtmain">Malcolm Lismore Photography <br> 1234 Parkside Avenue, Suite 101 <br> Greenwich Village <br> New York, NY 10011</p>
                    </div>
              </div>
              <!--email me-->
                <div class="fontsec fs-6 d-flex align-items-start mb-4">
                    <i class="fa-solid fa-envelope mb-3 iconcolor p-2 me-3 rounded"></i>
                    <div>
                        <strong class="me-3 fw-semibold fs-5 ">  Email : </strong>
                        <p class="mb-0 fs-6 txtmain">example@gmail.com</p>
                    </div>
                </div>
              <!--Call me-->
              <div class="fontsec fs-6 d-flex align-items-start mb-3 ">
                    <i class="fa-solid fa-phone mb-3 iconcolor p-2 me-3 rounded"></i>
                    <div>
                        <strong class="me-3 fw-semibold fs-5 ">  Phone Number : </strong>
                        <p class="mb-0 fs-6 txtmain">+94 767 750 118</p>
                    </div>
              </div>
            </div>
  
            <div class="col-6 col-md-6">
              <h4 class="text-center fontsec">Add Your Booking</h4>
              <div class="mt-3">
                  <form action="bookingCode.php" method="POST">
                      <div class="mb-3">
                          <input type="text" class="form-control" name="name" placeholder="Name" required>
                      </div>
                      <div class="mb-3">
                          <input type="email" class="form-control" name="email" placeholder="Email" required>
                      </div>
                      <div class="mb-3">
                          <input type="date" class="form-control" name="date" required>
                      </div>
                      <div class="mb-3">
                          <input type="number" class="form-control" name="mobil_no" placeholder="Mobil Number" required>
                      </div>
                      <!-- Dropdown for selecting package -->
                      <div class="mb-3">
                          <select class="form-control" name="package" required>
                            <option value="" disabled selected>Select Package</option>
                            <option value="basic">Basic</option>
                            <option value="premium">Premium</option>
                            <option value="premium_plus">Premium Plus</option>
                          </select>
                      </div>
                      <button class="btn btn-warning w-100">Send Message <i class="fa-solid fa-arrow-right"></i></button>
                  </form>
              </div>
          </div>
          
        </div>
    </div>
</div> 
<div class="packages mt-4 container-fluid ms-0 me-0 ">
    <p class="text-center txt-yellow fs-6 fw-semibold txtmain">------ PACKAGES ------</p>
    <h2 class="text-center text-white display-6 fw-semibold fontsec mb-4"><span class="txt-yellow"></span> Choose the package that suits you</h2>
    <div class="row container text-white ms-3">
      <!--card one-->
        <div class="card text-center col-12 col-md-5 mb-5 shadow-sm package border-0">
          <div class="card-header bg-primary text-black txtmain">
            <i class="fa-solid fa-camera"></i> Basic
          </div>
          <div class="card-body text-white">
            <h5 class="card-title">Special Title Treatment</h5>
            <p class="card-text">Our Basic Package includes essential photography services to capture your special moments.</p>
            <div class="cardlist">
              <p class=" "><i class="fa-solid fa-check"></i> Wedding Photography</p>
              <p class=""><i class="fa-solid fa-check"></i> Promotion Photoshoots</p>
              <p class=""><i class="fa-solid fa-check"></i> Nature Photography</p>
              <p class=""><i class="fa-solid fa-check"></i> Basic Photo Edits</p>
            </div>
            <p class="card-text mt-3">Perfect for clients looking for simple yet beautiful captures of their special occasions.</p>
          </div>
        </div>
        <div class="col-md-2">
      
        </div>
        <!--card two-->
        <div class="card text-center col-12 col-md-5 mb-5 shadow-sm border-0 package text-white">
          <div class="card-header text-black txtmain" style="background-color: #FDB40A;">
            <i class="fa-solid fa-gem"></i> Premium
          </div>
          <div class="card-body">
            <h5 class="card-title">Comprehensive Photography Service</h5>
            <p class="card-text">Our Premium Package offers a broader range of photography services for more comprehensive coverage.</p>
            <div class="cardlist">
              <p class="list-group-item text-center "><i class="fa-solid fa-check me-2"></i> Wedding Photography</p>
              <p class="list-group-item"><i class="fa-solid fa-check"></i> Promotion Photoshoots</p>
              <p class="list-group-item"><i class="fa-solid fa-check"></i> Nature Photography</p>
              <p class="list-group-item"><i class="fa-solid fa-check"></i> Event Photography</p>
              <p class="list-group-item"><i class="fa-solid fa-check"></i> Portrait Sessions</p>
              <p class="list-group-item"><i class="fa-solid fa-check"></i> Enhanced Photo Edits & Retouching</li>
            </div>
          
      <p class="card-text mt-3">Ideal for clients who want high-quality photography with additional event and portrait options.</p>
          </div>
        </div>
      
        <div class="col-md-4">
      
        </div>
        <div class="card text-center col-12 col-md-5 mb-5 shadow-sm border-0 package">
          <div class="card-header bg-danger text-black txtmain">
            <i class="fa-solid fa-award"></i> Premium Plus
          </div>
          <div class="card-body text-white">
            <h5 class="card-title">Ultimate Photography Experience</h5>
            <p class="card-text">Our Premium Plus Package provides the ultimate photography experience with exclusive services.</p>
            <div class="cardlist">
              <p class="list-group-item"><i class="fa-solid fa-check"></i> Wedding Photography</p>
              <p class="list-group-item"><i class="fa-solid fa-check"></i> Promotion Photoshoots</p>
              <p class="list-group-item"><i class="fa-solid fa-check"></i> Nature Photography</p>
              <p class="list-group-item"><i class="fa-solid fa-check"></i> Event Photography</p>
              <p class="list-group-item"><i class="fa-solid fa-check"></i> Portrait Sessions</p>
              <p class="list-group-item"><i class="fa-solid fa-check"></i> Pre-Wedding/Engagement Shoots</p>
              <p class="list-group-item"><i class="fa-solid fa-check"></i> Multi-Day Coverage</p>
              <p class="list-group-item"><i class="fa-solid fa-check"></i> Custom Album Design</p>
              <p class="list-group-item"><i class="fa-solid fa-check"></i> Premium Photo Edits, Retouching & Effects</p>
            </div>
            <p class="card-text mt-3">Perfect for clients who desire the highest quality service with complete coverage and customization options.</p>
          </div>
        </div>
      
        <div class="col-md-6">
      
        </div>
      </div>
</div>
<?php include('Footer.php')?>
</body>
</html>