

<!-- Non return function -->
<!-- 1.Non reuturn with parameter -->
<!-- 2.Non return non paramater -->

<?php
    //function non parameter
    function Sum(){
        $x = 10;
        $y = 10;
        $sum = $x + $y;
        echo $sum;
    }

    echo Sum();
    //echo Sum()+10; // is not calculate
    //Function with parameter
    function Sub($a,$b){
        $sub = $a - $b;
        echo $sub;
    }

    // echo Sub(10,20);
    echo "<br>";
    echo Sub(10,20)+10;//Can't calculate
?>

<!-- Return Function -->
<!-- 1.Reutrn function non paratemer -->
<!-- 2.Return Function with parameter -->

<?php
    //return non parameter
    function Mul(){
        $x = 100;
        $y = 100;
        $mul = $x * $y;
        return $mul;
    }
    echo Mul();
    echo "<br>"; //defual data
    echo Mul()-5000; //can calculate
    echo "<br>";
    echo Mul();

    //return function with parameter
    function Sum1($b,$c){
        $sum = $b + $c;
        return $sum;
    }
    echo "<br>";    
    echo Sum1(500,1000);
    echo "<br>";
    echo "Calculate b + C:".Sum1(10,10)*10;

?>
