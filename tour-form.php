<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" type="text/css" href="css/tour-form.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="sweetalert2.all.min.js"></script>


</head>

<body>
  
<script src="javascript/alerts.js"> </script>

<?php  


    if (isset($_POST['submit'])){



        // getting the values in the form
        // trim to remove white spaces
        $fullName = trim($_POST['fullName']);
        $email = trim($_POST['email']);
        $time = $_POST['time'];
        $date = $_POST['date'];
        $tours = $_POST['tours'];
        $inquiry = $_POST['inquire'];;


        if ($fullName && $email && $time && $date && $tours && $inquiry){
  
         // email values, (what will we receive)
         $ourEmail = "virtuae.team@gmail.com";
         $subject =  $tours ." Zoom Tour Inquiry";
         $header = "From: " . $email;
         $message = "You have received an inquiry from " . $fullName . " \n\n Date: " . $date . " \n\n ";
         $message .= "Time: " . $time . " \n\n " . "Tour: " . $tours . " \n\n\n" . $inquiry;  

       
          // sending the email to $ourEmail, but since this is a localhost, email wont be sent.
          // mail($ourEmail, $subject, $message, $header);
            echo '<script type="text/javascript">','success();','</script>';

        }

        else{
            echo '<script type="text/javascript">','blankError();','</script>';
        }

    }



