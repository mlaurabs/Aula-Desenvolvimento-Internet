
<html>
    <form action="save_data.php" method="post">
    <head> 
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width", initial-scale="1">
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="generator" content="Hugo 0.88.1">
        <title>Mine Horta Vale Verde</title>

    
        <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/album-rtl/">
    
    <style>
        .title{
            font-size: 40px;
            font-family: Georgia ;
            color: black;
        }
        label{
            font-size: 20px;
            font-family: Georgia ;
        }
        .invi{
            color: transparent;
        }
        body{
            background-color: #d6aef5;
        }
    </style>
    </head>

    <body>

        <div class="container">
          <br>
          <br>
          <br>  
        
         
              <div class="row">
                  <div class="col"><span class="title">Mine Horta Vale Verde</span></div>
              </div>
              <p class="fst-italic" class="fw-lighter">Preencha os campos abaixo com seus dados</p>
              <br>
              <br>
              <div class="row g-3">
                  <div class="col">
                    <label for="n" class="form-label">N°:</label>
                    <input type="text" id ="n" name="n" class="form-control">
                  </div>
                    <div class="col">
                        <label for="firma_input" class="form-label">Firma:</label>
                        <input type="text" id ="firma" name="firma" placeholder="" class="form-control">
                    </div>
                    <div class="col">
                        <label for="cnpj" class="form-label">CNPJ:</label>
                        <input type="text" name="cnpj" placeholder="61.472.123/0091-78" class="form-control" id="cnpj">
                    </div>
                </div>

            <div class="row g-3">
                <div class="col">
                    <label for="incricao"  class="form-label">Inscrição:</label>
                    <input type="text" name="incricao" placeholder="71352610-29" class="form-control" id="incricao"> 
                </div>
                <div class="col">
                    <label for="data"  class="form-label">Data:</label>
                    <input type="date" name="data"  class="form-control" id="data">
                </div>
            </div>
           
            <div class="row g-3">
                <div class="col">
                    <label for="endereco" class="form-label">Endereço:</label>
                    <input type="text" name="endereco" placeholder="Rua General Canabarro, 485" class="form-control" id="endereco">
                </div>
              
                <div class="col">
                    <label for="complemento" class="form-label">Complemento:</label>
                    <input type="text" name="complemento" placeholder="Casa 6" class="form-control" id="cep">
                </div>
            </div>

            <div class="row g-3">
                <div class="col">
                    <label for="bairro" class="form-label">Bairro:</label>
                    <input type="text" name="bairro" placeholder="Tijuca"class="form-control" id="bairro">
                </div> 
                <div class="col">
                    <label for="uf" class="form-label">UF:</label>
                    <input type="text" name="uf" placeholder="RJ" class="form-control" id="uf">
                </div> 
            </div>

            <div class="row g-3">
                <div class="col">
                    <label for="cep" class="form-label">CEP:</label>
                    <input type="text" name="cep" placeholder="13165-140" class="form-control" id="cep">
                </div>
    
                <div class="col">
                    <label for="tel"class="form-label">Telefone:</label>
                    <input type="text" name="tel" placeholder="(21)991523087" class="form-control" id="tel">
                </div>
            </div>

            <div class="row g-3">
                    <div class="col">
                        <label for="email" class="form-label">Email:</label>
                        <input type="text" name="email" class="form-control" placeholder="nome@gmail.com" id="cel">
                    </div>
                     <div class="col">
                        <label for="cel" class="form-label">Celular:</label>
                        <input type="text" name="cel" placeholder="(21)991523087" class="form-control" id="cel">
                    </div>
            </div> 
                <p><span class="invi">-----------------------------------------------------------------------------------------------------------------------------------
                    ------------------------------------------------------------------------------------------------------------------------------------------------------
                </span></p>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary"name="enviar">Enviar</button>
              </div>
         
            </div>        
        
    
             

               

                
               
            </div>
            </div>
           
       
        </div>
        

    </body> 
    </form>
</html>