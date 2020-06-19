<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kayıt Olma Sayfası</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

</head>
<style>
    body{
        background-color: #FFE4E1;

    }
    h2 {font-family:"Times New Roman",Times,serif;
        color:#808080;}
    h4{ font-family: "italic";
        color:#808080}

</style>
<body>
<div class="container pb-5">
    <h2>login ekranı</h2>
    <hr />
    <form action="kontrol.php" method="POST">
        <div class="row">
            <div class="col">
                <input type="text" class="form-control" name="Email" placeholder="username">
                 <br>
                <input type="password" class="form-control" name="password" placeholder="Şifreniz">
                <br>
                <input type="Submit" class="btn btn-primary btn-sm form-control" class="btn btn-light" value="Giriş Yap">
            </div>

    </form>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>






</div>
</body>
</html>
