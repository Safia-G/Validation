<?php
// Include config file
// On se connecte à MySQL
$bdd = new PDO('mysql:host=localhost;dbname=my_cms', 'root', '0000');
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Define variables and initialize with empty values
$title = $content = "";

    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Créer</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Creer une page</h2>
                    </div>
                    <p>Complétez le formulaire.</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group">
                            <label>Titre de la page</label>
                            <input type="text" name="title" class="form-control" value="<?php echo $title; ?>">
                        </div>
                        <div class="form-group">
                            <label>Contenu</label>
                            <textarea name="content" class="form-control"><?php echo $content; ?></textarea>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="home.html" class="btn btn-default">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <li style="margin-top:50px; text-align:center"><a href="/auth/logoutAction">Logout</a></li>

</body>
</html>
