<!DOCTYPE html>
<html ng-app="myApp">
    <head>
        <title>Neha Chaudhary Seth - Contact Me</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap -->
        <link href="css/headerAndFooter.scss" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <script src="js/bootstrap.min.js"></script>
        <script src="js/angular.min.js"></script>
        <script src="jquery.min.js"></script>
        <script src="contactNeha1.js"></script>
        <script src="contact.js"></script>
        <style>
            .btn {
                font-family: Arial,sans-serif;
                margin-top: 30px;
                margin-bottom: 0px;
                padding-top: 10px;
            }
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
            .form {
                //background-color: #2aabd2;
                font-family: Arial,sans-serif;
               width: 70%;
                    
            }
            .form-group {
                margin-top: 20px;
            }
        </style>
    </head>
    
    <body>
        <?php include("header.html");?>
        <div class="jumbotron">
            <div class="container intro">
                <h1>Contact Neha</h1><br />
                <h2>Use the following form to send a message to Neha<h2>
            </div>
        </div>
        
        <?php
$servername = "localhost";
$username = "root";
$password = "monalisa";
$dbname = "contacts";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql= "INSERT INTO contacts  VALUES (2,'abc','abc@gmail.com','3245237846','abc.com','internet','hi abc')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

        <!-- Form to be filled by user -->

                <h3>Rules</h3>
                <ul>
                    <li ng-repeat="rule in rules">
                        {{ rule.RuleName }}
                    </li>
                </ul>

                
            </div>
            
		</div>


        <div class="form container" ng-controller="mainController" >
            <div class="form-group">
                <label for="inputname">Your Name</label>
                <input type="text" class="form-control input-lg" id="inputname" placeholder="eg.Neha Chaudhary Seth" ng-model="yourName">
            </div>
            <div class="form-group">
            <label for="inputEmail">Email address</label>
            <input type="email" class="form-control input-lg" id="inputEmail " placeholder="eg.neha.1feb@gmail.com" ng-model="email">
            </div>
            <div class="form-group">
                <label for="inputphone">Telephone Number/ Mobile   </label>
                <input type="text" class="form-control input-lg" id="inputphone " placeholder="eg. +49 (0)152 1789068" ng-model="telephone">
            </div>
            <div class="form-group">
                <label for="inputweb">Your Website</label>
                <input type="text" class="form-control input-lg" id="inputweb" placeholder="eg.getbootstrap.com" ng-model="webName">
            </div>
            <div class="form-group">
                <label for="inputhow">How did you hear about Neha</label>
                <input type="text" class="form-control input-lg" id="inputhow" placeholder="eg.Twitter or linkedIn or Facebook etc " ng-model="howYouKnowMe">
            </div>
            <div class="form-group">
                <label for="textmessage">Message</label>
            <textarea class="form-control" rows="6" id="textmessage" ng-model="message"></textarea>
            </div>
            <a href="#" class="btn btn-lg btn-info" ng-model="newRule" ng-click="addRule()">Send</a>
     
        </div>
  <?php include("footer.html");?>
    </body>
</html>

