<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    
</head>
<body>
    <form action="connect1.php" method="post">
        
    <fieldset>
        <legend>FORM</legend>
        <input type="text" class="color" name="fname" id="fname" placeholder="Enter Your First Name">
        <br><br>
        <input type="text"class="color" name="lname" id="lname" placeholder="Enter Your Last Name">
        <br><br>
        <input type="text"class="color" name="email" id="email" placeholder="Enter Your Email">
        <br><br>
        <input type="number" class="color"name="pnum" id="pnum" placeholder="Enter Your Phone No.">
        <br><br>
        <textarea name="massage"class="color" id="massage" cols="60" rows="10" placeholder="Enter massage"></textarea>
        <br><br>
        <button type="submit" id="submit">Submit</button>
    </fieldset>

    </form>

    <script>
        var a=document.getElementsByTagName('fieldset');
        a[0].style.background="gray";
    </script>



</body>
</html>