<?php
    session_start();
    if(!isset($_SESSION['ura'])){
        header("Location: ../");
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script type="text/javascript" src="js/c_clr.js"></script>
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/lg-pta.css">
        <link rel="icon" href="img/icon.jpg">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ソーシャルメディア</title>
    </head>
    <body>
        <span id="TermsAndCon"></span>
        <!-- top -->
        <div class="t_Head">
            <h1 style="font-family: Arial;padding-top: 50px;padding-left:50px;color:white;">ソーシャルメディア</h1>
        </div>
        <!-- body -->
        <div class="page_BG" style="display:block">
            <!-- sidebar -->
            <div class="profile_div">
                <img src="<?php echo $_SESSION['pfp'];?>" class="profile_pic" onclick="imgShow(this)">
                <h1 id="profile_name"><?php echo $_SESSION['ura'];?></h1>
                <hr/>
                <h2 id="profile_friends">friends: <span>&#8734;</span></h2>
                <div id="profile_btn_nav">
                    <ul>
                        <li>
                            <a href="feed" title="Home">Home</a>
                        </li>
                        <li>
                            <a id="_frL" title="Friend List">Friend List<span id="fr-ct">NaN</span></a>
                        </li>
                        <li>
                            <a id="_stT" title="Settings">Settings</a>
                        </li>
                        <li>
                            <a id="_lG" title="Logout">Logout</a>
                        </li>
                    </ul>
                </div>
                <input id="sidebar_btn" type="button" value="&#9660;" onclick="showMore()" title="Show more"/>
            </div>
            <div class="profile_div_semi_footer" id="footer">
                    <a href="PTA.php#Privacy" title="Learn more about your Privacy">Privacy</a> &bull;
                    <a href="PTA.php#TermsAndCon" title="Read Terms and Conditions">Terms</a> &bull;
                    <a href="PTA.php#About" title="About SocialMedia">About</a>
                    <p>copyright 2020 &#169; <br>
                    </p>
            </div>
            <div id="terms">
                <h1>Terms and Conditions</h1>
                <p><b>Sosharumedia</b> is a private social network that only selected users can sign-in.</p>
                <li><b>You</b> have an access to use this website with some conditions.</li>
                <li><b>Consent</b> the required age to get an account 18+ because most of the post in this website might consist NSFW photos etc.</li>
                <li><b>Creating an Account</b> The user must message or Contact the Owner or the Moderator.
                if the user is approved they might need to fill up a registration form before they can login
                Making the account might be delayed if the Owner is busy.</li>
                <li><b>Account</b> by creating an account your Name, Pictures will be publicly shown.</li>
                <li>I am not responsible for any malicious stuff that happened on your account. If somethings wrong please
                contact the Moderators or the owner.</li>
                <li>Do not share you account details to public!</li>
                <h1>Restrictions</h1>
                <li>This website is not fully secured yet so only few people have only access to this website.
                If any Hacker noticed will lead to the website's maintenance to remove Hacker's traces and changing
                the website's security measures.</li>
                <span id="Privacy"></span>
                <li>You are only allowed to post upto 1000 characters or more. If the post has any characters that's illegal like <br>
                a Zalgo text will be removed immediately. If the post is still On report it by Messaging the Moderators.</li>
                <li>Posting GORE stuffs is STRICLY NOT ALLOWED and will lead to permanent ban.</li>
                <div id="About">
                <h1>Privacy</h1>
                <li>I am not responsible if you post or share your own data or any real data because this website is only for posting <br>
                fun stuffs and opinions and etc.</li>
                <h1>About</h1>
                <li>This website is only made for posting some stuff that other social media don't want to because of the rules <br>
                but here there are only specific rules others might be voted because the majority of people hated the post.</li>
            </div>
        </div>

        <!-- message -->
        <div id="message_popup">
            <div id="message_popup_Box">
            </div>
            <div class="message_popup_Confirm">
                <span id="message_Input_popup"></span>
                <button id="stng_Clear" onclick="sessionStorage.clear();alert('Cleared!');">Clear</button>
                <button id="msg_Ok" onclick="message_popup('cancel')">Ok</button>
                <button id="msg_Cancel" onclick="message_popup('cancel')">Cancel</button>
                <form action="lg-cfm/logout-confirm">
                    <button id="msg_Logout" type="submit" >Logout
                </form>
            </div>
        </div>

        <!-- image clicking popup -->
        <div id="img_popup">
            <div id="img_popup_Box">
                <span id="img_title"></span>
                <div>
                    <button id="img_close" onclick="message_popup('cancel')" title="Close">X</button>
                </div>
            </div>
            <div class="img_popup_Confirm">
                    <img id="img_popup_show"/>                    
           </div>
        </div>
    </body>
    <script type="text/javascript" src="js/let-def.js"></script>
    <script type="text/javascript" src="js/fs-m.js"></script>
    <script type="text/javascript" src="js/sb-a.js"></script>
    <script type="text/javascript" src="js/a-hrf.js"></script>
</html>