<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schedule Upload</title>
</head>
<body>
<div class="extra">
        <form action="upload.php" method="post" enctype="multipart/form-data" >
            <h2>Upload your schedule here:</h2>
            <input type="file" name="schedule" id="schedule">
            <input type="submit" value="Upload Your Schedule" name="submitSchedule">
        </form>
    </div>
</body>
</html>