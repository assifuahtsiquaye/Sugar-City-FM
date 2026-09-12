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


    <section class="mainBox">
        <div class="on-air">
            <img src="../Assert/svg-spinners--pulse.svg" alt="">
            <p>We're Live</p>
        </div>
        <h1>Listen Live</h1>
        <p class="stream-anywhere">Stream Sugar City FM anywhere around the globe</p>
        <div class="listen-live-box" id="listen-live">
            <div class="info">
                <div class="sugar-city">
                    <svg width="96" height="auto" viewBox="0 0 32 32" class="radio-icon">
                        <path d="M0 0h32v32H0z" fill="none" />
                        <g fill="currentColor">
                            <path d="M14.83 24.18a.68.68 0 0 0 0-1.36H5.18a.68.68 0 0 0 0 1.36zm.68-3.19c0 .38-.31.68-.68.68H5.18a.68.68 0 0 1 0-1.36h9.65c.38-.01.68.3.68.68m-.68-1.84a.68.68 0 0 0 0-1.36H5.18a.68.68 0 0 0 0 1.36zm.68-3.19c0 .38-.31.68-.68.68H5.18a.68.68 0 0 1 0-1.36h9.65c.38-.01.68.3.68.68m-.68-1.84a.68.68 0 0 0 0-1.36H5.18a.68.68 0 0 0 0 1.36zm4.96 10.05a1.25 1.25 0 1 0 0-2.5a1.25 1.25 0 0 0 0 2.5m6.83-1.25a1.25 1.25 0 1 1-2.5 0a1.25 1.25 0 0 1 2.5 0m-8.17-10.66c-.936 0-1.7.764-1.7 1.7v4.83c0 .936.764 1.7 1.7 1.7h7.87c.936 0 1.7-.764 1.7-1.7v-4.83c0-.936-.764-1.7-1.7-1.7zm.64 4.36c0-.43.35-.79.79-.79s.79.36.8.79v2.87h-1.59z" />
                            <path d="m7.958 8.103l16.664-3.28a1.13 1.13 0 0 1 1.238-.813a1 1 0 0 1 .787 1.754a1.13 1.13 0 0 1-1.842.042L9.545 8.81H27.38a3.63 3.63 0 0 1 3.63 3.613V24.69a3.633 3.633 0 0 1-3.63 3.63h-.49v.05c0 .76-.62 1.37-1.37 1.37c-.76 0-1.37-.61-1.37-1.37v-.05H7.74v.05c0 .76-.61 1.37-1.37 1.37S5 29.13 5 28.37v-.05h-.37A3.633 3.633 0 0 1 1 24.69V12.44a3.633 3.633 0 0 1 3.63-3.63h.432a2.04 2.04 0 0 1 2.896-.707M5.062 10.81H4.63c-.898 0-1.63.732-1.63 1.63v12.25c0 .898.732 1.63 1.63 1.63h22.75c.898 0 1.63-.732 1.63-1.63V12.434a1.63 1.63 0 0 0-1.63-1.624H8.619a2.04 2.04 0 0 1-3.557 0" />
                        </g>
                    </svg>

                    <div>
                        <!-- <img src="../Assert/SUGAR CITY FM.png" alt="" srcset="" style="width: 120px;"> -->
                        <h4>Sugar City FM</h4>
                        <p class="respond">hen dze nyi</p>
                    </div>
                </div>
                <div>
                    <img src="../Assert/svg-spinners--pulse.svg" alt="">
                </div>
            </div>

            <div class="press">
                <!-- <img src="../Assert/SUGAR CITY FM.png" alt="" srcset="" style="width: 120px;"> -->
                <img src="../Assert/fa-solid--play-circle.svg" alt="" class="press-play" id="play">
                <img src="../Assert/bi--pause-circle-fill.svg" alt="" class="press-play" id="pause">
            </div>

            <img src="../Assert/gemini-svg.svg" alt="" class="equilizer">
            <audio src=""></audio>

            <div class="songPlaying">
                <div class="status">
                    <img src="../Assert/akar-icons--music-album.svg" alt="" class="description-icon">
                    <p>NOW PLAYING</p>
                </div>
                <p>all the way - Henry Jenkins</p>
            </div>

            <div class="volume-control">
                <img src="../Assert/cuida--volume-2-outline.svg" alt="" class="radio-icon">
                <input type="range" name="volume" id="volume" class="volume-slider" min="0" max="100" value="40">
                <span id="volumn-counter" class="volumn-counter">40</span>
            </div>

        </div>
    </section>

    

    <section class="upcoming-event">
        <div class="upcoming-event-header">
            <svg width="96" height="auto" viewBox="0 0 24 24" class="description-icon-medium">
                <path d="M0 0h24v24H0z" fill="none" />
                <path fill="currentColor" d="M19 3h-1V1h-2v2H8V1H6v2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2m0 16H5V9h14zM5 7V5h14v2zm2 4h10v2H7zm0 4h7v2H7z" />
            </svg>
            <h2>Upcoming Event</h2>
        </div>
        <div class="event-container">
            <div class="event">
                <div class="time-icon">
                    <img src="../Assert/bx--time.svg" alt="" class="radio-icon">
                    <time class="event-time" datetime="10:23">10:23 am</time>
                </div>
                <div class="event-details">
                    <h3>Community Outreach Program</h3>
                    <p>Join us for a day of giving back to the community.</p>
                </div>
            </div>

            <div class="event">
                <div class="time-icon">
                    <img src="../Assert/bx--time.svg" alt="" class="radio-icon">
                    <time class="event-time" datetime="18:23">06:23 pm</time>
                </div>
                <div class="event-details">
                    <h3>Our of Hope</h3>
                    <p>Join us for a day of giving back.</p>
                </div>
            </div>

            <div class="event">
                <div class="time-icon">
                    <img src="../Assert/bx--time.svg" alt="" class="radio-icon">
                    <time class="event-time" datetime="20:00">08:00 pm</time>
                </div>
                <div class="event-details">
                    <h3>Know your country</h3>
                    <p>Join us for a day of giving back.</p>
                </div>
            </div>

            <button id="shows" class="link-button">View our shows</button>
        </div>
    </section>

    
    
    <section class="meet-theTeam">
        <div class="upcoming-event-header">
            <svg viewBox="0 0 24 24" class="description-icon-medium">
                <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                    <rect width="8" height="13" x="8" y="2" rx="4" />
                    <path d="M18 16.292A7.98 7.98 0 0 1 12 19a7.98 7.98 0 0 1-6-2.708M12 19v3m-2 0h4" />
                </g>
            </svg>

            <h2>The Voices Behind</h2>
        </div>
        <div class="voicesBehind">
            <div class="programme-host-box">
                <div class="notice">Loremm Yiuu Lorem</div>
                <div class="programme-host">
                    <img src="../Assert/vlcsnap-2025-10-22-06h38m36s790.png" alt="" class="host-image">
                </div>
                <div class="host-info">Elder Emmanuel Acquah</div>
            </div>
            <div class="programme-host-box">
                <div class="notice">Loremm Yiuu Lorem</div>
                <div class="programme-host">
                    <img src="../Assert/vlcsnap-2025-10-22-06h38m36s790.png" alt="" class="host-image">
                </div>
                <div class="host-info">Elder Emmanuel Acquah</div>
            </div>
            <div class="programme-host-box">
                <div class="notice">Loremm Yiuu Lorem</div>
                <div class="programme-host">
                    <img src="../Assert/vlcsnap-2025-10-22-06h38m36s790.png" alt="" class="host-image">
                </div>
                <div class="host-info">Elder Emmanuel Acquah</div>
            </div>
            <div class="programme-host-box">
                <div class="notice">Loremm Yiuu Lorem</div>
                <div class="programme-host">
                    <img src="../Assert/vlcsnap-2025-10-22-06h38m36s790.png" alt="" class="host-image">
                </div>
                <div class="host-info">Elder Emmanuel Acquah</div>
            </div>
            <div class="programme-host-box">
                <div class="notice">Loremm Yiuu Lorem</div>
                <div class="programme-host">
                    <img src="../Assert/vlcsnap-2025-10-22-06h38m36s790.png" alt="" class="host-image">
                </div>
                <div class="host-info">Elder Emmanuel Acquah</div>
            </div>
            <div class="programme-host-box">
                <div class="notice">Loremm Yiuu Lorem</div>
                <div class="programme-host">
                    <img src="../Assert/vlcsnap-2025-10-22-06h38m36s790.png" alt="" class="host-image">
                </div>
                <div class="host-info">Elder Emmanuel Acquah</div>
            </div>
            <div class="programme-host-box">
                <div class="notice">Loremm Yiuu Lorem</div>
                <div class="programme-host">
                    <img src="../Assert/vlcsnap-2025-10-22-06h38m36s790.png" alt="" class="host-image">
                </div>
                <div class="host-info">Elder Emmanuel Acquah</div>
            </div>
        </div>
    </section>

    <?php include '../Footer/footer.php'; ?>
    <script src="../Pages/home.js"></script>
    <script src="../Header/header.js"></script>
</body>
</html>