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
</head>

<body>

    <div class="container">

        <h1>Book a Tour</h1>
        
        <form action="#" method="POST">

        <div class="forms">
            <div class="forms1">
                <p class="name-label">First Name</p>
                <p class="lname-label">Last Name</p>
            </div>
            <input class="first-name" type="text" placeholder="First Name" /> 
            <input class="last-name" type="text" placeholder="Last Name" />
            <div class="forms2">
                <p class="time-label">Time</p>
                <p class="date-label">Date</p>
            </div>
            <input class="time" type="time" placeholder="10:00 AM" /> 
            <input class="date" type="date" placeholder="DD/MM/YYYY" />
            <div class="forms3">
                <label for="tours" class="tour-label">Tour</label>
                <div class="tour-loc">
                    <select name="tours" id="tours">
                        <option value="" disabled selected>Choose Tour</option>
                        <option value="cascade">Cascade Dining, Abu Dhabi</option>
                        <option value="catch">Catch at St. Regis, Abu Dhabi</option>
                        <option value="cipriani">Cipriani, Abu Dhabi</option>
                        <option value="emirates-palace">Emirates Palace, Abu Dhabi</option>
                        <option value="emirates-park">Emirates Park Zoo, Abu Dhabi</option>
                        <option value="ferrari">Ferrari World, Abu Dhabi</option>
                        <option value="heritage">Heritage Village, Abu Dhabi</option>
                        <option value="louvre">Louvre, Abu Dhabi</option>
                        <option value="observation-deck">Observation Deck at 300, Abu Dhabi</option>
                        <option value="sheikh-zayed-grand-mosque">Sheikh Zayed Grand Mosque, Abu Dhabi</option>
                        <option value="the-terrace">The Terrace on the Corniche, Abu Dhabi</option>
                        <option value="warner-bros">Warner Bros World, Abu Dhabi</option>
                        <option value="yas-island">Yas Island, Abu Dhabi</option>
                        <option value="yas-mall">Yas Mall, Abu Dhabi</option>
                        <option value="yas-marina">Yas Marina Circuit, Abu Dhabi</option>
                        <option value="yas-viceroy">Yas Viceroy, Abu Dhabi</option>
                        <option value="yas-waterworld">Yas Waterworld, Abu Dhabi</option>
                        <option value="zaya">Zaya Nurai Island, Abu Dhabi</option>
                        <option value="ajman-city">Ajman City Centre, Ajman</option>
                        <option value="ajman-corniche">Ajman Corniche, Ajman</option>
                        <option value="ajman-dhow">Ajman Dhow Building Yard, Ajman</option>
                        <option value="ajman-museum">Ajman Museum, Ajman</option>
                        <option value="al-murabba">Al Murabba Watchtower, Ajman</option>
                        <option value="al-sinniyah">Al Sinniyah Island, Ajman</option>
                        <option value="al-zorah">Al Zorah Natural Reserve, Ajman</option>
                        <option value="aqua-bounce">Aqua Bounce Ajman, Ajman</option>
                        <option value="bab-al">Bab Al Bahr, Ajman</option>
                        <option value="cafe-naseem">Cafe Naseem, Ajman</option>
                        <option value="china-mall">China Mall, Ajman</option>
                        <option value="danial">Danial Restaurant, Ajman</option>
                        <option value="dragon">Dragon's Place, Ajman</option>
                        <option value="safi-steak">Safi Steakhouse, Ajman</option>
                        <option value="al-fahidi">Al Fahidi Historical District, Dubai</option>
                        <option value="al-farooq">Al Farooq Omar Ibn Al Khattab Mosque – Umm Suqueim, Dubai</option>
                        <option value="al-salam">Al Salam Mosque, Dubai</option>
                        <option value="al-serkal">Al Serkal Avenue, Dubai</option>
                        <option value="al-shindagha">Al Shindagha Museum, Dubai</option>
                        <option value="bollywood">Bollywood Parks, Dubai</option>
                        <option value="burj-khalifa">Burj Khalifa, Dubai</option>
                        <option value="catch22">Catch22, Dubai</option>
                        <option value="dubai-aquarium">Dubai Aquarium and Underwater Zoo, Dubai</option>
                        <option value="dubai-festival">Dubai Festival City Mall, Dubai</option>
                        <option value="dubai-frame">Dubai Frame, Dubai</option>
                        <option value="dubai-mall">Dubai Mall, Dubai</option>
                        <option value="dubai-miracle">Dubai Miracle Garden, Dubai</option>
                        <option value="dubai-opera">Dubai Opera, Dubai</option>
                        <option value="etihad">Etihad Museum, Dubai</option>
                        <option value="global">Global Village, Dubai</option>
                        <option value="img">IMG Worlds of Adventure, Dubai</option>
                        <option value="iranian-mosque">Iranian Mosque, Dubai</option>
                        <option value="jumeirah-mosque">Jumeirah Mosque, Dubai</option>
                        <option value="khalifa-al">Khalifa Al Tajer Mosque, Dubai</option>
                        <option value="lego">Legoland, Dubai</option>
                        <option value="malecon">Malecon Restaurant, Dubai</option>
                        <option value="morimoto">Morimoto Restaurant, Dubai</option>
                        <option value="pitfire">Pitfire Pizza, Dubai</option>
                        <option value="ski-dubai">Ski Dubai, Dubai</option>
                        <option value="skydive-dubai">Skydive Dubai, Dubai</option>
                        <option value="the-buried">The Buried Village of Al Madam, Dubai</option>
                        <option value="the-green-planet">The Green Planet, Dubai</option>
                        <option value="wild-wadi">Wild Wadi Waterpark, Dubai</option>
                        <option value="wokyo">Wokyo Noodle Bar, Dubai</option>
                        <option value="al-aqah">Al Aqah Beach, Fujairah</option>
                        <option value="al-meshwar">Al Meshwar Restaurant, Fujairah</option>
                        <option value="al-bidyah">Al-Bidyah Mosque, Fujairah</option>
                        <option value="al-hayl">Al-Hayl Castle, Fujairah</option>
                        <option value="bitnah">Bitnah Fort, Fujairah</option>
                        <option value="crepes">Crepes and Burgers LLC, Fujairah</option>
                        <option value="friday-market">Friday Market, Fujairah</option>
                        <option value="fujairah-port">Fujairah Fort, Fujairah</option>
                        <option value="fujairah-museum">Fujairah Museum, Fujairah</option>
                        <option value="hooked">Hooked Seafood, Fujairah</option>
                        <option value="kalba-corniche">Kalba Corniche Park, Fujairah</option>
                        <option value="shark">Shark Island, Fujairah</option>
                        <option value="sheikh-zayed-grand">Sheikh Zayed Grand Mosque, Fujairah</option>
                        <option value="snoopy">Snoopy Island, Fujairah</option>
                        <option value="the-book">The Bookstore, Fujairah</option>
                        <option value="the-orangery">The Orangery, Fujairah</option>
                        <option value="al-hamra">Al Hamra Mall, Ras Al Khaimah</option>
                        <option value="al-manar">Al Manar Mall, Ras Al Khaimah</option>
                        <option value="bassata">Bassata Desert Village, Ras Al Khaimah</option>
                        <option value="dhayah">Dhayah Fort, Ras Al Khaimah</option>
                        <option value="flamingo">Flamingo Beach, Ras Al Khaimah</option>
                        <option value="hajar">Hajar Mountains, Ras Al Khaimah</option>
                        <option value="iceland">Iceland Waterpark, Ras Al Khaimah</option>
                        <option value="al-jazirah">Al Jazirah Al Hamra, Ras Al Khaimah</option>
                        <option value="jebel-jais">Jebel Jais, Ras Al Khaimah</option>
                        <option value="meze">Meze, Ras Al Khaimah</option>
                        <option value="piaceri">Piaceri da Gustare, Ras Al Khaimah</option>
                        <option value="rak-zoo">RAK Zoo, Ras Al Khaimah</option>
                        <option value="sanchaya">Sanchaya, Ras Al Khaimah</option>
                        <option value="saqr">Saqr Park, Ras Al Khaimah</option>
                        <option value="sheikh-zayed-mosque">Sheikh Zayed Mosque, Ras Al Khaimah</option>
                        <option value="shimal">Shimal, Ras Al Khaimah</option>
                        <option value="wadi">Wadi Shawka, Ras Al Khaimah</option>
                        <option value="waldorf">Waldorf Astoria, Ras Al Khaimah</option>
                        <option value="zaitouna">Zaitouna House, Ras Al Khaimah</option>
                        <option value="al-maghfira">Al Maghfira Mosque, Sharjah</option>
                        <option value="al-montazah">Al Montazah Park, Sharjah</option>
                        <option value="al-noor">Al Noor Island, Sharjah</option>
                        <option value="al-noor-mosque">Al Noor Mosque, Sharjah</option>
                        <option value="al-qasba">Al Qasba, Sharjah</option>
                        <option value="al-qasba-mosque">Al Qasba Mosque, Sharjah</option>
                        <option value="al-rafisah">Al Rafisah Dam, Sharjah</option>
                        <option value="al-hefaiyah">Al Hefaiyah Mountain Conservation Centre, Sharjah</option>
                        <option value="arabian">Arabian Wildlife Centre, Sharjah</option>
                        <option value="baid">Baid Obaid Al Shams, Sharjah</option>
                        <option value="fen">Fen Cafe & Restaurant, Sharjah</option>
                        <option value="gazebo">Gazebo Restaurant, Sharjah</option>
                        <option value="gold">Gold Souk, Sharjah</option>
                        <option value="king">King Faisal Mosque, Sharjah</option>
                        <option value="martyrs">Martyrs Square and Monument, Sharjah</option>
                        <option value="mleiha">Mleiha Archeological Center, Sharjah</option>
                        <option value="ratios">Ratios Coffee, Sharjah</option>
                        <option value="shakespeare">Shakespeare and Co., Sharjah</option>
                        <option value="sharjah-aqua">Sharjah Aquarium, Sharjah</option>
                        <option value="sharjah-arch">Sharjah Archeology Museum, Sharjah</option>
                        <option value="sharjah-art">Sharjah Art Museum, Sharjah</option>
                        <option value="sharjah-desert">Sharjah Desert Park, Sharjah</option>
                        <option value="sharjah-disc">Sharjah Discovery Centre, Sharjah</option>
                        <option value="sharjah-mosque">Sharjah Mosque, Sharjah</option>
                        <option value="sharjah-muni">Sharjah Municipality Building, Sharjah</option>
                        <option value="sharjah-sci">Sharjah Science Museum, Sharjah</option>
                        <option value="waffee">Waffee Street, Sharjah</option>
                        <option value="wasit">Wasit Wetland Center, Sharjah</option>
                        <option value="abandoned">Abandoned IL-76, Umm Al Quwain</option>
                        <option value="al-labsa">Al Labsa, Umm Al Quwain</option>
                        <option value="al-sinniyah-island">Al Sinniyah Island, Umm Al Quwain</option>
                        <option value="al-dur">Al-Dur Archeological Site, Umm Al Quwain</option>
                        <option value="backwaters">Backwaters, Umm Al Quwain</option>
                        <option value="barracuda">Barracuda Beach Resort, Umm Al Quwain</option>
                        <option value="das">Das Brauhaus, Umm Al Quwain</option>
                        <option value="dreamland">Dreamland Aqua Park, Umm Al Quwain</option>
                        <option value="emirates-motorplex">Emirates Motorplex, Umm Al Quwain</option>
                        <option value="falaj">Falaj Al Mualla, Umm Al Quwain</option>
                        <option value="khor-al">Khor Al Beidah, Umm Al Quwain</option>
                        <option value="kite">Kite Beach Center Restaurant & Cafe, Umm Al Quwain</option>
                        <option value="sheikh-zayed-park">Sheikh Zayed Park, Umm Al Quwain</option>
                        <option value="sikkar">Sikkat Beirut Restaurant and Cafe, Umm Al Quwain</option>
                        <option value="thuder">Thunder Road Pizza & Grill, Barracuda, Umm Al Quwain</option>
                        <option value="uaq">UAQ Marine Club, Umm Al Quwain</option>
                        <option value="umm-al">Umm Al Quwain Museum, Umm Al Quwain</option>
                    </select>
                </div>
                <p class="inquire-label">Inquire Details</p>
                <textarea class="inquire" id="inquire" name="inquire" rows="4" cols="50"></textarea>
            </div>
                <input class="save-changes" type="submit" value="Submit">
                <input class="delete-acc" type="submit" value="Cancel">
        </div>

        </form>
        
    </div>

    <footer></footer>

</body>
</html>