
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
</head>
<body>
<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">
<form  action ="./datos.php" method="POST">
            <div class="mb-md-5 mt-md-4 pb-5">

              <h2 class="fw-bold mb-2 text-uppercase">Register</h2>
         
              <div class="form-outline form-white mb-4">
              <label class="form-label" for="mote">Mote o "Nick"</label>
                <input name = "mote" type="text"  class="form-control form-control-lg" id = "mote" required value="" />
             
              </div>

              <div class="form-outline form-white mb-4">
              <label class="form-label" for="email">Email</label>
                <input name = "email" type="email" class="form-control form-control-lg" id = "email" required value=""/>
               
              </div>

              <div class="form-outline form-white mb-4">
              <label class="form-label" for="password">Password</label>
                <input name = "password" type="password"  class="form-control form-control-lg" id = "password" required value=""/>
            
              </div>

              <div class="form-outline form-white mb-4">
              <label class="form-label" for="nombre">Nombre</label>
                <input name = "nombre" type="text"  class="form-control form-control-lg" id = "nombre" required value=""/>
        
              </div>

              <div class="form-outline form-white mb-4">
              <label class="form-label" for="apellidos">Apellidos</label>
                <input name = "apellidos" type="text"  class="form-control form-control-lg" id = "apellidos" required value=""/>
   
              </div>

    

              <button class="btn btn-outline-light btn-lg px-5" value = 1 type = "submit" name= "register">Registrarse</button>
              
</form>
<br>

              <div class="d-flex justify-content-center text-center mt-4 pt-1">
                <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
              </div>

            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>