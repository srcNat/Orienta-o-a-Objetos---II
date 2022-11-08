<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Perfil-content</title>
</head>
<body>
    <main>
        <?php
            require_once 'users.php';
            require_once 'class/post.php';
            require_once 'class/session.php';
            
            $session = new Session();
            $post = new Post();

            $title = $_POST['title'];
            $content = $_POST['content'];
            $author = $_POST['author'];

            if ($session->get('email') != '') {
                foreach ($_users as $user => $data) {
                    if ($session->get('email') == $data['email'] && $session->get('pass') == $data['pass']) {
       

            if ($title == '' || $content == '' || $author == '') {
                echo "<h1>Preencha todos os campos! </h1>";
                echo "<a href='form.php'>Voltar</a>";
            } else {
                
        ?>
        <section>
        <p class="center"><img src="<?=$data['img']?>"></p>
        <p>Nome: <?= $data['name'] ?> </p>
        <p>E-mail: <?= $data['email'] ?> </p>
        <p>CPF: <?= $data['cpf'] ?> </p>
        <hr>
        </section>
        
        <div class="areatitle">
            <h1 class="title"> <?= $title ?> </h1>
        </div>

        <section>
            <textarea name="" id="" cols="20" rows="10"class="areatexto"> <?= $content ?> </textarea>
            <p class="direita"> <?= $author ?> </p>
        </section>

        <?php 
    
            break;
        }    
            }}} ?>
    </main>
</body>
</html>