?>

    <div class="container">

        <h1>Book an Online Tour</h1>
        <button onclick="info();"> ? </button> 
        
        <form action="tour-form.php" method="POST">

   


        <div class="forms">
            <div class="forms1">
                <p class="name-label">Full Name</p>
                <p class="lname-label">Email</p>
            </div>
            <input class="first-name" type="text" placeholder="Full Name" name="fullName" /> 
            <input class="last-name" type="email" placeholder="Email " name= "email" />
            <div class="forms2">
                <p class="time-label">Time</p>
                <p class="date-label">Date</p>
            </div>
            <input class="time" type="time" placeholder="10:00 AM" name=  "time" /> 
            <input class="date" type="date" placeholder="DD/MM/YYYY" name = "date" />
            <div class="forms3">
                <label for="tours" class="tour-label">Tour</label>
                <div class="tour-loc">
                    <select name="tours" id="tours">
                        <option value="none" disabled selected>Choose Tour</option>
                        <option value="Cascade Dining, Abu Dhabi">Cascade Dining, Abu Dhabi</option>
                        <option value="Catch at St. Regis, Abu Dhabi">Catch at St. Regis, Abu Dhabi</option>
                        <option value="Cipriani, Abu Dhabi">Cipriani, Abu Dhabi</option>
                        <option value="Emirates Palace, Abu Dhabi">Emirates Palace, Abu Dhabi</option>
                        <option value="Emirates Park Zoo, Abu Dhabi">Emirates Park Zoo, Abu Dhabi</option>
                        <option value="Ferrari World, Abu Dhabi">Ferrari World, Abu Dhabi</option>
                        <option value="Heritage Village, Abu Dhabi">Heritage Village, Abu Dhabi</option>
                        <option value="Louvre, Abu Dhabi">Louvre, Abu Dhabi</option>
                        <option value="Observation Deck at 300, Abu Dhabi">Observation Deck at 300, Abu Dhabi</option>
                        <option value=">Sheikh Zayed Grand Mosque, Abu Dhabi">Sheikh Zayed Grand Mosque, Abu Dhabi</option>
                        <option value="The Terrace on the Corniche, Abu Dhabi">The Terrace on the Corniche, Abu Dhabi</option>
                        <option value="Warner Bros World, Abu Dhabi">Warner Bros World, Abu Dhabi</option>
                        <option value="Yas Island, Abu Dhabi">Yas Island, Abu Dhabi</option>
                        <option value="Yas Mall, Abu Dhabi">Yas Mall, Abu Dhabi</option>
                        <option value="Yas Marina Circuit, Abu Dhabi">Yas Marina Circuit, Abu Dhabi</option>
                        <option value="Yas Viceroy, Abu Dhabi">Yas Viceroy, Abu Dhabi</option>
                        <option value="Yas Waterworld, Abu Dhabi">Yas Waterworld, Abu Dhabi</option>
                        <option value="Zaya Nurai Island, Abu Dhabi">Zaya Nurai Island, Abu Dhabi</option>
                        <option value="Ajman City Centre, Ajman">Ajman City Centre, Ajman</option>
                        <option value="Ajman Corniche, Ajman">Ajman Corniche, Ajman</option>
                        <option value="Ajman Dhow Building Yard, Ajman">Ajman Dhow Building Yard, Ajman</option>
                        <option value="Ajman Museum, Ajman">Ajman Museum, Ajman</option>
                        <option value="Al Murabba Watchtower, Ajman">Al Murabba Watchtower, Ajman</option>
                        <option value="Al Sinniyah Island, Ajman">Al Sinniyah Island, Ajman</option>
                        <option value="Al Zorah Natural Reserve, Ajman">Al Zorah Natural Reserve, Ajman</option>
                        <option value="Aqua Bounce Ajman, Ajman">Aqua Bounce Ajman, Ajman</option>
                        <option value="Bab Al Bahr, Ajman">Bab Al Bahr, Ajman</option>
                        <option value="Cafe Naseem, Ajman">Cafe Naseem, Ajman</option>
                        <option value="China Mall, Ajman">China Mall, Ajman</option>
                        <option value="Danial Restaurant, Ajman">Danial Restaurant, Ajman</option>
                        <option value="Dragon's Place, Ajman">Dragon's Place, Ajman</option>
                        <option value="Safi Steakhouse, Ajman">Safi Steakhouse, Ajman</option>
                        <option value="Al Fahidi Historical District, Dubai">Al Fahidi Historical District, Dubai</option>
                        <option value="Al Farooq Omar Ibn Al Khattab Mosque – Umm Suqueim, Dubai">Al Farooq Omar Ibn Al Khattab Mosque – Umm Suqueim, Dubai</option>
                        <option value="Al Salam Mosque, Dubai">Al Salam Mosque, Dubai</option>
                        <option value="Al Serkal Avenue, Dubai">Al Serkal Avenue, Dubai</option>
                        <option value="Al Shindagha Museum, Dubai">Al Shindagha Museum, Dubai</option>
                        <option value="Bollywood Parks, Dubai">Bollywood Parks, Dubai</option>
                        <option value="Burj Khalifa, Dubai">Burj Khalifa, Dubai</option>
                        <option value="Catch22, Dubai">Catch22, Dubai</option>
                        <option value="Dubai Aquarium and Underwater Zoo, Dubai">Dubai Aquarium and Underwater Zoo, Dubai</option>
                        <option value="Dubai Festival City Mall, Dubai">Dubai Festival City Mall, Dubai</option>
                        <option value="Dubai Frame, Dubai">Dubai Frame, Dubai</option>
                        <option value=">Dubai Mall, Dubai">Dubai Mall, Dubai</option>
                        <option value="Dubai Miracle Garden, Dubai">Dubai Miracle Garden, Dubai</option>
                        <option value="Dubai Opera, Dubai">Dubai Opera, Dubai</option>
                        <option value="Etihad Museum, Dubai">Etihad Museum, Dubai</option>
                        <option value="Global Village, Dubai">Global Village, Dubai</option>
                        <option value="IMG Worlds of Adventure, Dubai">IMG Worlds of Adventure, Dubai</option>
                        <option value="Iranian Mosque, Dubai">Iranian Mosque, Dubai</option>
                        <option value="Jumeirah Mosque, Dubai">Jumeirah Mosque, Dubai</option>
                        <option value="Khalifa Al Tajer Mosque, Dubai">Khalifa Al Tajer Mosque, Dubai</option>
                        <option value="Legoland, Dubai">Legoland, Dubai</option>
                        <option value="Malecon Restaurant, Dubai">Malecon Restaurant, Dubai</option>
                        <option value="Morimoto Restaurant, Dubai">Morimoto Restaurant, Dubai</option>
                        <option value="Pitfire Pizza, Dubai">Pitfire Pizza, Dubai</option>
                        <option value="Ski Dubai, Dubai">Ski Dubai, Dubai</option>
                        <option value="Skydive Dubai, Dubai">Skydive Dubai, Dubai</option>
                        <option value="The Buried Village of Al Madam, Dubai">The Buried Village of Al Madam, Dubai</option>
                        <option value="The Green Planet, Dubai">The Green Planet, Dubai</option>
                        <option value="Wild Wadi Waterpark, Dubai">Wild Wadi Waterpark, Dubai</option>
                        <option value="Wokyo Noodle Bar, Dubai">Wokyo Noodle Bar, Dubai</option>
                        <option value="Al Aqah Beach, Fujairah">Al Aqah Beach, Fujairah</option>
                        <option value="Al Meshwar Restaurant, Fujairah">Al Meshwar Restaurant, Fujairah</option>
                        <option value="Al-Bidyah Mosque, Fujairah">Al-Bidyah Mosque, Fujairah</option>
                        <option value="Al-Hayl Castle, Fujaira">Al-Hayl Castle, Fujairah</option>
                        <option value="Bitnah Fort, Fujairah">Bitnah Fort, Fujairah</option>
                        <option value="Crepes and Burgers LLC, Fujairah">Crepes and Burgers LLC, Fujairah</option>
                        <option value="Friday Market, Fujairah">Friday Market, Fujairah</option>
                        <option value="Fujairah Fort, Fujairah">Fujairah Fort, Fujairah</option>
                        <option value="Fujairah Museum, Fujairah">Fujairah Museum, Fujairah</option>
                        <option value="Hooked Seafood, Fujairah">Hooked Seafood, Fujairah</option>
                        <option value="Kalba Corniche Park, Fujairah">Kalba Corniche Park, Fujairah</option>
                        <option value="Shark Island, Fujairah">Shark Island, Fujairah</option>
                        <option value="Sheikh Zayed Grand Mosque, Fujairah">Sheikh Zayed Grand Mosque, Fujairah</option>
                        <option value="Snoopy Island, Fujairah">Snoopy Island, Fujairah</option>
                        <option value="The Bookstore, Fujairah">The Bookstore, Fujairah</option>
                        <option value="The Orangery, Fujairah">The Orangery, Fujairah</option>
                        <option value="Al Hamra Mall, Ras Al Khaimah">Al Hamra Mall, Ras Al Khaimah</option>
                        <option value="Al Manar Mall, Ras Al Khaimah">Al Manar Mall, Ras Al Khaimah</option>
                        <option value="Bassata Desert Village, Ras Al Khaimah">Bassata Desert Village, Ras Al Khaimah</option>
                        <option value="Dhayah Fort, Ras Al Khaimah">Dhayah Fort, Ras Al Khaimah</option>
                        <option value="Flamingo Beach, Ras Al Khaimah">Flamingo Beach, Ras Al Khaimah</option>
                        <option value="Hajar Mountains, Ras Al Khaimah">Hajar Mountains, Ras Al Khaimah</option>
                        <option value="Iceland Waterpark, Ras Al Khaimah">Iceland Waterpark, Ras Al Khaimah</option>
                        <option value="Al Jazirah Al Hamra, Ras Al Khaimah">Al Jazirah Al Hamra, Ras Al Khaimah</option>
                        <option value="Jebel Jais, Ras Al Khaimah">Jebel Jais, Ras Al Khaimah</option>
                        <option value="Meze, Ras Al Khaimah">Meze, Ras Al Khaimah</option>
                        <option value="Piaceri da Gustare, Ras Al Khaimah">Piaceri da Gustare, Ras Al Khaimah</option>
                        <option value="RAK Zoo, Ras Al Khaimah">RAK Zoo, Ras Al Khaimah</option>
                        <option value="Sanchaya, Ras Al Khaimah">Sanchaya, Ras Al Khaimah</option>
                        <option value="Saqr Park, Ras Al Khaimah">Saqr Park, Ras Al Khaimah</option>
                        <option value="Sheikh Zayed Mosque, Ras Al Khaimah">Sheikh Zayed Mosque, Ras Al Khaimah</option>
                        <option value="Shimal, Ras Al Khaimah">Shimal, Ras Al Khaimah</option>
                        <option value="Wadi Shawka, Ras Al Khaimah">Wadi Shawka, Ras Al Khaimah</option>
                        <option value="Waldorf Astoria, Ras Al Khaimah">Waldorf Astoria, Ras Al Khaimah</option>
                        <option value="zaitouna">Waldorf Astoria, Ras Al Khaimah</option>
                        <option value="Al Maghfira Mosque, Sharjah">Al Maghfira Mosque, Sharjah</option>
                        <option value="Al Montazah Park, Sharjah">Al Montazah Park, Sharjah</option>
                        <option value="Al Noor Island, Sharjah">Al Noor Island, Sharjah</option>
                        <option value="Al Noor Mosque, Sharjah">Al Noor Mosque, Sharjah</option>
                        <option value="Al Qasba, Sharjah">Al Qasba, Sharjah</option>
                        <option value="Al Qasba Mosque, Sharjah">Al Qasba Mosque, Sharjah</option>
                        <option value="Al Rafisah Dam, Sharjah">Al Rafisah Dam, Sharjah</option>
                        <option value="Al Hefaiyah Mountain Conservation Centre, Sharjah">Al Hefaiyah Mountain Conservation Centre, Sharjah</option>
                        <option value="Arabian Wildlife Centre, Sharjah">Arabian Wildlife Centre, Sharjah</option>
                        <option value="Baid Obaid Al Shams, Sharjah">Baid Obaid Al Shams, Sharjah</option>
                        <option value="Fen Cafe & Restaurant, Sharjah">Fen Cafe & Restaurant, Sharjah</option>
                        <option value="Gazebo Restaurant, Sharjah">Gazebo Restaurant, Sharjah</option>
                        <option value="Gold Souk, Sharjah">Gold Souk, Sharjah</option>
                        <option value="King Faisal Mosque, Sharjah">King Faisal Mosque, Sharjah</option>
                        <option value="Martyrs Square and Monument, Sharjah">Martyrs Square and Monument, Sharjah</option>
                        <option value="Mleiha Archeological Center, Sharja">Mleiha Archeological Center, Sharjah</option>
                        <option value="Ratios Coffee, Sharjah">Ratios Coffee, Sharjah</option>
                        <option value="Shakespeare and Co., Sharjah">Shakespeare and Co., Sharjah</option>
                        <option value="Sharjah Aquarium, Sharjah">Sharjah Aquarium, Sharjah</option>
                        <option value="Sharjah Archeology Museum, Sharjah">Sharjah Archeology Museum, Sharjah</option>
                        <option value="Sharjah Art Museum, Sharjah">Sharjah Art Museum, Sharjah</option>
                        <option value="Sharjah Desert Park, Sharjah">Sharjah Desert Park, Sharjah</option>
                        <option value="Sharjah Discovery Centre, Sharjah">Sharjah Discovery Centre, Sharjah</option>
                        <option value="Sharjah Mosque, Sharjah">Sharjah Mosque, Sharjah</option>
                        <option value="Sharjah Municipality Building, Sharjah">Sharjah Municipality Building, Sharjah</option>
                        <option value="Sharjah Science Museum, Sharjah">Sharjah Science Museum, Sharjah</option>
                        <option value="Waffee Street, Sharjah">Waffee Street, Sharjah</option>
                        <option value="wasit">Wasit Wetland Center, Sharjah</option>
                        <option value="Abandoned IL-76, Umm Al Quwain">Abandoned IL-76, Umm Al Quwain</option>
                        <option value="Al Labsa, Umm Al Quwain">Al Labsa, Umm Al Quwain</option>
                        <option value="Al Sinniyah Island, Umm Al Quwain">Al Sinniyah Island, Umm Al Quwain</option>
                        <option value="Al-Dur Archeological Site, Umm Al Quwain">Al-Dur Archeological Site, Umm Al Quwain</option>
                        <option value="Backwaters, Umm Al Quwain">Backwaters, Umm Al Quwain</option>
                        <option value="Barracuda Beach Resort, Umm Al Quwain">Barracuda Beach Resort, Umm Al Quwain</option>
                        <option value="Das Brauhaus, Umm Al Quwain">Das Brauhaus, Umm Al Quwain</option>
                        <option value="Dreamland Aqua Park, Umm Al Quwain">Dreamland Aqua Park, Umm Al Quwain</option>
                        <option value="Emirates Motorplex, Umm Al Quwain">Emirates Motorplex, Umm Al Quwain</option>
                        <option value="Falaj Al Mualla, Umm Al Quwain">Falaj Al Mualla, Umm Al Quwain</option>
                        <option value="Khor Al Beidah, Umm Al Quwain">Khor Al Beidah, Umm Al Quwain</option>
                        <option value="Kite Beach Center Restaurant & Cafe, Umm Al Quwain">Kite Beach Center Restaurant & Cafe, Umm Al Quwain</option>
                        <option value="Sheikh Zayed Park, Umm Al Quwain">Sheikh Zayed Park, Umm Al Quwain</option>
                        <option value="Sikkat Beirut Restaurant and Cafe, Umm Al Quwain">Sikkat Beirut Restaurant and Cafe, Umm Al Quwain</option>
                        <option value="Thunder Road Pizza & Grill, Barracuda, Umm Al Quwain">Thunder Road Pizza & Grill, Barracuda, Umm Al Quwain</option>
                        <option value="UAQ Marine Club, Umm Al Quwain">UAQ Marine Club, Umm Al Quwain</option>
                        <option value="Umm Al Quwain Museum, Umm Al Quwain">Umm Al Quwain Museum, Umm Al Quwain</option>
                    </select>
                </div>
                <p class="inquire-label">Inquire Details</p>
                <textarea class="inquire" id="inquire" name="inquire" rows="4" cols="50" placeholder="Write your inquiry"></textarea>
            </div>
                <input class="save-changes" type="submit" value="Submit" name="submit">
                <input class="delete-acc" type="button" value="Cancel" onclick="history.back()">
        </div>

        </form>
      
    </div>

 
    <footer></footer>

</body>
</html>