<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Amalgam</title>

        <link rel="stylesheet" href="./styles/main.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="shortcut icon" href="./images/logo.png">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap">
        <script src="./js/main.js"></script>
    </head>
    
    <body>
        <ul id="nav" class="nav justify-end">
            <a class="nav-link center" href="#home"><i class="fa fa-home"></i><p>Home</p></a>
            <a class="nav-link center" href="#about"><i class="fa fa-info"></i><p>About</p></a>
            <a class="nav-link center" href="#projects"><i class="fa fa-cogs"></i><p>Projects</p></a>
            <a class="nav-link center" href="#contact"><i class="fa fa-envelope"></i><p>Contact</p></a>
        </ul>

        <div class="header center">
            <p class="center">Amalgam Designs</p>
        </div>

        <div id="home" class="window center">
            <img class="logo" style="grid-area: logo;" src="./images/logo.png" alt="logo">
        </div>
        
        <div id="about" class="window center">
            <p class="animated center about-text fill" style="grid-area: femaleText;">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Harum qui delectus ex perspiciatis veritatis iusto eos maiores eius eveniet recusandae eum rerum quae, sunt vero amet quos dolores neque 
                suscipit molestias architecto culpa reprehenderit nam! Quibusdam, quod soluta accusamus, nemo voluptate quos atque excepturi obcaecati nobis 
                quas vel. Iure, totam!
            </p>
            <img id='boyImg' class="animated avatar" style="grid-area: maleImg;" src="./images/female-avatar.png" alt="boy">
            <img id="girlImg" class="animated avatar" style="grid-area: femaleImg;" src="./images/female-avatar.png" alt="girl">
            <p class="animated center about-text fill" style="grid-area: maleText;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex obcaecati laborum soluta quia magni 
                esse, quasi inventore, vitae quo aspernatur provident unde porro. Ab consectetur fugiat, perferendis laudantium vel molestiae aliquam 
                praesentium quod earum veritatis illum dignissimos suscipit dolore enim tenetur illo exercitationem obcaecati expedita eligendi accusamus 
                architecto necessitatibus! Perferendis.
            </p>
        </div>

        <div id="projects" class="window center">
            <div class="animated center card">
                <img src="./images/logo.png" alt="Logo image atm">
                <div class="center overlay">
                    <a href="#"><i class="fa fa-external-link"></i></a>
                    <a href="#"><i class="fa fa-github"></i></a>
                </div>
            </div>
            <div class="animated center card">
                <img src="./images/logo.png" alt="Logo image atm">
                <div class="center overlay">
                    <a href="#"><i class="fa fa-external-link"></i></a>
                    <a href="#"><i class="fa fa-github"></i></a>
                </div>
            </div>
            <div class="animated center card">
                <img src="./images/logo.png" alt="Logo image atm">
                <div class="center overlay">
                    <a href="#"><i class="fa fa-external-link"></i></a>
                    <a href="#"><i class="fa fa-github"></i></a>
                </div>
            </div>
        </div>

        <div id="contact" class="window column">
            <h2 style="margin-bottom: 5%;">Contact Us</h2>
            <form class="contact-form column" action="../backend/contact.php" method="post">
                <input class="form-element" type="text" name="name" placeholder="Name" required>
                <input class="form-element" type="email" name="email" placeholder="Email" required>
                <input class="form-element" type="text" name="subject" placeholder="Subject">
                <textarea class="form-element" name="description" id="description" cols="30" rows="10" placeholder="Let us know what you're thinking" required></textarea>
                <button type="submit" name="submit">Submit</button>
            </form>
        </div>

        <footer id="footer" class="column">
            <p><i class="center fa fa-copyright"></i> Website by Amalgam 2020. All rights reserved</p>
        </footer>

    </body>
</html>