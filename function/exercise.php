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
            margin-top: 100px;
        }
        .form{
            padding: 80px 80px;
            width: 500px;
            height: 500px;
            border-radius: 20px;
        }
    </style>
<body>
    <div class="container d-flex justify-content-center">
        <div class="form shadow">
            <h3 class="text-center">Calculator</h3>
            <form action="" method="post">
                <div class="my-3 form-group">
                    <input type="number" class="form-control" name="num1" id="" placeholder="Enter num1">
                </div>
                <div class="my-3 form-group">
                    <input type="number" class="form-control" name="num2" id="" placeholder="Enter num2">
                </div>
                <button type="submit" class="btn btn-primary" name="operator" value="+">+</button>
                <button type="submit" class="btn btn-danger" name="operator" value="-">-</button>
                <button type="submit" class="btn btn-warning" name="operator" value="*">*</button>
                <button type="submit" class="btn btn-secondary" name="operator" value="/">/</button>
                <button type="submit" class="btn btn-dark" name="operator" value="%">%</button>
            </form>
        <?php
            function calculate($num1,$num2,$operator){
                        switch($operator){
                            case '+':{

                                return $num1 + $num2;

                                break;
                            }
                            case '-':{

                                return $num1 - $num2;

                                break;
                            }
                            case '*':{

                                return $num1 * $num2;
        
                                break;
                            }
                            case '/':{

                                if($num2!=0){ 
                                    
                                    return $num1/$num2;
                                
                                }else{

                                    return "Can't vidition num2/ num1";

                                }
                                break;
                            }
                            case '%':{

                                if($num2!=0){ 
                                    
                                    return $num1%$num2;
                                
                                }else{

                                    return "Can't vidition num2%num1";

                                }

                                break;
                            }
                        }
                    }



            if(isset($_POST['operator'])){
                $num1 = $_POST['num1'];
                $num2 = $_POST['num2'];
                $operator = $_POST['operator'];
               
                $result = calculate($num1,$num1,$operator);

            }
        ?> 
         
         <h3 class="my-3">Result : <?php if(isset($result)) echo $result ?></h3>
        </div>



    </div>
</body>
</html>