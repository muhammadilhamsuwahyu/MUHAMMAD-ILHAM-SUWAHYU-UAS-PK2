<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form simpel desainkit</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <script src="../js/script.js"></script>
</head>

<body>
    <div class="header">
        <img src="../images/logo.png" alt="desainkit">
    </div>
    <div class="navbar">
        <a href="#" class="active">HOME</a>
        <a href="#">BLOG</a>
        <a href="pages/about.html">ABOUT</a>
        <a href="pages/form.php">BUKU TAMU</a>
        <a href="https://desainkit.com/template-powerpoint/" target="_blank" class="right">TEMPLATE PPT</a>
    </div>

    <div class="main">
        <h2>Form simpel</h2>
        <form action="" method="post">
            <div class="row">
                <label>Nama</label>
                <input type="text" name="nama" value="<?= isset($_POST['name']) ? $_POST['nama'] : '' ?>" />
            </div>
            <div class="row">
                <label>Alamat</label>
                <input type="text" name="alamat" value="<?= isset($_POST['name']) ? $_POST['nama'] : '' ?>" />
            </div>
            <div class="row">
                <label>Email</label>
                <input type="email" name="email" value="<?= isset($_POST['name']) ? $_POST['nama'] : '' ?>" />
            </div>
            <div class="row">
                <input type="submit" name="submit" value="Simpan">
            </div>
        </form>

        <?php
        if (isset($_POST['submit'])) {
            echo $_POST['nama'];
            echo $_POST['alamat'];
            echo $_POST['email'];
        }
        ?>
    </div>
    <!-- goTop -->
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <button onclick="topFunction()" id="gotoTop" title="Go to top">&#8593;</button>

    <div class="footer">
        <b>&#169; 2021 DesainKit • Dibuat dengan &#10084;&#65039; oleh <a href="https://desainkit.com/contact/" target="_blank">Ahnafudin</a></b>
    </div>
</body>

</html>