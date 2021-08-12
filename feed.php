<?php
    session_start();
    if(!isset($_SESSION['ura'])){
        header("Location: ../");
    } else {
        $state_db = mysqli_connect('localhost','root','','sosharumedia');
        $state_Online = mysqli_query($state_db, "SELECT fullname FROM accounts WHERE state='online'");
        $fname = $_SESSION['ura'];
        $int = 0;
    }
   # print_r($state_Online);
?>
<!DOCTYPE html>
<html>
    <head>
        <script type="text/javascript" src="js/c_clr.js"></script>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
            function p_CG() {
                let ccG = 'rgb(0, 255, 0)';
                <?php while($row = mysqli_fetch_array($state_Online)){
                        if($row != ''){$int++;}
                        $acc = "account_$int";
                        $me = $row['fullname'];
                        echo `
                            <script>a</script>
                        `
                        ;}
                ?>
            }
        </script>
        <script id='o_l_st'>
            setTimeout(()=>{
            $.ajax({
                type: "POST",
                url: "ol_state.php",
                async:false,
                success: function(response) {
                    $('#o_l_st')[0].remove();
                }
            }); 
            },3000);
        </script>
        <link rel="stylesheet" href="css/main.css">
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
            <div class="profile_div">
                <img src="<?php echo$_SESSION['pfp'];?>" tag="<?php echo $_SESSION['ura']?>" class="profile_pic" onclick="imgShow(this)">
                <h1 id="profile_name"><?php echo $_SESSION['ura'];?></h1>
                <hr/>
                <h2 id="profile_friends">friends: <span>&#8734;</span></h2>
                <div id="profile_btn_nav">
                    <ul>
                    <li>
                            <a href="feed.php" title="Home">Home</a>
                        </li>
                        <li>
                            <a id="_frL" title="Friend List">Friend List<span id="fr-ct">NaN</span></a>
                        </li>
                        <li>
                            <a id="_stT"  title="Settings">Settings</a>
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
            
            <!-- main -->
            <div id="page_Feed">

                <!-- create a post -->
                <div id="post_Create">
                    <img id="post_Create_Picture" src="<?php echo $_SESSION['pfp'];?>" alt="<?php echo $_SESSION['ura'];?>"/>
                    <form>
                    <div contenteditable class="post_Create_Input" placeholder="What are you thinking?"></div>
                    <br>
                    <span id="img_Show"></span>
                    <hr>
                    <button id="form_Buttons" onfocus="blur()" class="form_Upload_Style" onclick="checkPost();" type="button">
                    Post Status
                    </button>
                    <label for="upload_Button" id="form_Buttons" class="form_Upload_Style" >
                        Upload Photo
                    </label>
                    <button id="upload_Button" onfocus="blur()" onclick="upl()" style="border:none;background:none"></button>
                    <input id="upl_int" onchange="Import_img(this)" type="file" accept="image/*">
                    <label id="form_Buttons" class="form_Upload_Style" onclick="message_popup('demonic_error_message')">
                        Upload Video
                    </label>
                    </form>
                </div>
                <!-- feed -->
                <span id="feed">
                </span>
                <span id="f_ld">
                    <img src="img/loading.gif" height="100px"/>
                    <h1>Loading Feed Please wait.</h1>
                </span>
                <h1 id="f_dn">You're all caught up!</h1>
                <button id="s_cont" onfocus="blur()">Show More Posts</button>
            </div>
        </div>

        <!-- message -->
        <div id="message_popup">
            <div id="message_popup_Box">
            </div>
            <div class="message_popup_Confirm">
                <span id="message_Input_popup"></span><br>
                <button id="stng_Clear">Clear Local/Session Storage</button>
                <button id="stng_Export">Export Posts from Data Base</button>
                <button id="msg_Ok">Ok</button>
                <button id="msg_Cancel">Cancel</button>
                <button id="msg_Logout">Logout</button>
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
    <script type="text/javascript" src="js/s-pg.js"></script>
    <script type="text/javascript" src="js/sb-a.js"></script>
    <script type="text/javascript" src="js/a-hrf.js"></script>
</html>