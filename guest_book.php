<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guest Book - Ilham's Blog</title>
    <link rel="stylesheet" type="text/css" href="src/res/layout.css">
    <style>
        * {
            box-sizing: border-box;
        }
        
        .card {
            background-color: #f1f1f1;
            padding: 10px;
            margin-bottom: 10px;
        }

        .echo-data {
            margin: 25px 0 10px 0;
            background-color: #00ff00;
            width: 500px
        }
    </style>
</head>
    <body>
        <div class="header">
            <h1>Guest Book - Ilham's Blog</h1>
        </div>
        <div id="topnav" class="topnav">
            <a href="Website/index.html">Home</a>
            <a href="Website/article.html">Article</a>
            <a href="Website/about.html">About</a>
            <a href="#">Guest Book</a>
        </div>
        <div class="content">
            <div class="card">
                <h3 style="text-align: center;">Isi buku tamu untuk mendapat Berita Terbaru Gratis:</h3>
                <table align="center">
                    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
                        <tr>
                            <td><label>Nama: </label></td>
                            <td><input type="text" name="fnama"></td>
                        </tr>
                        <tr>
                            <td><label>Email: </label></td>
                            <td><input type="email" name="femail"></td>
                        </tr>
                        <tr>
                            <td><label>No. HP: </label></td>
                            <td><input type="number" name="fphone"></td>
                        </tr>
                        <tr>
                            <td><label>Umur: </label></td>
                            <td><input type="number" name="fage"></td>
                        </tr>
                        <tr>
                            <td><label>Alamat: </label></td>
                            <td><textarea name="faddress" cols="22" rows="6"></textarea></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" value="Submit"></td>
                        </tr>
                    </form>
                </table>
                <center>
                    <div class="echo-data">
                        <?php 
                            if(isset($_POST ['fnama'])){
                                $nama = $_POST['fnama'];
                                $email =$_POST['femail'];
                                $phone = $_POST['fphone'];
                                $age =$_POST['fage'];
                                $address = $_POST['faddress'];

                                echo "<b>Nama: </b> $nama, <b>Email: </b> $email, <b>No. HP: </b> $phone";
                                echo "<br>";
                                echo "<b>Umur: </b> $age, <b>Alamat: </b> $address";
                            }
                        ?>
                    </div>
                </center>
            </div>
        </div>
        <div class="footer" style="position: fixed;  bottom: 0;">
            <h3>Copyright &copy; <script>document.write(new Date().getFullYear())</script> by Renji's Blog. All Rights Reserved.</h3>
        </div>


        <script>
            window.onscroll = function() {myFunction()};

            var header = document.getElementById("topnav");
            var fixed = header.offsetTop;

            function myFunction() {
                if (window.pageYOffset > fixed) {
                    header.classList.add("fixed");
                } else {
                    header.classList.remove("fixed");
                }
            }
        </script>
    </body>
</html>