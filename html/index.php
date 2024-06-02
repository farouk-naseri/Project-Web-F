<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- icon links -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- css link -->
    <link rel="stylesheet" href="../css/style.css">
    <!-- font link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@0,100..900;1,100..900&family=Inter:wght@100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <!-- js link  -->
    <script src="../js/script.js" defer></script>
</head>

<body>
    <!-- START OF HEADER  -->
    <header>
        <!--  Comme titre le nom de l’école de formation ;
             Une image de fond. -->
        <i class='bx bx-menu'></i>
        <img src="../tools/Batman.png" alt="">
        <h2>3elemni <span>courses</span></h2>
        <ul>
            <li><a href="sec1">services</a></li>
            <li><a href="#section2">feedback</a></li>
        </ul>
    </header>
    <!-- END OF HEADER s -->
    <!-- START OF NAV  -->
    <nav>
        <div class="container">
            <div class="box principal">
                <div><i class='bx bxs-school'></i>
                    <p>UMBB</p>
                </div>
                <div style="color:#2D222F;">
                    <p>Section one </p>
                </div>
                <div style="color: #2D222F ;"><i class='bx bxs-group'></i>
                    <p>group <span>10</span></p>
                </div>
            </div>
            <div class="box secondair">
                <div class="name"><i class='bx bxs-user'></i>
                    <p>Naseri Farouk</p>
                </div>
                <div class="eemail">
                    <a href="mailto:naseri.farouk.abderraouf@gmail.com"><i class='bx bx-envelope'></i></a>
                    <p>naseri.farouk.abderraouf@gmail.com</p>
                </div>
            </div>
            <div class="box secondair">
                <div class="name"><i class='bx bxs-user'></i>
                    <p>Yousfi Nacer</p>
                </div>
                <div class="eemail">
                    <a href="mailto:yousfin027@gmail.com"><i class='bx bx-envelope'></i></a>
                    <p>yousfin027@gmail.com</p>
                </div>
            </div>
            <div class="box secondair">
                <div class="name"><i class='bx bxs-user'></i>
                    <p>Bouras Ayoub</p>
                </div>
                <div class="eemail">
                    <a href="mailto:bou123ywi@gmail.com"><i class='bx bx-envelope'></i></a>
                    <p>bourasayoub41@gmail.com</p>
                </div>
            </div>
        </div>
    </nav>
    <!-- END OF NAV  -->

    <!-- START OF PRINCIPAL SECTION  -->
    <section id="section-principale">
        <div class="container">
            <!--staert of discription part  -->
            <div class="decription-part">
                <div class="discrip-box">
                    <h2>why 3elemni courses</h2>
                    <p>Our website is dedicated to empowering our customers with the knowledge they needto excel in
                        their chosen domains, using the latest technology. We aim to provide comprehensiveresources and
                        insights that enable our users to achieve professional mastery and generate income from their
                        expertise. </p>
                </div>
            </div>

            <!-- start of formation part -->
            <h2>Nos Formations</h2>
            <div class="formation-part">
                <div class="formation">
                    <article>
                        <div class="photo">
                            <img src="../tools/magnifying-glass-data.jpg" alt="">
                        </div>
                        <div class="text">
                            <p>Data Analysis and Visualization</p>
                            <p>The ability to analyze and interpret data is crucial in nearly every industry.</p>
                            <button>learn more</button>
                        </div>
                    </article>
                    <article>
                        <div class="photo">
                            <img src="../tools/illus_article_webmarketing.jpg" alt="">
                        </div>
                        <div class="text">
                            <p>Digital Marketing</p>
                            <p>As businesses shift to online platforms, It's a key for sales and brand growth.</p>
                            <button>learn more</button>
                        </div>
                    </article>
                    <article>
                        <div class="photo">
                            <img src="../tools/Webp.firsttt.jpg" alt="">
                        </div>
                        <div class="text">
                            <p>Full Stack Development</p>
                            <p>opens Career Opportunities , now its one of the most High Demand skills in market</p>
                            <button>learn more</button>
                        </div>
                    </article>

                </div>
                <aside>
                    <div class="container">
                        <div class="scroll-efect">
                            <p><span>3elemni</span>20% of from our : </p>
                            <p>digital tech part </p>
                        </div>
                        <div class="scroll-efect">
                            <p><span>3elemni</span>20% of from our :</p>
                            <p>pack platinium</p>
                        </div>
                        <div class="scroll-efect">
                            <p><span>3elemni</span>20% of from our :</p>
                            <p>pack silver</p>
                        </div>
                        <div class="scroll-efect">
                            <p><span>3elemni</span>1 FREE course :</p>
                            <p>when buing tow </p>
                        </div>
                        <div class="scroll-efect">
                            <p><span>3elemni</span>20% of from our :</p>
                            <p>one formation</p>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </section>
    <!-- END OF PRINCIPAL SECTION  -->
    <!-- START OF SECTION 2 -->
    <section id="section2">
        <div class="container">
            <form class="comments" method="post">
                <div>
                    <input type="email" id="email" name="email" placeholder="Email-@-adress" required>
                    <span></span>
                </div>
                <textarea name="comments" id="comments-paragraph" placeholder="Share ur opinion..." required></textarea>
                <input type="submit" value="envoyer" name="envoyer" id="envoyer">
            </form>
            <?php
            //connextion a la base de donnees
            $db = new PDO('mysql:host=localhost;dbname=comptes', "root", "");
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //insertion dans la base de donnees
            if (!empty($_POST["envoyer"])) {
                $email = $_POST["email"];
                $commentaire = $_POST["comments"];

                $request = $db->prepare("INSERT INTO comptes (emails,commentaire) VALUE (:email,:commentaire)");
                $request->bindValue(":email", $email);
                $request->bindValue(":commentaire", $commentaire);

                $result = $request->execute();
            }
            ?>
            <div class="display-comments">
                <div class="titre">
                    Commentaire
                </div>
                <?php
                //recuperation de la base de donnees
                
                $request = $db->query("SELECT * FROM comptes");
                while ($result = $request->fetch()) {
                    echo '<div class="comment-style">';
                    echo '<div class="email-part">';
                    echo '<i class="bx bx-user"></i>';
                    echo $result["emails"];
                    echo '</div>';
                    echo '<div class="comment-part">';
                    echo $result["commentaire"];
                    echo '</div>';
                    echo '<div class="like-part">';
                    echo '<i class="bx bxs-heart"></i><span class=""like-count></span>';

                    echo '<i class="bx bxs-dislike" ></i><span class=""like-count></span>';
                    echo '</div>';

                    echo '</div>';
                }

                ?>
            </div>
        </div>
    </section>
    <!-- END OF SECTOIN 2  -->

</body>

</html>