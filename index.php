<!DOCTYPE html>
<html>
    <head>
        <title>Neha Chaudhary Seth - Portfolio</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/headerAndFooter.scss" rel="stylesheet">
        <style>
            .my_work {
                width: 1000px;
                margin: 0 auto;
            }
            section h2 {
                font-size: 1.625em;
                font-weight: 900;
                text-transform: uppercase;
                text-align: left;
                margin-top: 1.5em;
                margin-bottom: .4em;    
            }
            .skills_button {
                width: 300px;
                margin: 0 auto;
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
                <h1>Building creative & effective websites</h1>
                <h2>Specialising in Html5, Css3, JavaScript,responsive design(Bootstrap),<br /> animation, and performance<h2>
                        <p><a class="btn btn-info btn-lg contact_button" href="contacttemp.php" role="button">Get In Touch</a></p>
            </div>
        </div>
        <section class="my_work">
            <h2>Portfolio</h2>
                <div class="row">
                    <div class="col-sm-6 col-md-4 ">
                        <div class="thumbnail">
                            <img src="pics/aakrit_album.png" alt="Aakrit Photo Album ">
                            <div class="caption">
                                <h3>Photo Album</h3>
                                <p>Design,HTML5,CSS3,Responsive(Twitter Bootstrap),Jquery</p>
                                <p><a href="http://localhost/aakuweb/aaku.html" class="btn btn-primary" role="button">Website</a> <a href="#" class="btn btn-default" role="button">Details</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <img src="pics/portfolio.png" alt="My Portfolio">
                            <div class="caption">
                                <h3>Portfoliol</h3>
                                <p>Design,HTML5,CSS3,Responsive(Twitter Bootstrap),Jquery</p>
                                <p><a href="http://localhost/neha_portfolio/index.html" class="btn btn-primary" role="button">Wesite</a> <a href="#" class="btn btn-default" role="button">Details</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <img src="pics/shapes.png" alt="CSS Shapes">
                            <div class="caption">
                                <h3>Thumbnail label</h3>
                                <p>Design,HTML5,CSS3,Responsive(Twitter Bootstrap),Jquery</p>
                                <p><a href="#" class="btn btn-primary" role="button">Website</a> <a href="#" class="btn btn-default" role="button">Details</a></p>
                            </div>
                        </div>
                    </div>
                   
                </div>
        </section>
        <section class="i_can_help_you">
            <div class="skills_button">
            <p><a href="#" class="btn btn-primary btn-block" role="button">Discover How Neha Can Help You</a> </p>
            </div>
        </section>  
        <div class="back_to_top">
            <a href="#"><span class="glyphicon glyphicon-circle-arrow-up" aria-hidden="true"></span>
            <h2>Back To Top</h2>
            </a>
        </div>
        <?php include("footer.html");?>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.min.js"></script>
    </body>
</html>