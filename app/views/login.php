<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get in</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
   <link rel="stylesheet" href="app\resources\css\login\login.css">
</head>
<body>
<div class="container">
        <div class="row justify-content-center m-0">
          <div>
            <div class="card">
              <div class="card-body p-sm-4">
                <div class="img_content text-center mb-5">
                    <img src="app\resources\assets\ESCUDO_LOGO_DSG_SIN_BORDES.png" alt="png" width="150px">
                </div>
                <form method="POST" action="index.php?function=authenticate">
                  <div class="form-group"><input class="form-control" type="text" placeholder="Email address" name="txt_username"/></div>
                  <div class="form-group"><input class="form-control" type="password" placeholder="Password" name="password"/></div>
                  <div class="row justify-content-between align-items-center">
                    <div class="col-auto">
                      <div class="custom-control custom-checkbox"><input class="custom-control-input" type="checkbox" id="basic-checkbox" checked="checked" /><label class="custom-control-label" for="basic-checkbox">Remember me</label></div>
                    </div>
                    <div class="col-auto"><a class="fs--1" href="../../authentication/basic/forgot-password.html">Forgot Password?</a></div>
                  </div>
                  <div class="form-group"><button class="btn btn-primary btn-block mt-3" type="submit" name="submit">Log in</button></div>
                </form>
                <div class="w-100 position-relative mt-4">
                  <hr class="text-300" />
                  
                </div>
                
              </div>
            </div>
          </div>
        </div>
      </div>
</body>
</html>