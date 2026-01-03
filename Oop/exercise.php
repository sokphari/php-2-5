
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="shortcut icon" href="assets/etec.png" type="image/x-icon">
  <title>ETEC SYS</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

  <link rel="stylesheet" href="assets/css/style.css">

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
</head><!-- head  -->

<body class="bg-light d-flex align-items-center justify-content-center vh-100 font-custom">

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-5">
        <div class="border rounded-3 p-4 bg-white">
          
          <center>
            <img src="https://i.pinimg.com/736x/91/9f/f6/919ff6884656df89f87a5012a23105d8.jpg" alt="" style="border-radius: 50%;" width="90px" height="90px" class="mb-2 rounded">
          </center>  

          <h3 class="mb-1 text-center">Welcome Back</h3>
          <p class="text-muted text-center small mb-4">Login to continue</p>

          <form id="loginForm">

            <div id="loginMessage" class="text-center mb-2 small"></div>
            <div class="mb-3">
              <input type="email" class="form-control shadow-none border" id="email" name="name" placeholder="Enter Name" required>
            </div>
            <div id="loginMessage" class="text-center mb-2 small"></div>
            <div class="mb-3">
              <input type="email" class="form-control shadow-none border" id="email" name="gender" placeholder="Enter Gender" required>
            </div>
            <div id="loginMessage" class="text-center mb-2 small"></div>
            <div class="mb-3">
              <input type="email" class="form-control shadow-none border" id="email" name="email" placeholder="example@mail.com" required>
            </div>

            <div class="mb-3 position-relative">
                <div class="input-group border rounded">
                    <input type="password" class="form-control shadow-none border-0" id="password" name="password" placeholder="Enter password" required>
                    <button class="btn border-0" type="button" id="togglePassword">
                        <i class="bi bi-eye"></i>
                    </button>
                </div>
            </div>

            

            <div class="d-grid">
              <button type="submit" id="btnLogin" class="bg-etec-color border py-2 text-light rounded" style="background-color: blue;" >Login</button>
            </div>
          </form>


          <p class="text-center mt-3 mb-0 small">
            Don’t have an account? <a href="register.php" class="text-decoration-none">Register</a>
          </p>
        </div>
      </div>
    </div>
  </div>

  
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Gender</th>
            <th>Emil</th>
            <th>Password</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
        </tr>
    </tbody>
  </table>

</body>
</html>
include("simpleExercie");
if(){
    $name = $post['name']
    $gender =
}