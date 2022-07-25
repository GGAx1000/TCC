<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anamnese</title>
    <link rel="stylesheet" href="style.css">
    <style>
        input{
            width: 100%;
        }
    </style>
</head>
<body>

    <main>
        <nav id="menu-h">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Sobre</a></li>
                <li><a href="#">Quem somos</a></li>
                <li><a href="#">Contato</a></li>
                <li><a href="#">Entrar</a></li>

            </ul>
        </nav>
        <div class="container1" style="width: 100%; height:75%;">
            
            <div style="width: 65%; text-align: center;">
                <h1 class="heading1" style="text-indent: 2em; text-align: left;">Anamnese</h1>
                <form method="post" action="processa.php">

                    <p class="recuo" style="text-align: left;">Patologias:</p>
                    <input type="text" name="Patologias" maxlength="255" autofocus>

                    <p class="recuo" style="text-align: left;">Sintomas:</p>
                    <input type="text" name="Sintomas" maxlength="255" autofocus>

                    <p class="recuo" style="text-align: left;">Atividades físicas:</p>
                    <input type="text" name="AtividadesFisicas" maxlength="255" autofocus>
                    
                    <p class="recuo" style="text-align: left;">Medicação:</p>
                    <input type="text" name="Medicacao" maxlength="255" autofocus>
                    <p></p>
                    <br>
                    <input type="submit" value="Salvar" style="height:5vh; width: 60vh">
                    <input type="reset" value="limpar" style="height:5vh; width: 60vh">
                </form>
            </div>
        </div>
    </main>

</body>
</html>