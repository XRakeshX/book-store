
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books</title>
    <link rel="stylesheet" href="../css/books.css">
</head>
<body>
    <header>
        <div class="logo">
            <img src="../img/baby-book.svg" alt="">
        </div>
    
        <div class="menu">
            <ul class="nav-bar">
                <li><a href="../index_page.php">Home</a></li>
                <li class="active"><a href="book_page.php">Books</a></li>
                <li><a href="">Category</a></li>
                <?php
                session_start();
                if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){?>
                    <li><a><?php echo "Welcome, ".$_SESSION['username'];?> </a></li> 
                    <li><a href="./php/logout.php">Logout</a></li>
            <?php } else{?>
                <li><a href="login_page.php">Login</a></li>
                <li><a href="register_page.php">Register</a></li>
                <?php } ?>
            </ul>
        </div>

        <div class="search">
            <img src="../img/cart.png" alt="" style="width: 50px;">
        </div>
        <div class="lines">
        </div>
    </header>

    <main>
        <h2>Books:</h2>
        <div class="content">
            <div class="first">
                <div id="one">
                    <a href="">
                        <img src="../img/egois.jpg" alt="">
                    </a>
                </div>

                <div id="two">
                    <a href="">
                        <img src="../img/egois.jpg" alt="">
                    </a>
                </div>

                <div id="three">
                    <a href="">
                        <img src="../img/egois.jpg" alt="">
                    </a>
                </div>

                <div id="four">
                    <a href="">
                        <img src="../img/egois.jpg" alt="">
                    </a>
                </div>
            </div>
            <div class="second">
                <div id="one">
                    <a href="">
                        <img src="../img/egois.jpg" alt="">
                    </a>
                </div>

                <div id="two">
                    <a href="">
                        <img src="../img/egois.jpg" alt="">
                    </a>
                </div>

                <div id="three">
                    <a href="">
                        <img src="../img/egois.jpg" alt="">
                    </a>
                </div>

                <div id="four">
                    <a href="">
                        <img src="../img/egois.jpg" alt="">
                    </a>
                </div>
            </div>
            <div class="third">
                <div id="one">
                    <a href="">
                        <img src="../img/egois.jpg" alt="">
                    </a>
                </div>

                <div id="two">
                    <a href="">
                        <img src="../img/egois.jpg" alt="">
                    </a>
                </div>

                <div id="three">
                    <a href="">
                        <img src="../img/egois.jpg" alt="">
                    </a>
                </div>

                <div id="four">
                    <a href="">
                        <img src="../img/egois.jpg" alt="">
                    </a>
                </div>
            </div>
            <div class="four">
                <div id="one">
                    <a href="">
                        <img src="../img/egois.jpg" alt="">
                    </a>
                </div>

                <div id="two">
                    <a href="">
                        <img src="../img/egois.jpg" alt="">
                    </a>
                </div>

                <div id="three">
                    <a href="">
                        <img src="../img/egois.jpg" alt="">
                    </a>
                </div>

                <div id="four">
                    <a href="">
                        <img src="../img/egois.jpg" alt="">
                    </a>
                </div>
            </div>
        </div>
    </main>
</body>
<html>