<!DOCTYPE html>
<html>
<head>
    <title>Cookie-Based Background Color</title>
</head>
<body>
    <form method="post">
        <label for="color">Choose a color:</label>
        <select name="color" id="color">
            <option value="red">Red</option>
            <option value="green">Green</option>
            <option value="blue">Blue</option>
            </select>
        <input type="submit" value="Set Color">
    </form>

    <?php
    
    if (isset($_POST['color'])) {
        setcookie("bgColor", $_POST['color'], time() + 3600); 
        header("Location:ques11.php"); 
        exit;
    }

   
    $bgColor = isset($_COOKIE['bgColor']) ? $_COOKIE['bgColor'] : 'white'; 
    ?>

    <style>
        body {
            background-color: <?php echo $bgColor; ?>;
        }
    </style>
</body>
</html>




