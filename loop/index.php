

<!-- Fop loop -->
<!-- we use for loop when we know about time -->
 <!-- syntax:
 for(start,stop,step){
    statement
 }
 or
 start;
 for(;stop;){
    step;
 } -->

<!-- <?php
    for($i=0 ; $i<=100; $i+=10){ //i++ = i = i+1 ,, i = i+10;
        echo "Hello Crush 💖 --> " .$i."<br>";
    }
    echo "<br><<============>><br>";
    for($i=100; $i>=0; $i-=10){
        echo "Welcome to Etec ".$i."<br>";
    }
?> -->

<!-- while loop -->
<!-- we use while loop when we don't know about time  -->
 <!-- syntax :
 start;
 while(stop){
    statement;
    step;
 } -->

 <?php
    // echo "<br><<===================>><br>";
    // $i = 100;
    // while($i>=10){
    //     echo "Don't Thai to me !"."<br>";
    //     $i++;
    // }
 ?>

<!-- do while loop -->
 <!-- syntax : 
 
    start;
 do{
    statement
    step;
 }while(stop) -->

 <?php
    // echo "<==========><br>";
    // $j=10;
    // do{
    //     echo "My name id Hour<br>";
    //     $j++;
    // }while($j>15);
 ?>


<!-- foreach loop -->
<!-- we use foreach to loop data is array  -->
 <!-- syntax :
 foreach(collection as item){
    statement
 } -->

 <?php
    echo "<br>";
    $arr = [
        'id' => '1',
        'name' => 'Sombath',
        'gender' => 'male',
        'address' => 'pp',
    ];
    foreach($arr as $value){
        echo $value."<br>";
    } 

 ?>