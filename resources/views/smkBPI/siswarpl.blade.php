<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container text-center mt-4">
    <H1>Daftar Siswa</H1>
    <ol class="list-group my-4">
        <?php 
        foreach ($siswa as $nama) {
            echo "<li class=\"list-group-item\">$nama</li>";
        }    
        ?>
    </ol>
</div>
    <div class="container text-center mt-4">
        <img class="rounded-circle img-thumbnail m-2" src="/img/Heejin.jpg" alt="">
        <img class="rounded-circle img-thumbnail m-2" src="/img/Eunha.jpg" alt=""><br>
        <img class="rounded-circle img-thumbnail m-2" src="/img/Karina.jpg" alt="">
        <img class="rounded-circle img-thumbnail m-2" src="/img/Kim.jpg" alt="">
        

    </div>
    
    <div class="container text-center mt-4">
        copyright &copy; <?php echo date ("Y"); ?> Nama
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" ></script>

</body>
</html>