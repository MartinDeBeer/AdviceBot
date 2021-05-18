<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="Scripts/reports.js"></script>
    <title>Schedule Upload</title>
</head>
<body>
<h2>Upload your schedule here:</h2>
        <input type="file" name="schedule" id="schedule">
        <input id="submitSchedule" type="button" value="Upload Your Schedule" name="submitSchedule" onclick="uploadSchedule()">
        <p id="status"></p>
</body>
</html>