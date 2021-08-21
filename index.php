<!DOCTYPE html>
<html lang="fr">
<head>
        <meta charset="UTF-8">
        <title>client</title>                                                                   <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>                                                                                          <div>
        <h1>Connectez vous !</h1>
        <form method= "post">                                                                                                                                                           <input type="text" name="email" id="email" placeholder="Numéro de mobile ou e-mail" required><br/>
        <input type="password" name="password" id="password" placeholder="Mots de passe" required><br/>
        <input type="submit"name="formsend" id="formsend" placeholder="" required>
        </form>

        <?php

if(isset($_POST['formsend'])){

        extract($_POST);                                                                
        if(!empty($email) && !empty($password)){                                        
                include 'database.php';
                global $db;
                $q = $db->prepare("INSERT INTO users(email, password) VALUES(:email, :password)");
                $q->execute(['email'=> $email, 'password'=> $password]);

}

}

?>
</div>
</body>
</html>
