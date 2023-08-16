<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enquiry Form</title>
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

    #enquiry-form {
            max-width: 600px;
            margin: 0 auto;
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

        input::placeholder {
            color: black;
            font-weight: bold;
        }

        textarea::placeholder {
            font-weight: bold;
            color: black;
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
        h2{
        color: #000080;
        }
        responses {
         background-color: green;
            cursor: pointer;   
        }
    </style>
</head>
<body>
    <!-- Header Section -->
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
        <h1>ENQUIRY</h1><br /><br /><br /><br /><br /><br /><br /><br /><br />
    </div>
    <br><br><br>
    <!-- Enquiry Form Section -->
    <div id="enquiry-form">
        <?php
         $contactPerson = $companyName = $address = $country = $email = $phone = $mobile = $subject = $details = '';

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $contactPerson = $_POST["contactPerson"];
            $companyName = $_POST["companyName"];
            $address = $_POST["address"];
            $country = $_POST["country"];
            $email = $_POST["email"];
            $phone = $_POST["phone"];
            $mobile = $_POST["mobile"];
            $subject = $_POST["subject"];
            $details = $_POST["details"];
        }
        ?>
        <form name="enquiryForm" action="" method="post" onsubmit="return validateForm()">
             <h2>Contact Information</h2>
            <input type="text" name="contactPerson" placeholder="Contact Person *" required>
            <input type="text" name="companyName" placeholder="Company Name">
            <input type="text" name="address" placeholder="Address">
            <input type="text" name="country" placeholder="Country *" required>
            <input type="email" name="email" placeholder="Email ID *" required>
            <input type="tel" name="phone" placeholder="Phone Number">
            <input type="tel" name="mobile" placeholder="Mobile Number *" required>

            <h2>Details</h2>
            <input type="text" name="subject" placeholder="Subject *" required>
            <textarea name="details" placeholder="Details *"></textarea>

            <button type="submit">Submit</button>
        </form>
        
    <!-- Responses Section -->
    <div id="responses">
        <?php
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
            echo "<h2>Responses</h2>";
            echo "<p>Contact Person: $contactPerson</p>";
            echo "<p>Email ID: $email</p>";
            // Display other relevant information here
        }
        ?>
        <?php


// Create a connection
$conn = new mysqli("localhost","root","","db2");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $contactPerson = $_POST["contactPerson"];
    $email = $_POST["email"];

    // Insert responses into the database
    $sql = "INSERT INTO enquiry  VALUES ('contactPerson','compnam','address','country','email','Phno','Mobno','sub','det')";

    if ($conn->query($sql) === TRUE) {
        echo "<p>Enquiry submitted successfully!</p>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
    </div>
    <?php


// Create a connection
$conn = new mysqli("localhost", "root", "", "db2");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $contactPerson = $_POST["contactPerson"];
    $email = $_POST["email"];

    // Retrieve matched responses from the database
    $sql =  "SELECT * FROM enquiry WHERE contactPerson = '$contactPerson' AND email = '$email'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<p>Contact Person: " . $row["contactPerson"] . "</p>";
            echo "<p>Email ID: " . $row["email"] . "</p>";
            echo "<p>Company Name: " . $row["compnam"] . "</p>";
            echo "<p>Address: " . $row["address"] . "</p>";
            echo "<p>Country: " . $row["country"] . "</p>";
            echo "<p>Phone Number: " . $row["Phno"] . "</p>";
            echo "<p>Mobile Number: " . $row["Mobno"] . "</p>";
            echo "<p>Subject: " . $row["sub"] . "</p>";
            echo "<p>Details: " . $row["det"] . "</p>";

        }
    } else {
        echo "<p>No Enquiry Log Found!</p>";
    }
}

$conn->close();
?>
    </div>

    <script>
        function validateForm() {
            var name = document.forms["enquiryForm"]["name"].value;
            var email = document.forms["enquiryForm"]["email"].value;
            var phone = document.forms["enquiryForm"]["phone"].value;

            if (name === "") {
                alert("Please provide your name");
                return false;
            }

            if (email === "") {
                alert("Please provide your email");
                return false;
            } else if (!validateEmail(email)) {
                alert("Invalid email format");
                return false;
            }

            if (phone === "") {
                alert("Please provide your phone number");
                return false;
            } else if (!validatePhone(phone)) {
                alert("Invalid phone number format");
                return false;
            }
        }

        function validateEmail(email) {
            var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
            return emailPattern.test(email);
        }

        function validatePhone(phone) {
            var phonePattern = /^\d{10}$/;
            return phonePattern.test(phone);
        }
    </script>
    <a href="HTMLPage7.php"><b>Contact</b></a>
</body>
</html>
