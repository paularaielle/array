<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/loja.css"/>
    <title>Produtos</title>
</head>
<body>
<h1 ALIGN="CENTER" class="under">Tabela Produtos</h1>
<?php
    $produtos= array();


    $produtos[]=array(
        'produto'=>"Batom",
        'estoque'=>35,
        'valor_f'=>"R$10,00",
        'valor_v'=>"20,00",
        'fornecedor'=> "Natura");

    $produtos[]=array(
        'produto'=>"Vestido",
        'estoque'=>20,
        'valor_f'=>"R$45,00",
        'valor_v'=>"85,00",
        'fornecedor'=> "Sonia Abraão");

    $produtos[]=array(
        'produto'=>"Tênis",
        'estoque'=>15,
        'valor_f'=>"R$50,00",
        'valor_v'=>"100,00",
        'fornecedor'=> "Apolo Shoes");

    $produtos[]=array(
        'produto'=>"Brinco",
        'estoque'=>50,
        'valor_f'=>"R$25,00",
        'valor_v'=>"50,00",
        'fornecedor'=> "Biju Afrodite");  
    $produtos[]=array(
        'produto'=>"Celular",
        'estoque'=>6,
        'valor_f'=>"R$500,00",
        'valor_v'=>"1000,00",
        'fornecedor'=> "Neto Tecnologia");  


         /* foreach($produtos as $pro){
        echo $pro."<br/>";
        
    }*/
    ?>

    <table class="tabela" border="1" ALIGN="CENTER">
        <tr>
            <th>Produto</th>
            <th>Estoque</th>
            <th>Valor de fábrica</th>
            <th>Valor de venda</th>
            <th>Fornecedor</th>
        </tr>

        <?php
        foreach($produtos as $pro){
        ?>
        <tr>
            <td ALIGN="CENTER"><?php echo $pro['produto']; ?> </td>
            <td ALIGN="CENTER"><?php echo $pro['estoque']; ?></td>
            <td ALIGN="CENTER"><?php echo $pro['valor_f']; ?></td>
            <td ALIGN="CENTER"><?php echo $pro['valor_v']; ?></td>
            <td ALIGN="CENTER"><?php echo $pro['fornecedor']; ?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>