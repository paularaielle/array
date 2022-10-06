<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/loja.css"/>
    <title>Categorias</title>
 
</head>
<body>

<h1 ALIGN="CENTER" class="under">Tabela Categorias</h1>
    <?php
    $categorias= array();

    $categorias[]=array(
        'cosmeticos'=> "Batom",
        'roupas'=> "Vestido",
        'sapatos'=>"Tênis",
        'joias'=>"Brinco",
        'eletronicos'=>"Celular",
    );
    $categorias[]=array(
        'cosmeticos'=> "Pó compacto",
        'roupas'=> "Blusa Masculina",
        'sapatos'=>"Sandalia Feminina",
        'joias'=>"Cordão Feminino",
        'eletronicos'=>"Fone de ouvido",
    );
    $categorias[]=array(
        'cosmeticos'=> "Blush",
        'roupas'=> "Blusa feminina",
        'sapatos'=>"Sandalia Masculina",
        'joias'=>"Cordão masculino",
        'eletronicos'=>"Caixa de Som",
    );
    $categorias[]=array(
        'cosmeticos'=> "Base",
        'roupas'=> "Calça Jeans",
        'sapatos'=>"Sapatilha",
        'joias'=>"Pulseira",
        'eletronicos'=>"Mouse sem fio",
    );

    $categorias[]=array(
        'cosmeticos'=> "Perfume",
        'roupas'=> "Blazer",
        'sapatos'=>"Salto Alto",
        'joias'=>"Chocker",
        'eletronicos'=>"Teclado sem fio",
    );
    


     /* foreach($categorias as $cat){
        echo $cat."<br/>";
        
    }*/
    ?>

    <table class="tabela" border="1" ALIGN="CENTER">
        <tr>
            <th>Cosméticos</th>
            <th>Roupas</th>
            <th>Sapatos</th>
            <th>Jóias</th>
            <th>Eletrônicos</th>
        </tr>

        <?php
        foreach($categorias as $cat){
        ?>
        <tr>
            <td ALIGN="CENTER"><?php echo $cat['cosmeticos']; ?> </td>
            <td ALIGN="CENTER"><?php echo $cat['roupas']; ?></td>
            <td ALIGN="CENTER"><?php echo $cat['sapatos']; ?></td>
            <td ALIGN="CENTER"><?php echo $cat['joias']; ?></td>
            <td ALIGN="CENTER"><?php echo $cat['eletronicos']; ?></td>
        </tr>
        <?php } ?>
    </table>

</body>
</html>