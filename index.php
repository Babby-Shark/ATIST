<html>
    <head>
        <title>ATIST</title>
        <link rel="stylesheet" href="CSS/main.css">
        <link rel="stylesheet" href="../CSS/beatvault.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="A brief description of your page for search engines.">
        <meta name="keywords" content="keyword1, keyword2, keyword3">
        <meta name="author" content="Your Name or Company">
        <link rel="icon" href="../Resources/images/ATIST Logo.png" type="image/x-icon">
    </head>

    <body id="body_home">
        <header class="mobile-header">
            <div class="mobile_hcontainer">
                <div class="menu-toggle" id="menu-toggle">
                    &#9776;
                
                </div> <!-- Hamburger -->
                <div class="mobile_logo">
                    <img src="../Resources/images/ATIST Logo.png" alt="" style="width: 150px;">
                </div>
            </div>
            
            <nav class="mobile-nav" id="mobile-nav">
                <a href="#home">Music Marketing</a>
                <a href="#about">Tools</a>
                <a href="#services">Courses</a>
            </nav>
        </header>
        <div class="menu-overlay" id="menu-overlay"></div>

        <?php include('partials/header.php'); ?>

        <div class="body">

            <div>
                <div class="b_element_vid">
                    <style>
                        .video-background {
                            position: relative;
                            width: 100%;
                            height: 70vh; /* or set your preferred height */
                            overflow: hidden;
                        }

                        .video-background video {
                            position: absolute;
                            top: 0;
                            left: 0;
                            min-width: 100%;
                            min-height: 100%;
                            width: auto;
                            height: auto;
                            z-index: 0;
                            object-fit: cover;
                            filter: brightness(0.6); /* optional: darken for readability */
                        }

                        /* The tint overlay */
                        .video-tint {
                            position: absolute;
                            top: 0;
                            left: 0;
                            width: 100%;
                            height: 100%;
                            background: linear-gradient(
                                90deg,
                                rgba(35, 156, 160, 0.6) 0%,
                                rgba(245, 245, 245, 0.4) 50%,
                                rgba(209, 93, 25, 0.6) 100%
                            );
                            z-index: 1;
                        }

                        .video-background .content {
                            position: relative;
                            z-index: 1;
                            color: white;
                            text-align: left;
                            padding-left: 18%;
                            font-size: 60px;
                            font-family: 'Dancing Script', cursive;
                            font-style: italic;
                            font-weight: 900;
                        }

                        .content > h3:hover{
                            transition: transform 0.3s ease, letter-spacing 0.3s ease;
                            transform: scale(1.05);
                            letter-spacing: 1px;
                        }
                    </style>

                    <div class="video-background">
                        <video autoplay muted loop playsinline>
                          <source src="../Resources/video/ATIST WEBSITE VIDEO.mp4" type="video/mp4">
                          Your browser does not support the video tag.
                        </video>
                      
                        <div class="video-tint"></div>

                        <div class="content">
                            <h3>The</h3>
                            <h3>modern</h3>   
                            <h3>musician's</h3> 
                            <h3>online</h3>    
                            <h3>solution.</h3>
                        </div>
                    </div>

                    <div class="video-background2">
                        <video autoplay muted loop playsinline>
                          <source src="../Resources/video/ATIST WEBSITE VIDEO.mp4" type="video/mp4">
                          Your browser does not support the video tag.
                        </video>
                      
                        <div class="video-tint"></div>

                        <div class="content">
                            <h3>The</h3>
                            <h3>modern</h3>   
                            <h3>musician's</h3> 
                            <h3>online</h3>    
                            <h3>solution.</h3>
                        </div>
                    </div>
                </div>

                <div class="b_element">      
                    <a href="#">
                        <div class="body_card_website">
                            <br>
                            <div class="website_info">
                                <h3>Custom Artist Website Development</h3>
                            </div>

                            <div>
                                <img src="../Resources/images/laptop-2838921_1920-removebg-preview.png" alt="" class="webinfo_img">
                            </div>
                        </div>
                    </a>
                </div>
                
                <div data-layer="Article" class="Article" style="width: 1440px; height: 1712px; position: relative; background: black; overflow: hidden">
                    <div data-layer="Music Production Courses" class="MusicProductionCourses" style="width: 625px; left: 80px; top: 1117px; position: absolute; color: white; font-size: 40px; font-family: Inter; font-weight: 600; line-height: 44px; word-wrap: break-word">
                        Music Production Courses
                    </div>
                    <div data-layer="Images" class="Images" style="left: 80px; top: 609px; position: absolute; justify-content: flex-start; align-items: flex-start; gap: 32px; display: inline-flex">
                        <img data-layer="Image" class="Image" style="width: 624px; height: 436px; position: relative; border-radius: 8px" src="Resources/images/portrait-young-man-using-laptop-while-sitting-sofa-home_1048944-14052773.jpeg" />
                        <img data-layer="Image" class="Image" style="width: 624px; height: 436px; position: relative; border-radius: 8px" src="Resources/images/youtube-ads.png" />
                    </div>
                
                    <div data-layer="Paragraph" class="Paragraph" style="width: 842px; left: 296px; top: 34px; position: absolute; color: white; font-weight: 300; line-height: 30px; word-wrap: break-word">
                        Instagram ads are a powerful tool for promoting music, allowing artists to reach highly targeted audiences through eye-catching visuals, short videos, or Reels.<br/>With options like Stories, Feed, and Explore placements, musicians can showcase their latest tracks, drive traffic to streaming platforms, or grow their fan-base.<br/>Using tools like Meta Ads Manager, artists can set precise goals, choose target demographics, and track performance to optimize campaigns.<br/>When done right, Instagram ads help upcoming artists build visibility and connect directly with listeners who vibe with their sound.<br/><br/>YouTube ads are an effective way to push an artist's music by placing their songs directly in front of highly engaged viewers.<br/>With ad formats like skippable video ads, bumper ads, and YouTube Shorts, artists can showcase music videos, teasers, or behind-the-scenes content to targeted audiences based on interests, location, or viewing history. These ads can drive streams, build subscribers, and grow recognition fast—especially when paired with smart targeting and eye-catching visuals.<br/>For emerging artists, YouTube ads offer a direct route to getting heard and building a loyal fanbase across the globe.
                    </div>
                    
                    <div data-layer="Cards" class="Cards" style="left: 81px; top: 1209px; position: absolute; justify-content: flex-start; align-items: flex-start; gap: 32px; display: inline-flex">
                        <div data-layer="Card" class="Card" style="width: 404px; height: 434px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                            <img data-layer="Image" class="Image" style="align-self: stretch; flex: 1 1 0; position: relative; width: 400px; height: 300px; background: black; border-radius: 8px" src="Resources/images/Music Production.jpg"/>
                            <div data-layer="Copy" class="Copy" style="align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; gap: 4px; display: flex">
                                <div data-layer="Music Production in Ableton" class="MusicProductionInAbleton" style="align-self: stretch; white: black; font-size: 20px; font-family: Inter; font-weight: 500; line-height: 30px; word-wrap: break-word">
                                    Music Production in Ableton
                                </div>
                                <div data-layer="Larious Beats" class="LariousBeats" style="align-self: stretch; justify-content: center; display: flex; flex-direction: column; color: white; font-size: 20px; font-family: Inter; font-weight: 500; line-height: 30px; word-wrap: break-word">
                                    Larious Beats
                                </div>
                            </div>
                        </div>
                        <div data-layer="Card" class="Card" style="width: 404px; height: 434px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                            <img data-layer="Image" class="Image" style="align-self: stretch; flex: 1 1 0; position: relative; width: 400px; height: 300px; background: black; border-radius: 8px" src="Resources/images/side-view-musicians-working-studio_23-2150265051.jpeg" />
                            <div data-layer="Copy" class="Copy" style="align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; gap: 4px; display: flex">
                                <div data-layer="Mixing and Matering" class="MixingAndMatering" style="align-self: stretch; color: white; font-size: 20px; font-family: Inter; font-weight: 500; line-height: 30px; word-wrap: break-word">
                                    Mixing and Matering
                                </div>
                                <div data-layer="Larious Beats" class="LariousBeats" style="align-self: stretch; justify-content: center; display: flex; flex-direction: column; color: white; font-size: 20px; font-family: Inter; font-weight: 500; line-height: 30px; word-wrap: break-word">
                                    Larious Beats
                                </div>
                            </div>
                        </div>
                        <div data-layer="Card" class="Card" style="width: 404px; height: 434px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                            <img data-layer="Image" class="Image" style="align-self: stretch; flex: 1 1 0; position: relative; width: 400px; height: 300px; background: black; border-radius: 8px" src="Resources/images/sound-designer-recording-his-electronic-piano-notes-home-studio_482257-97859.jpeg"/>
                            <div data-layer="Copy" class="Copy" style="align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; gap: 4px; display: flex">
                                <div data-layer="FL Studio Beginner" class="FlStudioBeginner" style="align-self: stretch; color: white; font-size: 20px; font-family: Inter; font-weight: 500; line-height: 30px; word-wrap: break-word">
                                    FL Studio Beginner
                                </div>
                                <div data-layer="Nase Avatar" class="NaseAvatar" style="align-self: stretch; justify-content: center; display: flex; flex-direction: column; color: white; font-size: 20px; font-family: Inter; font-weight: 500; line-height: 30px; word-wrap: break-word">
                                    Nase Avatar
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include('partials/footer.php'); ?>

    <script src="script.js"></script>
    </body>
</html>
