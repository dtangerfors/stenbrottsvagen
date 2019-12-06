<?php
    if(isset($_POST['Submit'])){

        $bookName = $_POST['bookName'];
        $guests = $_POST['guests'];
        $checkIn = $_POST['checkIn'];
        $checkOut = $_POST['checkOut'];
        $roomsArray = $_POST['rooms'];

        $rooms = implode(", ", $roomsArray);

        // $rooms = '';
        // foreach( $roomsArray as $key => $roomsValue){$rooms = implode(', ', $roomsArray);} 
                    
                    #Get old bookings
                    $old = fopen("bookings.txt", "r+t");
                    $old_bookings = fread($old, 40000);

                    #Delete everything, write down new and old bookings
                    $write = fopen("bookings.txt", "w+");
                    $string ="<div class='row'><div class='card'><p class='card__paragraph'><span class='card__paragraph--sub'>Bokning gjord av</span><span class='card__paragraph--main text-cut'>".$bookName."</span></p><p class='card__paragraph'><span class='card__paragraph--sub'>Antal gäster</span><span class='card__paragraph--main'>".$guests."</span></p><p class='card__paragraph'><span class='card__paragraph--sub'>Incheckning</span><span class='card__paragraph--main'>".$checkIn."</span></p><p class='card__paragraph'><span class='card__paragraph--sub'>Utcheckning</span><span class='card__paragraph--main'>".$checkOut."</span></p><p class='card__paragraph'><span class='card__paragraph--sub'>Rum/stugor vi kommer använda</span><span class='card__paragraph--main'>".$rooms."</span></p></div></div>\n".$old_bookings;
                    fwrite($write, $string);
                    fclose($write);
                    fclose($old);
    }

                    #Read bookings
                    $read = fopen("bookings.txt", "r+t");
                    echo fread($read, 40000);
                    fclose($read);
?>