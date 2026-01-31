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
    .container {
        margin-top: 150px;
    }

    .form {
        height: 450px;
        width: 600px;
        padding: 50px 80px 0px 80px;
        border-radius: 20px;
        background-color: pink;
    }
</style>

<body>
    <div class="container d-flex justify-content-center">
        <div class="form shadow">
            <h3 class="text-center">Register</h3>
            <form action="../controller/AuthController.php" method="post">
                <div class="form-group my-3">
                    <input class="form-control py-2" type="text" name="name" id="" placeholder="Enter FullName">
                </div>
                <div class="form-group my-3">
                    <select class="form-control py-2" name="gender" id="">
                        <option value="" disabled selected>Select Gender</option>
                        <option value="male">male</option>
                        <option value="female">female</option>
                    </select>
                </div>
                <div class="form-group my-3">
                    <input class="form-control py-2" type="email" name="email" id="" placeholder="Enter Email">
                </div>
                <div class="form-group my-3">
                    <input class="form-control py-2" type="password" name="password" id="" placeholder="*******************">
                </div>
                <div class="d-flex justify-content-center">
                    <button type="submit" name="register" class="btn btn-primary">Register</button>

                </div>
            </form>
        </div>
    </div>
</body>

</html>