<!DOCTYPE html>
<html>
    <head>
        <title>Neha Chaudhary Seth -About</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/headerAndFooter.scss" rel="stylesheet">
        <style>
            #description {
                margin-left: 25%;
                width: 50%;
            }
            #description img {
                float: left;
                height: 150px;
                width: 200px;
                border: #000 medium solid;
                margin-right: 20px;
            }
            #description p {
                font-size: 0.9em;
                letter-spacing: 0.01em;
                line-height: 1.5em;
                margin-top: 2em;
            }
            #description >ul {
                list-style-type: disc;
                list-style-position: inside;
                line-height: 1.5em;
                margin-top: 1.0em;
            }
            #description> ul ul{
                list-style-type: circle;
                list-style-position: inside;
                margin-left: 20px;
                line-height: 1.5em;
                margin-top: 0.9em;
            }
            #description h2 {
                margin-top: 1.6em;
                font-size: 1.8em;    
                font-weight: bold;
            }
            #description .logo img{
                height: 100px;
                width: 120px;
                border: none;
                float: left;
            }
            #description .logo strong {
                vertical-align: baseline;  
                text-align: center;
            }
            .back_to_top,
            .back_to_top h2 {
                float: right;
                font-size: 1em;
                color: #2098d1;
                position: relative; 
                margin-right: 10px;
                padding-right: 10px;
            }
        </style>
    </head>
    
    <body>
        <?php include("header.html");?>
        <div class="jumbotron">
            <div class="container intro">
                <h1>Front-End Developer</h1>
                <h2>Learn about neha's Skill Set and the Type of work She Does<h2>
                <p><a class="btn btn-info btn-lg contact_button" href="contactNeha.html" role="button">Get In Touch</a></p>
            </div>
        </div>
        <div id='description'>  
            <img src='pics/d.jpg'>
            <p>I am a front-end developer, and I have done master's in Computer Applications. I have 1 year  experience working in  web related role like responsive web design, front-end development, and WordPress.</p>
            <p>Clients often approach me when they need someone who can provide the following:</p>
            <ul>
                <li >Front-End Development
                    <ul>
                        <li>HTML</li>
                        <li>CSS</li>
                        <li>JavaScript/Jquery</li>
                        <li>Performance</li>
                        <li>Animation</li>
                    </ul> 
                </li>
            </ul>
            <ul>
                <li>
                    Responsive Web Design
                    <ul>
                        <li>Bootstrap</li>
                        <li>Adobe Photoshop</li>
                    </ul>
                </li>
            </ul>
            <ul>
                <li>WordPress</li>
            </ul>
            <p>When designing and building a website I focus on producing a solution that achieves your goals at the same time as offering quality user experience. This involves producing a website that:</p>
            <ul>
                <li>Can be accessed on a wide range of devices such as TVs, mobile phones, tablets, and desktop computers via responsive design</li>
                <li>Is Optimized for performance</li>
                <li>Follows accessibility, search engine, and other best practices</li>
                <li>Uses technology progressively</li>
                <li>Is well documented and scalable</li>
            </ul>
            <p>I produce visually appealing websites with a focus on strong user experience through functional design and technology applied progressively. I like to use meaningful animation where appropriate.</p>
            <p>My workflow includes the use of:</p>
            <ul>
                <li>Git/GitHub</li>
                <li>Grunt</li>
                <li>Sass</li>
            </ul>
            <h2>Skills</h2>
            <p>I have a wide range of skills; web design, front-end development, and WordPress.</p>
            <p>I am able to work on a project with the full scope in mind; often producing a more cohesive experience for users. </p>
            <h2>Front-end Developer</h2>
            <div class="logo">
                <img src="pics/html5.png">
            </div>
                <div class="logo">
                    <img src="pics/css3.png">
                </div>
            <div class="logo">
            <img src="pics/jslogo.png">
            </div>
            <p>I create websites that allow the user to experience a website in the best and most appropriate way suited to the device they are using. By working using progressive enhancement, a website is delivered with a responsive layout that can best make use of the space available on the smallest to largest devices. Cross browser compatibility is ensured by using feature detection so older browsers still in use today provide a solid experience, whilst modern browsers can go the next step and enhance the users time spent on your site.</p>
            <p>Writing semantic markup that is documented and easy to read means it can be maintained and scaled in the future, and allows co-workers to quickly work with it.</p>
            <h2>Wordpress Developer</h2>
            <p>Along with the designs and front-end development</p>
            <h2>Other Skills</h2>
            <p>I rely on tools and open-source libraries such as jQuery, Sass, Git, Grunt. I also create my own open-source libraries and share them on GitHub</p>
            <h2>Learn More</h2>
            <p>If you’d like to find out more about how I work and my process of working, please visit the contact page.</p>
        </div> <!-- description-->
        <div class="back_to_top">
            <a href="#"><span class="glyphicon glyphicon-circle-arrow-up" aria-hidden="true"></span>
            <h2>Back To Top</h2>
            </a>
        </div>
        <?php include("footer.html");?>
        <script src="js/bootstrap.min.js"></script>
        <script src="jquery.min.js"></script>
    </body>
</html>


