<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>Sugar City FM</title>
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="../Header/header.css">
    <link rel="stylesheet" href="../Footer/footer.css">
</head>
<body>
    <?php include '../Header/header.php'; ?>


    <main>
        <div class="on-air">
            <img src="../Assert/svg-spinners--pulse.svg" alt="">
            <p>We're Live</p>
        </div>
        <h1>Listen Live</h1>
        <p class="stream-anywhere">Stream Sugar City FM anywhere around the globe</p>
        <div class="listen-live-box" id="listen-live">
            <div class="info">
                <div class="sugar-city">
                    <img src="../Assert/Radio--Streamline-Micro.png" alt="" class="radio-icon">
                    <div>
                        <h4>Sugar City FM</h4>
                        <p class="respond">hen dze nyi</p>
                    </div>
                </div>
                <div>
                    <img src="../Assert/svg-spinners--pulse.svg" alt="">
                </div>
            </div>

            <div class="press">
                <img src="../Assert/Play--Streamline-Micro.png" alt="" class="press-play">
                <!-- <img src="/Assert/Pause-2--Streamline-Micro.png" alt="" class="press-play"> -->
            </div>

            <img src="../Assert/gemini-svg.svg" alt="" class="equilizer">
            <audio src=""></audio>

            <div class="songPlaying">
                <div class="status">
                    <img src="../Assert/Music-Note-Circle--Streamline-Micro.png" alt="" class="description-icon">
                    <p>NOW PLAYING</p>
                </div>
                <p>all the way - Henry Jenkins</p>
            </div>

            <div class="volume-control">
                <img src="../Assert/cuida--volume-2-outline.png" alt="" class="radio-icon">
                <input type="range" name="volume" id="volume" class="volume-slider" min="0" max="100" value="40%">
                <span id="volumn-counter" class="volumn-counter">40</span>
            </div>

        </div>
    </main>

    <section class="upcoming-event">
        <div class="upcoming-event-header">
            <img src="../Assert/fluent-mdl2--account-activity.png" alt="" class="radio-icon">
            <h2>Upcoming Event</h2>
        </div>
        <div class="event-container">
            <div class="event">
                <div class="time-icon">
                    <img src="../Assert/famicons--time-outline.png" alt="" class="radio-icon">
                    <time class="event-time">10:23 am</time>
                </div>
                <div class="event-details">
                    <h3>Community Outreach Program</h3>
                    <p>Join us for a day of giving back to the community .</p>
                </div>
                <!-- <div class="host">
                    <p>hjhjhj</p>
                </div> -->
            </div>
            
            <div class="event">
                <div class="time-icon">
                    <img src="../Assert/famicons--time-outline.png" alt="" class="radio-icon">
                    <time class="event-time">06:23 pm</time>
                </div>
                <div class="event-details">
                    <h3>Our of Hope</h3>
                    <p>Join us for a day of giving back.</p>
                </div>
                <!-- <div class="host">
                    <p>hjhjhj</p>
                </div> -->
            </div>
            
            <div class="event">
                <div class="time-icon">
                    <img src="../Assert/famicons--time-outline.png" alt="" class="radio-icon">
                    <time class="event-time"> 08:00 pm</time>
                </div>
                <div class="event-details">
                    <h3>Know your country</h3>
                    <p>Join us for a day of giving back.</p>
                </div>
                <!-- <div class="host">
                    <p>hjhjhj</p>
                </div> -->
            </div>

            <button href="" id="shows" class="link-button">View all shows</button>
        </div>
    </section>

    <?php include '../Footer/footer.php'; ?>
    <script src="../Header/header.js"></script>

</body>
</html>