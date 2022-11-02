<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Horizon TechSystems</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="js/scripts.js"></script>
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"/>


</head>
    <body  style="background-color:grey">
    <style>
        .titulo{
            color:aqua;
            size: 14px;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
        legend{
            color:black;
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
        }
        .loader {
		position: fixed;
		left: 0px;
		top: 0px;
		width: 100%;
		height: 100%;
		z-index: 9999;
		background: url('../../images/logo_autotech2.gif') 50% 50% no-repeat;
        background-size: 750px 600px;
    }
      .rocket {
        display: inline-block;
        margin: 0 0.5rem;

        animation: bounceInUp;
        animation-duration: 6s; 

        }

    </style>

    <div id="loader" class="loader" style=" background-color: black;">
        <div class="inner"></div>
    </div>

    <header>
    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="../../index.php"><img src="../../images/autotech_logo1.png" width="75" height="50"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                <li class="nav-item">
                    <a class="nav-link active" style="color: white" aria-current="page" href="../../index.php">Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " style="color: white" href="add_dados">Adicionar Dados</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " style="color: white" href="get_dados">Gerar Documentos</a>
                </li>
                <li>
                    <a class="nav-link " style="color: white" href="update_dados">Editar Dados</a>
                </li> 
            </ul>
            </div>
        </div>
    </nav>
    </header>
    <div class="container text-center">
        <br>
        <br>
        <div class="row">
            <div class="col-2">
            </div>
            <div class="col-8 bg-dark">
                    <legend class="scheduler-border border-bottom border-light p-1 text-center" style="color:white; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif"><strong> &#9733; Adicionar Dados</strong></legend>                   
                    <div class="p-3">
                        <form method="post" action="add_dados">    
                            <div class="form row">
                                <label for="cliente_empresa_nome" class="col-sm-3 col-form-label text-light text-center"><strong> Empresa</strong></label>
                                    <div class="form-group col-md-6">
                                        <input type="text" required name="cliente_empresa_nome" class="form-control" id="cliente_empresa_nome">
                                    </div>
                            </div>
                            <br>
                            <div class="form row">
                                <label for="presidente_cliente" class="col-sm-3 col-form-label text-light text-center"><strong> Presidente</strong></label>
                                    <div class="form-group col-md-6">
                                        <input type="text" required name="presidente_cliente" class="form-control" id="presidente_cliente">
                                    </div>
                            </div>
                            <br>
                            <div class="form row">
                                <label for="cnpj" class="col-sm-3 col-form-label text-light"><strong> CNPJ</strong></label>
                                    <div class="form-group col-md-6">
                                        <input type="text" required  name="cnpj" class="form-control" id="cnpj" data-mask=" 99.999.999/0001-99">
                                    </div>
                                    <br>
                            </div>
                            <br>
                            <div class="form row">
                                <label for="cpf" class="col-sm-3 col-form-label text-light"><strong> CPF do Presidente</strong></label>
                                    <div class="form-group col-md-6">
                                        <input type="text" required  name="cpf" class="form-control" id="cpf" data-mask=" 999.999.999-01">
                                    </div>
                                    <br>
                            </div>
                            <br>
                            <div class="form row">
                                <label for="endereco_presidente" class="col-sm-3 col-form-label text-light text-center"><strong> Endereço Presidente</strong></label>
                                    <div class="form-group col-md-6">
                                        <input type="text" required  name="endereco_presidente" class="form-control" id="endereco_presidente">
                                    </div>
                                    <br>
                            </div>
                            <br>
                            <div class="form row">
                                <label for="endereco" class="col-sm-3 col-form-label text-light text-center"><strong> Endereço Empresa</strong></label>
                                    <div class="form-group col-md-6">
                                        <input type="text" required  name="endereco" class="form-control" id="endereco">
                                    </div>
                                    <br>
                            </div>
                            <br>
                            <div class="form row">
                                <label for="cep" class="col-sm-3 col-form-label text-light"><strong> CEP</strong></label>
                                    <div class="form-group col-md-6">
                                        <input type="text" required  name="cep" class="form-control" id="cep" data-mask="99999-999">
                                    </div>
                                    <br>
                            </div>
                            <br>
                            <div class="form row">
                                <label for="email" class="col-sm-3 col-form-label text-light"><strong> Email</strong></label>
                                    <div class="form-group col-md-6">
                                        <input type="text" required  name="email" class="form-control" id="email" >
                                    </div>
                                    <br>
                            </div>
                            <br>

                            <br>
                            <div class="row">
                                <div class="col-3"></div>
                                    <div class="col-6 text-center" style="color: white;">
                                        <button type="submit" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;" class="btn btn-light"> Adicionar</button>
                                    </div>
                            </div>
                        </form>
                    </div>
                </div>

            <div class="col-2"></div>

            
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <footer class="footer mt-auto py-3 text-center bg-dark" >
        <div class="container text-center">
		    <legend class="scheduler-border border-bottom border-light p-1"></legend>
            <br>
            <div>
                <p style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif ; font-size: 12px; text-align:center; text-decoration: none; color: white"> 
                Av. Luciano Carneiro, 2365, Vila União, Fortaleza-CE<br>
                Todos os direitos deste Site estão reservados<br>
                 Powered by <i class="fa fa-registered fa-xs"></i> Horizon TechSystems
                </p>
                <a href="#" ><i class="fa fa-instagram" style="color: white; text-decoration: none;"></i></a>
                <a href="#"><i class="fa fa-whatsapp" style="color: white; text-decoration: none;"></i></a>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>


</html>
<script>
    
    $(window).on('load', function () {
    $('#loader').fadeIn('slow');
    $('#loader').delay(1000).fadeOut('slow'); 
    $('body').delay(350).css({'overflow': 'visible'});
})


function pdf() {
        var divContents = $("#text").html();
        var printWindow = window.open('', '', "width="+screen.availWidth+",height="+screen.availHeight);
        printWindow.document.write('<html><head><title>Horizon</title>');
        printWindow.document.write('</head><body >');
        printWindow.document.write("");
        printWindow.document.write('</body></html>');
        printWindow.document.close();
        printWindow.print();
    };
</script>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>