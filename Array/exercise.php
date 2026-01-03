<?php
//Exercise with array2D
// 1.name product Asus , Price = 499 , Qty = 2;
// 2.name product Lenovo , Price = 599 , Qty = 1;
// 3.name product Msi , Price = 699 , Qty = 3;

        // Display in table
    // |-----------------------|
    // |  Asus  |  499   |  2  |
    // |  Lenovo|  599   |  1  |
    // |  Msi   |  699   |  3  |
    // |     Total : ...... ?  |
    // |---------------------- |
    $array2D = [
        ['name'=>'Asus','price'=>'499','qty'=>'2'],
        ['name'=>'Lenovo','price'=>'599','qty'=>'1'],
        ['name'=>'Msi','price'=>'600','qty'=>'3']
    ];
    
    $totalGrad = 0;
?>

    <table>
        <tr>
            <th>Name</th>
            <th>Price</th>
            <th>Qty</th>
            <th>Total</th>
            <th>TotalGrade</th>
        </tr>
        <?php foreach($array2D as $item): ?>
            <?php
                    $total = $item['price']*$item['qty'];
                    $totalGrad += $total; // $totalGrad = $totalGrade(old) + $total;
            ?>

            <tr>
                <td><?= $item['name']; ?></td>
                <td><?= $item['price']; ?></td>
                <td><?= $item['qty']; ?></td>
                <td><?= $total; ?></td>
                
            

        <?php endforeach; ?>
            <td><?=  $totalGrad ?></td>
        </tr>
    </table>

    
    
            