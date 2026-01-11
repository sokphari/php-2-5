<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body class="container">
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>USERNAME</th>
                <th>GENDER</th>
                <th>EMAIL</th>
                <th>PASSWORD</th>
                <th>ACTION</th>
            </tr>
        </thead>
        <tbody>
            <?php
            
                include('config.php');
                try{
    
                $sql = "SELECT * FROM `tb_customer` limit 2";

                $result = $config->query($sql);
                if(!$result){
                    echo "Select Data Not Found ";
                }else{
                    while($row = mysqli_fetch_assoc($result)){
                            echo '
                                <tr>
                                <td>'.$row['cus_id'].'</td>
                                <td>'.$row['username'].'</td>
                                <td>'.$row['gender'].'</td>
                                <td>'.$row['email'].'</td>
                                <td>'.$row['password'].'</td>
                                <td>
                                    <a href="delete.php?cus_id='.$row['cus_id'].'"​ class="btn btn-warning">Delete</a>
                                    <a href="edit.php?cus_id='.$row['cus_id'].'"​ class="btn btn-primary">Edit</a>
                                </td>
                                </tr>

                                    ';
                    } 
                }
            
                }catch(Exception $e){
                    echo "Data Not Found 404 ".$e->getMessage();
                }
            
            ?>
            
        </tbody>
    </table>
</body>
</html>
