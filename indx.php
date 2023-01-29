<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap_one/css1/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap_one/css1/indx.css">
    <title>bootsarp 4</title>
</head>

<body>
    <!-- start header -->
    <div class="div_header">
        <div class="container">
            <div class="row">
                <div class="col div_col_left">
                    <i class="fas fa-phone icon"></i>
                    <span>000 123 456 789</span>
                    <i class="fas fa-envelope icon"></i>
                    <span>momen@momen.com</span>
                </div>
                <div class="col div_col_right" style="text-align: right;">
                    <span>Let's work together!</span>
                    <span class="get">get qucte</span>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#"><span class="elite">ELITE</span><span class="corp">CORP</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link actve" href="#about">ABOUT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#work">WORK</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#pricing">BLOG</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">CONTACT</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <h1 class="my_h1">we're an landependent<br>design and <span class="my_develoment">develoment</span><br>agenct.</h1>
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1" style="height: 20px;"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2" style="height: 20px;"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3" style="height: 20px;"></button>
        </div>
        <div class="carousel-inner">
            <div class="ovrle"></div>
            <div class="carousel-item active">
                <img src="images/image_one.webp" class="d-block w-100 image1" alt="...">
            </div>
            <div class="carousel-item">
                <img src="images/image_tow.jfif" class="d-block w-100 image2" alt="...">
            </div>
            <div class="carousel-item">
                <img src="images/image_three.webp" class="d-block w-100 image3" alt="...">
            </div>
        </div>
    </div>
    <!-- end header -->
    <!-- start main -->
    <div class="container div_col">
        <div class="row">
            <div class="col-sm-6 col-md-3 col-lg-3">
                <i class="fa-solid fa-lightbulb my_icon"></i>
                <h3>great ideas</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus quisquam praesentium</p>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3">
                <i class="fas fa-fighter-jet my_icon"></i>
                <h3>quick settings</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus quisquam praesentium</p>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3">
                <i class="fas fa-cloud-rain my_icon"></i>
                <h3>cloud service</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus quisquam praesentium</p>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3">
                <i class="fas fa-crosshairs my_icon"></i>
                <h3>cross develoment</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus quisquam praesentium</p>
            </div>
        </div>
    </div>
    <div class="div_color">
        <div class="container">
            <h1 id="about">company overview</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore cum quas autem ab nemo cupiditate
                dicta
                in, qui natus. Repellat officiis modi deleniti cum eaque quae illum, vero cumque quidem! Lorem ipsum
                dolor
                sit amet consectetur, adipisicing elit. Minima dicta, a pariatur quo esse numquam iste eum aspernatur
                autem
                et molestiae cum soluta corrupti sapiente, provident incidunt, beatae eius! Assumenda. Lorem ipsum
                dolor.</p>
        </div>
        <p class="let">let's start today</p>
        <?php
        print "<a href='read_more.php' type='button' class='btn btn-danger'>VIEW MORE</a>";
        ?>
    </div>
    <div class="div_featured pt-5 mt-5">
        <div class="container">
            <h1 id="work">featured work</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore cum quas autem ab nemo cupiditate
                dicta
                in, qui natus. Repellat officiis modi deleniti cum eaque quae illum, vero cumque quidem! Lorem ipsum
                dolor
                sit amet consectetur, adipisicing elit. Minima dicta, a pariatur quo esse numquam iste eum aspernatur
                autem
                et molestiae cum soluta corrupti sapiente, provident incidunt, beatae eius! Assumenda. Lorem ipsum
                dolor.</p>
        </div>
        <div class="container">
            <div class="row">
                <div class="div_button">
                    <button class="button all" style="color: white;" id="button1">all</button>
                    <button class="button" id="button2">websites</button>
                    <button class="button" id="button3">logos</button>
                    <button class="button" id="button4">graphic</button>
                    <button class="button" id="button5">marketing</button>
                    <button class="button" id="button6">videos</button>
                </div>
            </div>
        </div>
    </div>
    <div class="div_images">
        <img src="images/html.jfif" alt="" id="image1">
        <img src="images/java.png" alt="" id="image2">
        <img src="images/js.png" alt="" id="image3">
        <img src="images/office.jfif" alt="" id="image4">
        <img src="images/php.png" alt="" id="image5">
        <img src="images/sql.png" alt="" id="image6">
        <img src="images/system analysis.jpg" alt="" id="image7">
        <img src="images/Software Engineering.webp" alt="" id="image8">
    </div>
    <div class="div_latest pt-5 mt-5">
        <h1>latest post</h1>
        <br>
        <p>Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Inventore Cum Quas Autem Ab Nemo Cupiditate Dicta
            In, Qui Natus. Repellat Officiis Modi Deleniti Cum Eaque Quae Illum, Vero Cumque Quidem! Lorem Ipsum Dolor
            Sit Amet Consectetur, Adipisicing Elit. Minima Dicta, A Pariatur Quo Esse Numquam Iste Eum Aspernatur Autem
            Et Molestiae Cum Soluta Corrupti Sapiente, Provident Incidunt, Beatae Eius! Assumenda. Lorem Ipsum Dolor.
        </p>
        <br>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="card">
                        <img src="images/02lcg0Rt9G3gSqCpWhFG0o1-2..v1656623239.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5>Lorem ipsum dolor sit amet consectetur</h5>
                            <p>march 24 2023</p>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Omnis est
                                aliquam quibusdam, nisi qui blanditiis consectetur alias eum quaerat eveniet dolorem
                                magni libero ratione iusto eos quis. A, maiores iusto.</p>
                            <?php

                            $data = new mysqli("localhost", "root", "", "data_string");

                            $table = $data->query("select * from table_bootsraip where id = 1");

                            if ($table->num_rows > 0) {
                                while ($row = $table->fetch_assoc()) {
                                    print "<a href='read_laptop.php?my_id=" . $row["id"] . "'>read more</a>";
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="card">
                        <img src="images/download.jfif" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5>Lorem ipsum dolor sit amet consectetur</h5>
                            <p>march 24 2023</p>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Omnis est
                                aliquam quibusdam, nisi qui blanditiis consectetur alias eum quaerat eveniet dolorem
                                magni libero ratione iusto eos quis. A, maiores iusto.</p>
                            <?php

                            $table = $data->query("select * from table_bootsraip where id = 2");

                            if ($table->num_rows > 0) {
                                while ($row = $table->fetch_assoc()) {
                                    print "<a href='read_laptop.php?my_id=" . $row["id"] . "'>read more</a>";
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <div class="card">
                        <img src="images/Gear-Apple-MacBook-Air-top-down-SOURCE-Apple.webp" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5>Lorem ipsum dolor sit amet consectetur</h5>
                            <p>march 24 2023</p>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Omnis est
                                aliquam quibusdam, nisi qui blanditiis consectetur alias eum quaerat eveniet dolorem
                                magni libero ratione iusto eos quis. A, maiores iusto.</p>
                            <?php

                            $table = $data->query("select * from table_bootsraip where id = 3");

                            if ($table->num_rows > 0) {
                                while ($row = $table->fetch_assoc()) {
                                    print "<a href='read_laptop.php?my_id=" . $row["id"] . "'>read more</a>";
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <div id="carouselExampleIndicators1" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1" style="height: 20px;"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="1" aria-label="Slide 2" style="height: 20px;"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="2" aria-label="Slide 3" style="height: 20px;"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="div_center">
                    <div class="div_image1">
                        <img src="images/team-01.png" alt="">
                        <br>
                        <br>
                        <h2 style="text-align: center;">james jonathan</h2>
                        <p style="text-align: center;">company CEO</p>
                        <br>
                        <p style="text-align: center;">Lorem ipsum dolor, sit amet consectetur adipisicing elit.<br> Sed,
                            qui quas, inventore esse aliquam
                            temporibus at similique tempore quasi maxime cum</p>
                    </div>
                    <img src="images/image_one.webp" class="d-block w-100 image1" alt="...">
                </div>
            </div>
            <div class="carousel-item">
                <div class="div_center">
                    <div class="div_image1">
                        <img src="images/team-02.png" alt="">
                        <br>
                        <br>
                        <h2 style="text-align: center;">sands jonathan</h2>
                        <p style="text-align: center;">company CEO</p>
                        <br>
                        <p style="text-align: center;">Lorem ipsum dolor, sit amet consectetur adipisicing elit.<br> Sed,
                            qui quas, inventore esse aliquam
                            temporibus at similique tempore quasi maxime cum</p>
                    </div>
                    <img src="images/image_tow.jfif" class="d-block w-100 image1" alt="...">
                </div>
            </div>
            <div class="carousel-item">
                <div class="div_center">
                    <div class="div_image1">
                        <img src="images/team-03.png" alt="">
                        <br>
                        <br>
                        <h2 style="text-align: center;">momen jonathan</h2>
                        <p style="text-align: center;">company CEO</p>
                        <br>
                        <p style="text-align: center;">Lorem ipsum dolor, sit amet consectetur adipisicing elit.<br> Sed,
                            qui quas, inventore esse aliquam
                            temporibus at similique tempore quasi maxime cum</p>
                    </div>
                    <img src="images/image_three.webp" class="d-block w-100 image1" alt="...">
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <br>
    <br>
    <br>
    <div class="div_color">
        <div class="container">
            <h1 id="pricing">pricing table</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore cum quas autem ab nemo cupiditate
                dicta
                in, qui natus. Repellat officiis modi deleniti cum eaque quae illum, vero cumque quidem! Lorem ipsum
                dolor
                sit amet consectetur, adipisicing elit. Minima dicta, a pariatur quo esse numquam iste eum aspernatur
                autem
                et molestiae cum soluta corrupti sapiente, provident incidunt, beatae eius! Assumenda. Lorem ipsum
                dolor.</p>
        </div>
        <br>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="div_width">
                        <h3>small busincess</h3>
                        <p>lorem ipsum</p>
                        <h5 class="width_h5">99/</h5>
                        <p>lorem ipsum</p>
                        <p>lorem ipsum</p>
                        <p>lorem ipsum</p>
                        <p>lorem ipsum</p>
                        <p>lorem ipsum</p>
                        <?php

                        $table = $data->query("select * from table_bootsraip where id = 1");

                        if ($table->num_rows > 0) {
                            while ($row = $table->fetch_assoc()) {
                                print "<button><a href='read_smill.php?my_id=" . $row["id"] . "'>read more</button></a>";
                            }
                        }
                        ?>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4" style="margin-top: -1%;">
                    <div class="div_width">
                        <h3>small busincess</h3>
                        <p>lorem ipsum</p>
                        <h1 class="width_h5" style="background-color: red; color: white;">99/</h1>
                        <p>lorem ipsum</p>
                        <p>lorem ipsum</p>
                        <p>lorem ipsum</p>
                        <p>lorem ipsum</p>
                        <p>lorem ipsum</p>
                        <?php

                        $table = $data->query("select * from table_bootsraip where id = 2");

                        if ($table->num_rows > 0) {
                            while ($row = $table->fetch_assoc()) {
                                print "<button style='background-color: aqua;'><a href='read_smill.php?my_id=" . $row["id"] . "'>read more</button></a>";
                            }
                        }
                        ?>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <div class="div_width">
                        <h3>small busincess</h3>
                        <p>lorem ipsum</p>
                        <h5 class="width_h5">99/</h5>
                        <p>lorem ipsum</p>
                        <p>lorem ipsum</p>
                        <p>lorem ipsum</p>
                        <p>lorem ipsum</p>
                        <p>lorem ipsum</p>
                        <?php

                        $table = $data->query("select * from table_bootsraip where id = 3");

                        if ($table->num_rows > 0) {
                            while ($row = $table->fetch_assoc()) {
                                print "<button><a href='read_smill.php?my_id=" . $row["id"] . "'>read more</button></a>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <div class="div_flex" id="contact">
        <img src="images/types-of-homes-hero.jpg" alt="">
        <div class="div_left">
            <h1>why choose us</h1>
            <br>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi, perferendis aspernatur consectetur
                repudiandae expedita eum architecto sapiente tempora, fugit porro nam at et quaerat, asperiores sit cum
                assumenda id! Magni! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quod eligendi pariatur
                repellendus quo odio totam dignissimos inventore, dolorum ut dolore natus fugit laudantium! Assumenda
                atque omnis quibusdam perspiciatis doloribus quam!</p>
            <br>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam perspiciatis voluptatum enim,
                assumenda alias omnis officia nihil repellendus blanditiis modi at debitis nostrum incidunt ducimus
                inventore ipsum pariatur animi earum!</p>
            <button><a href="image_hous.html">VIEW MORE</button></a>
        </div>
    </div>
    <br>
    <br>
    <br>
    <div class="div_icon">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <i class="fas fa-user icon"></i>
                    <h1>624</h1>
                    <p>happy clients</p>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <i class="fas fa-heart icon"></i>
                    <h1>624</h1>
                    <p>amzing tours</p>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <i class="fas fa-box icon"></i>
                    <h1>624</h1>
                    <p>partnrs</p>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <i class="fas fa-comments icon"></i>
                    <h1>624</h1>
                    <p>questions answered</p>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <div class="div_red">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <p>you think we're cool? let's work together</p>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <a href="my_number.html"><button>CONTACT US</button></a>
                </div>
            </div>
        </div>
    </div>
    <!-- end main -->
    <!-- start footer -->
    <div class="div_footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <a class="navbar-brand" href="#"><span class="elite">ELITE</span><span class="corp">CORP</span></a>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa delectus quis culpa velit pariatur
                        natus totam autem cum rem deleniti perferendis laborum repellat ratione esse expedita
                        laboriosam, aperiam ducimus officiis!
                    </p>
                    <a href="read_more.php">read more</a>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <h1>helpful links</h1>
                    <div class="div-flex">
                        <div class="">
                            <ul>
                                <li>about</li>
                                <li>protofolio</li>
                                <li>team</li>
                                <li>price</li>
                                <li>privacy</li>
                            </ul>
                        </div>
                        <div class="">
                            <ul>
                                <li>fAQ</li>
                                <li>Blog</li>
                                <li class="li_work">how it work</li>
                                <li>benefits</li>
                                <li>contact</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <h1>contact us</h1>
                    <p>54958 love road near red fort u.s</p>
                    <p>phone:012.12346578</p>
                    <p>email:<a href="#">info@elitecorp.com</a></p>
                </div>
            </div>
        </div>
        <br>
        <br>
        <div class="div_footer1">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6" style="text-align: center;">
                        conpyrht 2023 elitecopre &copy; all right reesevend
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6 my_div">
                        <a href="https://www.facebook.com/profile.php?id=100004618546632" target="_blank"><i class="fab fa-facebook-f icon"></i></a>
                        <a href="https://www.facebook.com/profile.php?id=100004618546632" target="_blank"><i class="fab fa-twitter icon"></i></a>
                        <a href="https://www.youtube.com/@user-bg1ut6uu2z" target="_blank"><i class="fab fa-youtube icon"></i></a>
                        <a href="https://mail.google.com/mail/u/0/#inbox" target="_blank"><i class="fab fa-google-plus-g icon"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end footer -->
</body>
<script src="bootstrap_one/js1/bootstrap.bundle.min.js"></script>
<script src="bootstrap_one/js1/all.min.js"></script>
<script src="bootstrap_one/js1/indx.js"></script>

</html>