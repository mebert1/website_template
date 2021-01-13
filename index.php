<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marius Ebert</title>
    <link rel="stylesheet" href="style.css">
    <!-- awesome font script integration -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <!-- jquery integration -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- typed js script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
</head>
<body>
    <div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>
    <nav class ="navbar">
        <div class ="max-width">
            <!-- Option: "Portfolio" text can also be replaced with your own logo -->
            <div class="logo"><a href="#">Portfo<span>lio.</span></a></div>
            <ul class="menu">
                <li><a href="#home" class="menu-btn">Home</a></li>
                <li><a href="#about" class="menu-btn">About</a></li>
                <li><a href="#skills" class="menu-btn">Skills</a></li>
                <li><a href="#contact" class="menu-btn">Contact</a></li>
                <li class="menu-btn">
                <!-- TODO: "Insert links to your social media profiles in all three sections" -->
                    <a class="social-media" id="github" href="" target="_blank" rel="noopener noreferrer">
                        <i class="fab fa-github"></i>
                    </a>
                    <a class="social-media" id="linkedin" href="" target="_blank" 
                    rel="noopener noreferrer">
                        <i class="fab fa-linkedin"></i>
                    </a>
                    <a class="social-media" id="twitter" href="" target="_blank" 
                    rel="noopener noreferrer">
                        <i class="fab fa-twitter"></i>
                    </a>
                </li>
            </ul>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>

    <!-- home section start -->
    <section class="home" id="home">
        <div class="flashlight"></div>
        <div class="max-width">
            <div class="home-content">
                <div class="text-1">Hello, my name is</div>
                <!-- TODO: Insert your name here -->
                <div class="text-2">****</div>
                <div class="text-3">And I'm a<span class="typing"></span></div>
                <a href="#contact">Contact me</a>
            </div>
        </div>
    </section>

    <!-- about section start -->
    <section class="about" id="about">
        <div class="max-width">
            <h2 class="title">About me</h2>
            <div class="about-content">
                <div class="column left">
                    <!-- TODO: replace placeholder profile picture with an image of yourself -->
                    <img src="img/profile_picture.jpg" alt="">
                </div>
                <div class="column right">
                    <!-- TODO: Insert your name here -->
                    <div class="text">I'm **** and I'm a<span class="typing-2"></span></div>
                    <!-- TODO: Insert an introduction of yourself and your work here -->
                    <p> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam debitis distinctio dicta temporibus voluptates quae doloribus harum qui, officia sit et minus aliquam libero, quisquam numquam? Id unde velit nihil.
                    </p>
                    <a href="#">Download CV</a>
                </div>
            </div>
        </div>
    </section>

    <!-- skills section start -->
    <section class="skills" id="skills">
        <div class="max-width">
            <h2 class="title">My Skills</h2>
            <div class="skills-content">

                <div class="card">
                    <div class="box">
                        <i class="fas fa-code"></i>
                        <div class="text">Skill 1</div>
                        <p>Description/Examples</p>
                    </div>
                </div>

                <div class="card">
                    <div class="box">
                        <i class="fab fa-connectdevelop"></i>
                        <div class="text">Skill 2</div>
                        <p>Description/Examples</p>
                    </div>
                </div>

                <div class="card">
                    <div class="box">
                        <i class="fas fa-laptop-code"></i>
                        <div class="text">Skill 3</div>
                        <p>Description/Examples</p>
                    </div>
                </div>

                <div class="card">
                    <div class="box">
                        <i class="fab fa-git-alt"></i>
                        <div class="text">Skill 4</div>
                        <p>Description/Examples</p>
                    </div>
                </div>

                <div class="card">
                    <div class="box">
                        <i class="far fa-comment-dots"></i>
                        <div class="text">Skill 5</div>
                        <p>Description/Examples</p>
                    </div>
                </div>

                <!-- Option: Add another skill if you feel like it -->
            </div>
        </div>
    </section>

    <!-- contact section start -->
    <section class="contact" id="contact">
        <div class="max-width">
            <h2 class="title">Contact me</h2>
            <div class="contact-content">
                <div class="column left">
                    <div class="text">Get in touch</div>
                    <!-- TODO: Insert links to social media profiles in all three sections -->
                    <a class="social-media" id="github" href="" target="_blank" rel="noopener noreferrer">
                        <i class="fab fa-github"></i>
                    </a>
                    <a class="social-media" id="linkedin" href="" target="_blank" 
                    rel="noopener noreferrer">
                        <i class="fab fa-linkedin"></i>
                    </a>
                    <a class="social-media" id="twitter" href="" target="_blank" 
                    rel="noopener noreferrer">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <!-- TODO: Describe what people should contact you for -->
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                    <div class="icons">
                        <div class="row">
                            <i class="fas fa-user"></i>
                            <div class="info">
                                <div class="head">Name</div>
                                <!-- TODO: Insert your name here -->
                                <div class="sub-title">****</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="info">
                                <div class="head">Address</div>
                                <!-- TODO: Insert your city or address here -->
                                <div class="sub-title">****</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-envelope"></i>
                            <div class="info">
                                <div class="head">Email</div>
                                <!-- TODO: Insert your email address here -->
                                <div class="sub-title">****</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="column right">
                    <div class="text">Message me</div>
                    <form action="contactform.php" method="POST">
                        <div class="fields">
                            <div class="field name">
                                <input type="text" placeholder="Name" name="name" required>
                            </div>
                            <div class="field email">
                                <input type="email" placeholder="Email" name="email" required>
                            </div>
                        </div>
                        <div class="field">
                            <input type="text" placeholder="Subject" name="subject" required>
                        </div>
                        <div class="field textarea">
                            <textarea cols="30" rows="20" placeholder="Message ..."  name="message" required></textarea>
                        </div>
                        <div class="button">
                            <button type="submit" name="submit">Send</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>

    <!-- footer section start -->
    <footer>
        <span>Created with template by <a href="http://www.mariusebert.com">Marius Ebert</a> | <span class="far fa-copyright"></span> 2020 All rights reserved.</span>
    </footer>

    <script src="script.js"></script>
</body>
</html>