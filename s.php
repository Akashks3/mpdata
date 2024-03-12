<?php

// PHP program to pop an alert

// message box on the screen 

// Display the alert box 

echo '<script>alert("Welcome to Geeks for Geeks")</script>';

?>

<html>

<head>

<script>

    function myFunction() {

        var x;

        var r = confirm("Press a button!");

        if (r == true) {

            x = "You pressed OK!";

        }

        else {

            x = "You pressed Cancel!";

        }

        document.getElementById("demo").innerHTML = x;

    }

</script>

</head>

<body>

<?php

?>

<button onclick="myFunction()">Click Me</button>

<p id="demo"></p>

</body>

</html>
<?php

echo '<script type="text/javascript">

            window.onload = function () { alert("Welcome at c-sharpcorner.com."); }

</script>';

