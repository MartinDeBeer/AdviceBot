<?php
    include('connectDB.php');
   
    

    if(isset($_POST['submit'])){
        $emailAddress = $_POST['emailAddress'];
        $comment = $_POST['comment'];
        if(!empty($emailAddress)){
            if(!empty($comment)){
                $postToDb = "INSERT INTO feedback values (Null,  '$emailAddress', '$comment')";
                $result = mysqli_query($conn, $postToDb);
                echo "Thank you for your input.";
                header("location: feedback.php");
            }else{
                echo "Please leave us some feedback so we can make the program better.";
            }
        }else{
            echo "Please leave us an email address so we can contact you if necessary.";
        }
    }
?>