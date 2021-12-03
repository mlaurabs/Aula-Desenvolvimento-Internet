

<style>
    th{
        background-color: #f4fa8c;
        font-size: 25px;
    }
    td{
        background-color: #e0d8d7;
        font-size: 20px;
    }
</style>

<table border="3" width="100%" >
    <?php

    $linha = 1;

    $arquivo = fopen("dados_forms.csv", "r");

    if ($arquivo != FALSE){

        $dados = fgetcsv($arquivo, 1000, ",");
            echo "<tr>";
            echo "<th>N°:</th>";
            echo "<th>Firma:</th>";
            echo "<th>CNPJ:</th>";
            echo "<th>Inscrição:</th>";
            echo "<th>Endereço:</th>";
            echo "<th>Bairro:</th>";
            echo "<th>Complemento:</th>";
            echo "<th>CEP:</th>";
            echo "<th>Email:</th>";
            echo "<th>Data:</th>";
            echo "<th>UF:</th>";
            echo "<th>Telefone:</th>";
            echo "<th>Celular:</th>";
            echo "</tr>";
        
            while ($dados != FALSE){
           
            echo "<tr>";
            foreach($dados as $valor){
                
                echo "<td>$valor</td>";
                
            }
            echo "</tr>";
            $dados = fgetcsv($arquivo, 1000, ",");
            $linha++;
        }
        fclose($arquivo);


    }

  

    ?> 
</table>

