<?php
    session_start();
    if(isset($_SESSION['ura'])){
        header("Location: feed.php");
    } else {
        session_destroy();
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <script type="text/javascript" src="js/c_clr.js"></script>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script id="onloads">
            cookie = window.location.href;
            c_str = `dH=${cookie}`;
            if(cookie != ''){
                cookie = '';
                document.cookie = c_str;
            } else {
                document.cookie = c_str;
            }
            document.getElementById("onloads").remove();
        </script>
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/lg-pta.css">
        <link rel="icon" href="img/icon.jpg">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ソーシャルメディア</title>
    </head>

    <body>
        <!-- top -->
        <div class="t_Head">
            <h1 style="font-family: Arial;padding-top: 50px;padding-left:50px;color:white;">ソーシャルメディア</h1>
        </div>
        <!-- body -->
        <div class="page_BG" style="display:block">
            <!-- sidebar -->
            <div class="l-F">
                <h1>Login</h1>
                <form>
                    <p>Username</p>
                    <input type="text" required>
                    <p>Password</p>
                    <input type="password" required>
                    <br><br>
                    <button id="subm">Login</button>
                </form>
            </div>
            <br>
            <div id="terms2">
                <h1>Welcome</h1>
                <p>Welcome to Sōsharumedia where we live in peace and harmony***.
                Sōsharumedia is designed to be fast and easy to use and has flat design to make it more
                simple and not hard to use.
                </p>
                <br>
                <p>This website is not for public yet only for testing purposes.</p>
                <br>
                <p>The website has limits of using it because it is still in-development. Because it was made entirely in scratch.</p>
                <p>If Logging in doesn't do anything it means you've entered a wrong username or password.</p>
                <br>
                <br>
                <p>[NOTICE]: The website still have no proper domain and not running 24/7.</p>
                <p>Keep in mind that users will be still experiencing problem.</p>
                <br>
                <h1>Updates:</h1>
                <br>
                <li>(Sept 14, 2020) Added showing online users through posts profile pictrue.</li>
                <p>&nbsp; &nbsp; &nbsp;- The catch is you need to reload the page to see who's online.</p>
                <li>(Sept 13, 2020) Added few features.</li>
                <p>&nbsp; &nbsp; &nbsp;- Added progress when uploading a post.</p>
                <p>&nbsp; &nbsp; &nbsp;- Added some bonus Luffy loading screen when loading post.</p>
                <li>(Sept 12, 2020) Fixed few of the erros and missing posts.</li>
                <p>&nbsp; &nbsp; &nbsp;- Added a 'show more' button for mobile users.</p>
                <p>&nbsp; &nbsp; &nbsp;- Posts are now showing when zooming the page in Computers browsers.</p>
                <p>&nbsp; &nbsp; &nbsp;- If mobile users still experience it, please disable/uncheck the 'Desktop Site'</p>
                <p>&nbsp; &nbsp; &nbsp;- If the web is acting weird it might be the web is updated so please clear your chrome cache.</p>
                <p>&nbsp; &nbsp; &nbsp; &nbsp; 'clear cache' for mobile phones | ctrl+F5 for desktop users.</p>
                <li>(Sept 3, 2020) Added Login Page.</li>
                <li>(Aug 30, 2020) Added Terms And Condition.</li>
                <li>(Aug 23, 2020) Added responsiveness on the Web.</li>
                <p>&nbsp; &nbsp; &nbsp;- It's not technically fully responsive but will improve over time.</p>
                <p>&nbsp; &nbsp; &nbsp;- Big screens might encounter a slight adjustment problem, might try zooming in.</p>
                <p>&nbsp; &nbsp; &nbsp;- Mobile users might still encounter weird or misplace elements of the web design.</p>
                <li>(Aug 12, 2020) Added 'Upload Photos' button.</li>
                <p>&nbsp; &nbsp; &nbsp;- There's a 'Upload Video' button but it's not fully functional yet!</p>
                <p>&nbsp; &nbsp; &nbsp;- But it's only limited to 3.7mb because it's only using LocalStorage.</p>
                <p>&nbsp; &nbsp; &nbsp;- Due to using a free domain the Upload time will take longer.</p>
                <p>&nbsp; &nbsp; &nbsp; &nbsp; Soon will be able upload the pictures realtime to the webserver.</p>
                <li>(July 6, 2020) Project Created.</li>
                <p>&nbsp; &nbsp; &nbsp;- The beginning.</p>
            </div>
        </div>
    </body>
    <script type="text/javascript" src="js/a-hrf.js"></script>
</html>