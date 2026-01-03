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
        .form{
            margin-top: 100px;
            width: 450px;
            padding: 60px 60px;
        }
    </style>
<body>
    <div class="container d-flex justify-content-center">
        <div class="form shadow">
            <h3>List User</h3>
            <form method="POST">
                <div class="form-group my-3">
                    <input type="text" name="username" class="form-control" id="username" placeholder="Enter name">
                </div>
                <div class="form-group my-3">
                    <input type="text" name="gender" id="" class="form-control" placeholder="Enter Gender">
                    <!-- <select name="gender" id="gender" class="form-control">
                        <option value="" disabled selected>Select Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                    </select> -->
                </div>
                <div class="form-group my-3">
                    <input type="email" name="email" class="form-control" id="email" placeholder="Enter email">
                </div>
                <div class="form-group my-3">
                    <input type="password" name="password" class="form-control" id="password" placeholder="Enter password">
                </div>
                <div class="my-3">
                    <button type="submit" name="submit" class="btn btn-primary"> Save </button>
                </div>
            </form>
            <table class="table">
                <thead>
                    <tr>
                        <th>username</th>
                        <th>gender</th>
                        <th>email</th>
                        <th>password</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        if(isset($_POST['submit'])){
                            $username = $_POST['username'];
                            $gender = $_POST['gender'];
                            $email = $_POST['email'];
                            $password = $_POST['password'];
                            echo '
                                <tr>
                                    <td>'.$username.'</td>
                                    <td>'.$gender.'</td>
                                    <td>'.$email.'</td>
                                    <td>'.$password.'</td>
                                </tr>
                            ';
                        }

                ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
