<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,shrink-to-fit=no">
    <link href="style.css" type="text/css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <?php include 'header.php';?>
        <form method="post">
            <div style="height:50vh;text-align:center;margin-top:3%;font-size:30px;">
            Name : <input type="text" name="username" style="font-size:20px;width:25%;"><br><br>
            Email : <input type="text" name="email" style="font-size:20px;width:25%;"><br><br>
            Message : <input type="textarea" name="message" style="font-size:20px;height:15vh;width:25%;"><br><br>
            <input type="submit"  name="submit" value="submit" style="font-size:30px;border-radius:10px;background-color:#673ab7;">
            </div>

        </form>
    <?php include 'footer.php';?>
</body>
</html>