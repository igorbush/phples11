<!DOCTYPE html>
<html lang="en">
<head>
    <title>Корзина</title>
    <meta charset="utf-8">
</head>
<body style="width: 700px; margin: 100px auto;">
  <form  action='cart.php' method='POST'>
    <table border="1px">
            <tr class="danger">
                <th>Товар</th>
                <th>Количество</th>
                <th>Изменить количество</th>
                <th>Конечная Цена</th>
                <th>Удалить</th>
            </tr>
        <?php  
        foreach ($myCart->productList as $key => $value) 
        {
        	echo "<tr><td>" . $value->getInfoProduct() . "</td><td>" . $myCart->productNumber[$key] . "</td>";
            echo '<td><input type="number" name="number['. $key . ']" min="1" value="" placeholder="Количество"></td>';
            echo "<td>" . $value->getTotalPrice()*$myCart->productNumber[$key]. "</td>";
            echo '<td><input type="checkbox" name="id['. $key . ']" value=' . $key . '></td></tr>';
        }
        $_SESSION['myCart'] = serialize($myCart);
        ?>
    </table>
    <input type="submit" name="submitCart" value="Пересчитать">
    <input type="submit" name="submitOrder" value="Оформить заказ">
</form>
</body>
</html>