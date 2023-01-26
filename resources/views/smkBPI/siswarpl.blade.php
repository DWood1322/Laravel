<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <H1>Daftar Siswa</H1>
    <ol>
        <?php 
        foreach ($siswa as $nama) {
            echo "<li>$nama</li>";
        }    
        ?>
    </ol>
    <div>
        <img src="/img/Heejin.jpg" alt="">
        <img src="/img/Eunha.jpg" alt="">
        <img src="/img/Karina.jpg" alt="">
    </div>
    <div>
        copyright &copy; <?php echo date ("Y"); ?> Nama
    </div>
    <script src="/js/script.js"></script>
</body>
</html>