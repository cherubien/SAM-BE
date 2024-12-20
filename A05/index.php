<?php include 'connect.php'; ?>

<!DOCTYPE html>
<html>

<head>
    <title>Template</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="https://github.com/cherubien/SAM_Thumbnail/blob/main/ICON%201.png?raw=true" type="image/png">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Instrument+Serif:ital@0;1&family=Oswald:wght@200..700&family=Roboto+Slab:wght@100..900&family=Sansita+Swashed:wght@300..900&display=swap"
        rel="stylesheet">
    <style>
        body,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: "Lato", sans-serif;
        }

        body,
        html {
            background-color: #f4f2ef;
            height: 100%;
            color: #3c3b3b;
            line-height: 1.8;
        }

        p {
            text-align: justify;
            color: black;
        }

        a {
            font-family: Oswald, san serif;
        }

        /* Create a Parallax Effect */
        .bgimg-1,
        .bgimg-2,
        .bgimg-3,
        .bgimg-4,
        .bgimg-5,
        .bgimg-6 {
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        /* First image (Full height) */
        .bgimg-1 {
            background-image: url('https://github.com/cherubien/SAM_Thumbnail/blob/main/Banner(Profile).png?raw=true');
            min-height: 100%;
        }

        /* Second and Third image (Portfolio) */
        .bgimg-2,
        .bgimg-3 {
            background-image: url("https://github.com/cherubien/SAM_Thumbnail/blob/main/Banner(Portfolio).png?raw=true");
            min-height: 400px;
        }

        /* Forth and Fifth image (Portfolio) */
        .bgimg-4,
        .bgimg-5 {
            min-height: 400px;
            background-image: url("https://github.com/cherubien/SAM_Thumbnail/blob/main/Banner(Portfolio).png?raw=true");
        }

        /* Sixth image (Contact) */
        .bgimg-6 {
            background-image: url("https://github.com/cherubien/SAM_Thumbnail/blob/main/Banner(Contact).png?raw=true");
            min-height: 400px;
        }

        .w3-wide {
            letter-spacing: 10px;
        }

        .w3-hover-opacity {
            cursor: pointer;
        }

        /* Turn off parallax scrolling for tablets and phones */
        @media only screen and (max-width: 768px) {

            .bgimg-1,
            .bgimg-2,
            .bgimg-3,
            .bgimg-4,
            .bgimg-5,
            .bgimg-6 {
                background-attachment: scroll;
                min-height: 400px;
            }
        }
    </style>
</head>

<body>

    <!-- Navbar (sit on top) -->
    <div class="w3-top">
        <div class="w3-bar" id="myNavbar">
            <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right"
                href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
                <i class="fa fa-bars"></i>
            </a>
            <a href="#home" class="w3-bar-item w3-button">HOME</a>
            <a href="#about" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-user"></i> ABOUT</a>
            <a href="#island" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-th"></i> ISLANDS</a>
            <a href="#contact" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-envelope"></i> CONTACT</a>
        </div>

        <!-- Navbar on small screens -->
        <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
            <a href="#about" class="w3-bar-item w3-button" onclick="toggleFunction()">ABOUT</a>
            <a href="#island" class="w3-bar-item w3-button" onclick="toggleFunction()">ISLANDS</a>
            <a href="#contact" class="w3-bar-item w3-button" onclick="toggleFunction()">CONTACT</a>
        </div>
    </div>

    <!-- First Parallax Image with Logo Text -->
    <div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
        <div class="w3-display-middle" style="white-space:nowrap;">
        </div>
    </div>

    <!-- Container (About Section) -->
    <div class="w3-content w3-container w3-padding-64" id="about">
        <h3 class="w3-center" style="font-family: Oswald, san serif;">ABOUT ME</h3>
        <p class="w3-center"><em>Hi! I am Bien Carlo Castillo, you can call me Bien.</em></p>
        <p>I am a fourth year college student in Polytechnic University of the Philippines, Santo Tomas Batangas Campus.
            Let's dig deeper to get to know me better.
        </p>
        <div class="w3-row">
            <div class="w3-col m6 w3-center w3-padding-large">
                <p><b><i class="fa fa-user w3-margin-right"></i>Bien Carlo Castillo</b></p><br>
                <img src="https://github.com/cherubien/SAM_Thumbnail/blob/main/piksur.png?raw=true"
                    class="w3-round w3-image w3-opacity w3-hover-opacity-off" alt="Photo of Me" width="500"
                    height="333">
            </div>

            <!-- Hide this text on small devices -->
            <div class="w3-col m6 w3-hide-small w3-padding-large">
                <ul>
                    <li>I was born on March 22, 2003. I'm an Aries. I am 21 years old.</li>
                    <li>I live in Calamba City, Laguna.</li>
                    <li>I enjoy such things as movies, music, and arts—basically any form of artistry, which I guess
                        also includes web designing.</li>
                    <li>And I spend my spare time polishing my artistic skills in drawing or practicing web designing
                        (it's a
                        work-in-progress, but I'll get there).</li>
                    <li>I am a parent of two cats named Blue and Skye. They both have white fur and blue eyes.</li>
                    <li>Apart from making art, I also enjoy playing video games, especially mobile games.</li>
                    <li>I also enjoy watching animes as well.</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="w3-row w3-center w3-padding-16" id="island"
        style="background-color: #d4be9d; color: #ffffff; display: flex; justify-content: center; align-items: center; height: 100px;">
        <div class="w3-quarter w3-section">
            <span class="w3-xlarge" style="font-family: Instrument Serif, san serif;">Island of Personalities</span><br>
        </div>
    </div>

    <?php
        $getQuery = "SELECT * FROM `islandsOfPersonality` WHERE islandOfPersonalityID = 1";
        $sparkIsleResult = executeQuery($getQuery);

        while ($row = mysqli_fetch_array($sparkIsleResult)) {
    ?>

    <!-- Second Parallax Image with Portfolio Text -->
    <div class="bgimg-2 w3-display-container w3-opacity-min">
        <div class="w3-display-middle">
            <span class="w3-xxlarge w3-text-white w3-wide fw-semibold"
                style="font-family: Roboto Slab, san serif;"><?php echo $row ['name']?> </span>
        </div>
    </div>

    <!-- Container (Portfolio Section) -->
    <div class="container my-4" id="island">
        <h3 class="w3-center" style="font-family: Oswald, san serif;"><?php echo $row ['shortDescription']?></h3>
        <p class="w3-center"><em><?php echo $row ['longDescription']?><br> </em></p>

    <?php
        }
    ?>

<?php 
    $getQuery = "SELECT * FROM `islandcontents` WHERE islandOfPersonalityID = 1";
    $sparkIsleResult = executeQuery($getQuery);

    if (!$sparkIsleResult) {
        echo "Error: " . mysqli_error($conn);
        exit();
    }

    $counter = 0;

    while ($row = mysqli_fetch_array($sparkIsleResult)) {
        if ($counter % 3 === 0) {
            echo '<div class="row justify-content-center mb-4">';
        }

        echo '
            <div class="col-md-4 d-flex justify-content-center">
                <img src="' . htmlspecialchars($row['image']) . '" alt="Island Content" class="img-fluid" style="max-width: 300px; height: auto;">
            </div>
        ';

        $counter++;

        if ($counter % 3 === 0) {
            echo '</div>'; 
        }
    }

    if ($counter % 3 !== 0) {
        echo '</div>'; 
    }

    echo '</div>'; 
    ?>

    <?php
        $getQuery = "SELECT * FROM `islandsOfPersonality` WHERE islandOfPersonalityID = 2";
        $pawradiseResult = executeQuery($getQuery);

        while ($row = mysqli_fetch_array($pawradiseResult)) {
    ?>

    <!-- Third Parallax Image with Portfolio Text -->
    <div class="bgimg-3 w3-display-container w3-opacity-min">
        <div class="w3-display-middle">
            <span class="w3-xxlarge w3-text-white w3-wide fw-semibold"
                style="font-family: Roboto Slab, san serif;"><?php echo $row ['name']?></span>
        </div>
    </div>

    <!-- Container (Portfolio Section) -->
    <div class="container my-4" id="island">
        <h3 class="w3-center" style="font-family: Oswald, san serif;"><?php echo $row ['shortDescription']?></h3>
        <p class="w3-center"><em><?php echo $row ['longDescription']?><br> </em></p>

    <?php
        }
    ?>

    <?php 
        $getQuery = "SELECT * FROM `islandcontents` WHERE islandOfPersonalityID = 2";
        $pawradiseResult = executeQuery($getQuery);

        if (!$pawradiseResult) {
            echo "Error: " . mysqli_error($conn);
            exit();
        }

        $counter = 0;

        while ($row = mysqli_fetch_array($pawradiseResult)) {
            if ($counter % 3 === 0) {
                echo '<div class="row justify-content-center mb-4">';
            }

            echo '
                <div class="col-md-4 d-flex justify-content-center">
                    <img src="' . htmlspecialchars($row['image']) . '" alt="Island Content" class="img-fluid" style="max-width: 300px; height: auto;">
                </div>
            ';

            $counter++;

            if ($counter % 3 === 0) {
                echo '</div>'; 
            }
        }

        if ($counter % 3 !== 0) {
            echo '</div>'; 
        }

        echo '</div>'; 
        ?>

    <?php
        $getQuery = "SELECT * FROM `islandsOfPersonality` WHERE islandOfPersonalityID = 3";
        $buttonBayResult = executeQuery($getQuery);

        while ($row = mysqli_fetch_array($buttonBayResult)) {
    ?>

    <!-- Fourth Parallax Image with Portfolio Text -->
    <div class="bgimg-4 w3-display-container w3-opacity-min">
        <div class="w3-display-middle">
            <span class="w3-xxlarge w3-text-white w3-wide fw-semibold"
                style="font-family: Roboto Slab, san serif;"><?php echo $row ['name']?></span>
        </div>
    </div>

    <!-- Container (Portfolio Section) -->
    <div class="container my-4" id="island">
        <h3 class="w3-center" style="font-family: Oswald, san serif;"><?php echo $row ['shortDescription']?></h3>
        <p class="w3-center"><em><?php echo $row ['longDescription']?><br> </em></p>
    
    <?php
        }
    ?>

    <?php 
        $getQuery = "SELECT * FROM `islandcontents` WHERE islandOfPersonalityID = 3";
        $buttonBayResult = executeQuery($getQuery);

        if (!$buttonBayResult) {
            echo "Error: " . mysqli_error($conn);
            exit();
        }

        $counter = 0;

        while ($row = mysqli_fetch_array($buttonBayResult)) {
            if ($counter % 3 === 0) {
                echo '<div class="row justify-content-center mb-4">';
            }

            echo '
                <div class="col-md-4 d-flex justify-content-center">
                    <img src="' . htmlspecialchars($row['image']) . '" alt="Island Content" class="img-fluid" style="max-width: 300px; height: auto;">
                </div>
            ';

            $counter++;

            if ($counter % 3 === 0) {
                echo '</div>'; 
            }
        }

        if ($counter % 3 !== 0) {
            echo '</div>'; 
        }

        echo '</div>'; 
    ?>


    <?php
        $getQuery = "SELECT * FROM `islandsOfPersonality` WHERE islandOfPersonalityID = 4";
        $riffReefResult = executeQuery($getQuery);

        while ($row = mysqli_fetch_array($riffReefResult)) {
    ?>
    <!-- Fifth Parallax Image with Portfolio Text -->
    <div class="bgimg-5 w3-display-container w3-opacity-min">
        <div class="w3-display-middle">
            <span class="w3-xxlarge w3-text-white w3-wide fw-semibold"
                style="font-family: Roboto Slab, san serif;"><?php echo $row ['name']?></span>
        </div>
    </div>

    <!-- Container (Portfolio Section) -->
    <div class="container my-4" id="island">
        <h3 class="w3-center" style="font-family: Oswald, san serif;"><?php echo $row ['shortDescription']?></h3>
        <p class="w3-center"><em><?php echo $row ['longDescription']?><br> </em></p>
    
    <?php
        }
    ?>

    <?php 
        $getQuery = "SELECT * FROM `islandcontents` WHERE islandOfPersonalityID = 4";
        $riffReefResult = executeQuery($getQuery);

        if (!$riffReefResult) {
            echo "Error: " . mysqli_error($conn);
            exit();
        }

        $counter = 0;

        while ($row = mysqli_fetch_array($riffReefResult)) {
            if ($counter % 3 === 0) {
                echo '<div class="row justify-content-center mb-4">';
            }

            echo '
                <div class="col-md-4 d-flex justify-content-center">
                    <img src="' . htmlspecialchars($row['image']) . '" alt="Island Content" class="img-fluid" style="max-width: 300px; height: auto;">
                </div>
            ';

            $counter++;

            if ($counter % 3 === 0) {
                echo '</div>'; 
            }
        }

        if ($counter % 3 !== 0) {
            echo '</div>'; 
        }

        echo '</div>'; 
    ?>

    <!-- Modal for full size images on click-->
    <div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
        <span class="w3-button w3-large w3-black w3-display-topright" title="Close Modal Image"><i
                class="fa fa-remove"></i></span>
        <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
            <img id="img01" class="w3-image">
            <p id="caption" class="w3-opacity w3-large"></p>
        </div>
    </div>

    <!-- Sixth Parallax Image with Portfolio Text -->
    <div class="bgimg-6 w3-display-container w3-opacity-min" id="contact">
        <div class="w3-display-middle">
            <span class="w3-xxlarge w3-text-white w3-wide fw-semibold"
                style="font-family: Roboto Slab, san serif;">CONTACT</span>
        </div>
    </div>

    <!-- Footer -->
    <footer class="w3-center w3-padding-64 w3-opacity w3-hover-opacity-off" style="background-color: #d4be9d">
        <div class="w3-xlarge w3-section">
            <i class="fa fa-facebook-official w3-hover-opacity"></i>
            <i class="fa fa-instagram w3-hover-opacity"></i>
            <i class="fa fa-envelope w3-hover-opacity"></i>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>

    <script>

        // Change style of navbar on scroll
        window.onscroll = function () { myFunction() };
        function myFunction() {
            var navbar = document.getElementById("myNavbar");
            if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
                navbar.className = "w3-bar" + " w3-card" + " w3-animate-top" + " w3-white";
            } else {
                navbar.className = navbar.className.replace(" w3-card w3-animate-top w3-white", "");
            }
        }

        // Used to toggle the menu on small screens when clicking on the menu button
        function toggleFunction() {
            var x = document.getElementById("navDemo");
            if (x.className.indexOf("w3-show") == -1) {
                x.className += " w3-show";
            } else {
                x.className = x.className.replace(" w3-show", "");
            }
        }

        const containerIds = ['container-island1', 'container-island2', 'container-island3', 'container-island4'];

        containerIds.forEach(containerId => {
            generateCards(containerId, img, text);
        });
    </script>

</body>

</html>