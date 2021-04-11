<table style="border: 1px solid #ddd; border-collapse: collapse; width: 100%;">
    <thead>
    <tr style="background: #f9f9f9;">
        <th style="padding: 8px; border: 1px solid #ddd;">Наименование</th>
        <th style="padding: 8px; border: 1px solid #ddd;">Кол-во</th>
        <th style="padding: 8px; border: 1px solid #ddd;">Цена</th>
        <th style="padding: 8px; border: 1px solid #ddd;">Сумма</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach($_SESSION['cart'] as $item):?>
    <tr>
        <td style="padding: 8px; border 1px solid #ddd;"><?=$item['title'];?></td>
        <td style="padding: 8px; border 1px solid #ddd;"><?=$item['qty'];?></td>
        <td style="padding: 8px; border 1px solid #ddd;"><?=$item['price'];?></td>
        <td style="padding: 8px; border 1px solid #ddd;"><?=$item['price'] * $item['qty'];?></td>
    </tr>
    <?php endforeach; ?>
    <tr>
         <td colspan="3" style="padding: 8px; border: 1px solid #ddd;">Итого:</td>
        <td colspan="3" style="padding: 8px; border: 1px solid #ddd;"><?=$_SESSION['cart.qty'];?></td>
    </tr>
    <tr>
        <td colspan="3" style="padding: 8px; border: 1px solid #ddd;">На сумму:</td>
        <td colspan="3" style="padding: 8px; border: 1px solid #ddd;"><?=$_SESSION['cart.currency']['symbol_left'] . $_SESSION['cart.sum'] . "{$_SESSION['cart.currency']['symbol_right']}";?></td>
    </tr>
    </tbody>
</table>
