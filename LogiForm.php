<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script defer src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Login Here</title>
</head>
<body class="bg-black d-flex align-content-center justify-content-center">
    <div class="col-md-2">

    </div>
    <div class="col-md-8 col-lg-8">
    <div class="bg-warning loginform p-5 bg-black">
        <div class="col-md-8 col-lg-8 mt-5 justify-content-center mb-5">
            <h4 class="text-center fontsec text-white"> Login Here <i class="fa-solid fa-right-from-bracket"></i></h4>
            <div class="mt-3 container justify-content-center align-items-center">
                  <form action="login.php" method="POST">
                      <div class="mb-3">
                          <input type="text" name="email" class="form-control fontsec" placeholder="example@gmail.com" required>
                      </div>
                      <div class="mb-3">
                          <input type="password" name="password" class="form-control fontsec" placeholder="Admin@123" required>
                      </div>
                      
                      <button class="btn btn-warning w-100"  type="submit"><span class="txtmain">Login</span> <i class="fa-solid fa-arrow-right"></i></button>
                  </form>
              </div>
        </div>
        <div class="col-md-2">

        </div>
    </div>
    </div>
</body>
</html>
