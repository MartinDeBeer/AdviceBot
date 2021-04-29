<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="Images/favicon.ico" type="image/x-icon" />
    <link href="Stylesheets/styles.css" type="text/css" rel="stylesheet" />
    <title>Document</title>
</head>
<body>
    <form action="dataPages/feedbackLogic.php" method="post">
        <div id="details">
            <label for="emailAddress">Please input your email address</label>
            <input type="text" id="emailAddress" name="emailAddress" required>
        </div>
        <div id="comments">
            <label for="comment">Please leave your opinion here:</label>
            <textarea name="comment" id="comment" cols="50" rows="11" placeholder="The bot is really cool, I like the design and the fact that it is easy to use." maxlength="500" required></textarea><br>
            <p><span id="charsTyped">0</span> / <span id="charsLeft">500</span></p>
            <input type="submit" value="Submit" name="submit">
        </div>
    </form>
</body>
</html>
