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
        width: 900px;
    }
</style>
<body>
    <?php
        $id = "001";
        $name = "Nafi";
        $price = 89.99;
        
        $idd = "002";
        $namem = "Sambath";
        $pricee = 99.99;

        $iddd = "003";
        $namemm = "Visal";
        $priceee = 79.99;

        $idddd = "004";
        $namemmm = "SoengHour";
        $priceeee = 69.99;
    ?>
    <div class="container pt-5 mt-5">
        <table class="table table-striped align-middle pt-5">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>Price</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $id?></td>
                    <td><?php echo $name?></td>
                    <td><?php echo $price?></td>
                    <td><img width="80px" height="80px" style="border-radius: 50%;" src="https://i.pinimg.com/1200x/2d/cf/32/2dcf32ba30e773796b72d10978a27296.jpg" alt=""></td>
                    <td>
                        <a href="" class="btn btn-warning">Edit</a>
                        <a href="" class="btn btn-primary">Delete</a>
                    </td>
                </tr>
                <tr>
                    <td><?php echo $idd?></td>
                    <td><?php echo $namem?></td>
                    <td><?php echo $pricee?></td>
                    <td><img width="80px" height="80px" style="border-radius: 50%;" src="https://i.pinimg.com/736x/af/02/b6/af02b694ce14357b120ccd3f7f9c2de0.jpg" alt=""></td>
                    <td>
                        <a href="" class="btn btn-warning">Edit</a>
                        <a href="" class="btn btn-primary">Delete</a>
                    </td>
                </tr>
                <tr>
                    <td><?php echo $iddd?></td>
                    <td><?php echo $namemm?></td>
                    <td><?php echo $priceee?></td>
                    <td><img width="80px" height="80px" style="border-radius: 50%;" src="https://i.pinimg.com/1200x/08/94/ce/0894ceea048bec43c5eecc992312db36.jpg" alt=""></td>
                    <td>
                        <a href="" class="btn btn-warning">Edit</a>
                        <a href="" class="btn btn-primary">Delete</a>
                    </td>
                </tr>
                <tr>
                    <td><?php echo $idddd?></td>
                    <td><?php echo $namemmm?></td>
                    <td><?php echo $priceeee?></td>
                    <td><img width="80px" height="80px" style="border-radius: 50%;" src="https://i.pinimg.com/736x/20/14/3c/20143c0c0ed90dd09ed91beed43120c8.jpg" alt=""></td>
                    <td>
                        <a href="" class="btn btn-warning">Edit</a>
                        <a href="" class="btn btn-primary">Delete</a>
                    </td>
                </tr>
               
            </tbody>
        </table>
    </div>
</body>
</html>