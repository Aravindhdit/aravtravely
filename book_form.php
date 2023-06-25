<?php
    $connection = mysqli_connect('localhost','root','','booking');

    if(isset($_POST['send'])){
        $Name = $_POST['Name'];
        $Email = $_POST['Email'];
        $Phone = $_POST['Phone'];
        $Address = $_POST['Address'];
        $Where To = $_POST['Where To'];
        $Passengers = $_POST['Passengers'];
        $Arrivals = $_POST['Arrivals'];
        $Departures = $_POST['Departures'];

        $request="INSERT INTO book_form(Name,Email,Phone,Address,Where To,Passengers,Arrivals,Departures) VALUES
         ('$Name','$Email','$Phone','$Address','$Where To','$Passengers','$Arrivals','$Departures')";

        $result=mysqli_query($connection,$request) ;

        INSERT INTO `booking` (`name`, `email`, `phone`, `address`, `whereto`, `passengers`, `arrivals`, `departures`, `booked`) VALUES ('', '', '', '', '', '', '', '', '')

        mysqli_close($connection);

        header('location:booking.html');
    }else{
        echo 'something went wrong try again'; 
    }

   

?>
 

 