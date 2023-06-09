<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Controle de vendas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="../style/main.css">
    <link href="//cdn.syncfusion.com/ej2/bootstrap5.css" rel="stylesheet" />

</head>


<body class="body">
    <?php
    require_once('../config/conectaLocal.php');
    ?>

    <header>
        <div>
            <?php include '../public/sideBar.php'; ?>
        </div>
    </header>


    <div class="divForm">
        <form class="form" action="../include/insertVendas.php" method="post">
            <div class="formulario">
                <div class="mb-3">
                    <label class="form-label">Nome do produto:</label>
                    <input type="text" class="form-control" name="nomeProd">
                </div>
                <div class="mb-3">
                    <label class="form-label">Tecido:</label>
                    <input class="form-control" name="tecido">
                </div>
                <div class="mb-3">
                    <label class="form-label">Cor:</label>
                    <input class="form-control" name="cor">
                </div>
                <div class="mb-3">
                    <label class="form-label">Tamanho:</label>
                    <input class="form-control" name="tamanho">
                </div>
                <div class="mb-3">
                    <label class="form-label">Data da Venda:</label>
                    <input class="form-control" type="date" name="data" id="datepicker">
                    
                </div>
                <div class="mb-3">
                    <label class="form-label">Forma de Pagamento:</label>
                    <select class="form-control" name="modoPag">
                        <option value="">** Selecione **</option>
                        <option value="PIX">PIX</option>
                        <option value="Cartão de Crédito">Cartão de Crédito</option>
                        <option value="Cartão de Débito">Cartão de Débito</option>
                    </select>
                </div>
                <div id="botoes">
                    <A href="./tabela.php" style="text-decoration:none">
                        <button type="button" class="btn botao" >Consultar Vendas</button>
                    </A>

                    <button type="submit" class="btn botao" >Salvar</button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>