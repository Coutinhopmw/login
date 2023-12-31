<?php 
require_once 'controler\ControlPanel.php';
    if (isset($_POST ["enter"])) {
        $login = new ControlPanel();
        $cpf = $_POST['CPF'];
        $senha = $_POST['Pass'];
        $login -> login($cpf, $senha);
    }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="http://localhost:8000/view/css/style.css">
    <title>RU-COINS</title>
</head>

<body>
    <div class="main">
        <div class="main-content">
            <div class="main-container">
                <div class="image">
                    <img src="http://localhost:8000/view/img/brasao_uft.webp"
                        alt="Logo da Universidade Federal do Tocantins">
                </div>
                <div class="main-itens">
                    <form id="form" method="post">
                        <div class="btn-login textfield">
                            <label for="" class="form-label">CPF:</label>
                            <input type="text" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Digite seu CPF" name="CPF">
                        </div>
                        <div class="btn-login textfield">
                            <label for="" class="form-label">Senha:</label>
                            <input type="password" class="form-control" placeholder="Digite sua senha" name="Pass">
                        </div>
                        <input type="submit" id="btn" name="enter" class="btn btn-success" value="Entrar">
                        <input type="submit" id="btn" name="forgotPass" class="btn btn-secondary" value="Esqueci a Senha">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="footer-itens">
            <img src="http://localhost:8000/view/img/brasao_uft.webp" alt="">
            <img src="http://localhost:8000/view/img/logocurso.png" alt="">
        </div>
        Engenharia de software 2023/2
    </footer>
</body>

</html>