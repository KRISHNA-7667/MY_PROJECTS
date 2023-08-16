<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Krish Eco Sustainables - Contact</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-size: cover;
            background-position: center;
            color: white;
        }

        #header {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 20px;
            background-image: url('background1.png');
        }

        #logo-menu {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
        }

        #logo {
            width: 250 px;
            height: 150px;
        }

        #menu {
            display: flex;
            align-items: center;
        }

            #menu a {
                color: black;
                margin: 0 10px;
                text-decoration: none;
                font-weight: bold;
            }

        h1 {
            text-align: center;
            color: #2cfc03;
            border: 2px solid blue;
            text-shadow: 3px 3px 0px darkgreen;
            padding: 10px;
            margin-top: 20px;
            isplay: inline-block;
        }
        #section1 {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 50px;
        }
        #contact {
            width: 45%;
            background-image: url('TALK TO US.png');
            background-size: cover;
            background-position: center;
            padding:  50px 0;
            text-align: center;
            color: darkgreen;
        }

            #contact h2 {
                font-weight: bold;
            }
           
        #enquiry-form {
            width: 45%;
            margin: 0;
            padding: 50px;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            background-image: url('background2.png');
        }

            #enquiry-form input,
            #enquiry-form textarea {
                width: 100%;
                margin-bottom: 20px;
                padding: 10px;
                border: none;
                border-radius: 5px;
                background-color: rgba(255, 255, 255, 0.5);
                color: black;
            }
            #enquiry-form p{
                color: solid black;
            }
        input::placeholder {
            color: black;
            font-weight: bold;
        }

        textarea::placeholder {
            color: black;
            font-weight: bold;
        }

        #enquiry-form select,
        #enquiry-form button {
            width: 100%;
            margin-bottom: 20px;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: rgba(255, 255, 255, 0.2);
            color: black;
        }

        #enquiry-form button {
            background-color: green;
            cursor: pointer;
        }

        h3 {
            color: black;
            text-align: center;
        }
    </style>
    <script>
        function validateForm() {
            var name = document.forms["enquiryForm"]["name"].value;
            var email = document.forms["enquiryForm"]["email"].value;
            var phone = document.forms["enquiryForm"]["phone"].value;

            if (name === "" || email === "" || phone === "") {
                alert("All fields are required.");
                return false;
            }
            function validateEmail(email) {
                var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
                return emailPattern.test(email);
            }

            function validatePhone(phone) {
                var phonePattern = /^\d{10}$/;
                return phonePattern.test(phone);
            }
            return true;
        }
        function changeThankYouColor() {
        var thankYouMessage = document.getElementById("thankYouMessage");
        thankYouMessage.style.color = "black"; // Change to your desired color
        }
    </script>
</head>
<body>
    <div id="header">
        <div id="logo-menu">
            <img id="logo" src="logo.jpg" alt="Logo"><br />
            <div id="menu">
                <a href="HTMLPage4.html"><b>Home</b></a>
                <a href="HTMLPage5.html"><b>About Us</b></a>
                <a href="HTMLPage6.html"><b>Services</b></a>
                <a href="HTMLPage7.php"><b>Contact</b></a>
                <a href="SAMP.php"><b>Enquiry</b></a>
            </div>
        </div>
        <h1>CONTACT US</h1><br /><br /><br /><br /><br /><br /><br><br><br>
    </div>

    <div id="section1">
        <div id="enquiry-form">
             <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $name = $_POST["name"];
                echo '<p id="thankYouMessage">THANK YOU FOR VISITING US, WE WILL CONTACT YOU SOON MR/MIS <strong>' . $name . '</strong></p>';
echo '<script>changeThankYouColor();</script>';
            } else {
            ?>
            <form name="enquiryForm" action="" method="post" onsubmit="return validateForm()">
                <input type="text" name="name" placeholder="Your Name" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="tel" name="phone" placeholder="Phone no" required>
                <textarea name="message" placeholder="Leave a message"></textarea>
                <button type="submit">Send Message</button>
            </form>
            <?php } ?>
        </div>
        <div id="contact">
            <h2>TALK TO US</h2><br /><br /><br />
            <h3>ADDRESS:<br></h3>
            <p>MANGALGIRI,AP</p><br /><br />
            <h3>PHONE NO:<br></h3>
            <p>7032589156</p><br /><br />
            <h3>EMAIL ID:<br></h3>
            <p>vammsi.21bce7667@vitapstudent.ac.in</p>
        </div>
     </div>
</body>
</html>
