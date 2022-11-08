<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Perfil-action</title>
</head>
<body>
    <?php
        require_once 'users.php';
        require_once 'class/get.php';
        require_once 'class/session.php';
        
        $session = new Session();
        $get = new Get();
        
        if ($session->get('email') != '') {
            foreach ($_users as $user => $data) {
                if ($session->get('email') == $data['email'] && $session->get('pass') == $data['pass']) {
                     
    ?>
    
    <section>
        <p class="center"><img src="<?=$data['img']?>"></p>
        <p>Nome: <?= $data['name'] ?> </p>
        <p>E-mail: <?= $data['email'] ?> </p>
        <p>CPF: <?= $data['cpf'] ?> </p>
        <hr>
        <form method="post" action="content.php">
            <label>Título:</label>
            <input type="text" name="title" placeholder="Digite um título"><br>
            
            <label>Conteúdo:</label><br>
            <textarea name="content" placeholder="Digite o conteúdo" cols="40" rows="20"></textarea><br>
            
            <label>Autor:</label>
            <input type="text" name="author" placeholder="Digite o nome do autor"><br>
            
            <input type="submit" value="Postar">
        </form>
    </section>
    
    <?php
                break;
                }
            }

        }  else {
            echo "<h1>Faça login para poder acessar essa página.</h1>";
            echo 'Faça <a href="index.html">Login</a>';
       
            } ?>
</body>
</html>