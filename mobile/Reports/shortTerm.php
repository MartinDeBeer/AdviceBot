<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Short Term Insurance</title>
    <script>
        function uploadSchedule(){
            let subject = "Short term schedule";
            let address = 'adriaan@advicebot.co.za';
            let body = "<a href='C:/'>Find document</a>";
            window.location.href = "mailto:" + address + "?subject=" + subject + "&body=" + body;
        }
    </script>
</head>
<body>
    <h1 style="text-align: center;">Short term Insurance</h1>

    <p>You mentioned that you own certain assets.
    Home or Car insurance is an essential part of any financial plan. It’s the business of your insurance company to put you back in the same financial position you were before an accident or specific event that caused you damage or lost. The insurance company will also cover your liability towards others. <br>
    Home insurance can be divided into building or content insurance. Your car insurance can be specified to be comprehensive, only third part theft and fire or only third party. It you financed your vehicle through a bank or finance company, comprehensive cover will usually be compulsory. </p>
    <h3><u>IFAA TIP:</u></h3>
    <p>I’m independent. I represent you as client. I do not represent any insurance company. This is especially important at claim stage. </p>
    <p>Every insurance company has its own unique products and value-added service. <br>
    Luckily for you we can offer you a wide verity of products from most of the insurance companies. <br>
     </p>
     We can compare your current insurance schedule to other offers in the market and see if your premium is still market related or if you can perhaps save on your monthly expenses. <br>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <h2>Upload your schedule here:</h2>
        <input type="file" name="schedule" id="schedule">
        <input type="submit" value="Upload Your Schedule" name="submitSchedule">
    </form>
    <input type="button" id="noSchedule" value="I don't have a schedule" onclick="tellMore('noSchedule')">
    <input type="button" id="help" value="I need help" onclick="tellMore('help')" >

    <hr>
</body>
</html>