<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- style bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous"> 
</head>
    <style>
        .container{
            display: flex;
            justify-content: center;
        }
        .form{
            background-color: rgb(150,166,225);
            border-radius: 15px;
            margin: 80px 0px 0px 0px;
            width: 400px;
            padding: 0px 20px 10px 20px;
            height: 350px;
            display: flex;
            justify-content: center;
            box-shadow: 1px 1px 3px black;
        }
        form{
            width: 350px;
            height: 350px;
            margin-top: 50px;
            padding: 0px 20px 0px 20px;
        }
    </style>
<body>
    <div class="container">
        <div class="form">
            <form action="authcontroller.php" method="post">
                <h3 class="text-center">Login</h3>
                <div class="form-group my-3">
                    <input class="form-control rounded-0" placeholder="enter email" type="email" name="email" id="email">
                </div>
                <div class="form-group my-3">
                    <input class="form-control rounded-0" placeholder="enter password" type="password" name="password" id="password">
                </div>
                <p class="text-center"> Don't have an account ? <a href="register.php">register</a> </p>
                <div class="d-flex justify-content-center">
                    <button type="submit" name="login" class="btn btn-primary rounded-0">Login</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>