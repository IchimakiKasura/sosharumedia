"use strict"
var prevKey="";
let formChanged = false;
$(window).bind("beforeunload", ()=> {
    if(formChanged){
        return '';
    }
})
function t_i(date) {
    var hours = date.getHours();
    var minutes = date.getMinutes();
    var weekINT = date.getDay();
    var monthINT = date.getMonth() + 1;
    var day = date.getDate();
    var Year = date.getYear() + 1900;
    var ampm = hours >= 12 ? 'pm' : 'am';
    var week;
    var month;
    switch(weekINT){
        case 1: week = "Mon";
            break;
        case 2: week = "Tue";
            break;
        case 3: week = "Wed";
            break;
        case 4: week = "Thu";
            break;
        case 5: week = "Fri";
            break;
        case 6: week = "Sat";
            break;
        case 0:  week = "Sun";
            break;
    }
    switch(monthINT){
        case 1:month="Jan";
        break;
        case 2:month="Feb";
        break;
        case 3:month="Mar";
        break;
        case 4:month="Apr";
        break;
        case 5:month="May";
        break;
        case 6:month="Jun";
        break;
        case 7:month="Jul";
        break;
        case 8:month="Aug";
        break;
        case 9:month="Sept";
        break;      
        case 10:month="Nov";
        break;
        case 11:month="Oct";
        break;
        case 12:month="Dec";
        break;
    }
    hours = hours % 12;
    hours = hours ? hours : 12; // the hour '0' should be '12'
    minutes = minutes < 10 ? '0'+minutes : minutes;
    var strTime = `posted on ${week} | ${month} ${day}, ${Year} at ${hours}:${minutes} ${ampm}`;
    return strTime;
}
if(isMobile){
    document.getElementById("s_cont").onmousedown = () => {
        loadCont();
    }
} else {
    document.getElementById("s_cont").remove()
}
document.addEventListener("paste", function(e) {
    e.preventDefault();
    var text = (e.originalEvent || e).clipboardData.getData('text/plain');
    document.execCommand("insertText", false, text);
});
function message_popup(attr) {
    switch(attr){
        default:
            $("#message_popup")[0].style.display = "none";
            $("#msg_Ok")[0].style.display = "none";
            $("#msg_Cancel")[0].style.display = "none";
            $("#msg_Logout")[0].style.display = "none";
            $('#stng_Export')[0].style.display = 'none';
            $("#stng_Clear")[0].style.display = 'none';
            break;
        case "logout_show":
            $("#message_popup_Box")[0].innerHTML = "Logout?";
            $("#message_Input_popup")[0].innerHTML = "You're about to logout!<br><br>";
            $("#message_popup")[0].style.display = "block";
            $("#msg_Ok")[0].style.display = "none";
            $("#msg_Cancel")[0].style.display = "block";
            $("#msg_Logout")[0].style.display = "block";
            $('#stng_Export')[0].style.display = 'none';
          break;
        case "cancel":
            $("#msg_Ok")[0].style.display = "none";
            $("#msg_Cancel")[0].style.display = "none";
            $("#msg_Logout")[0].style.display = "none";
            imgP.style.display= "none";
            $("#message_popup")[0].style.display = "none";
            $("#msg_Ok")[0].innerText = "Ok";
            $('#stng_Export')[0].style.display = 'none';
            $("body").get(0).style.overflow = 'auto';
            break;
        case "error_message":
            $("#msg_Ok")[0].style.display = "block";
            $("#msg_Cancel")[0].style.display = "none";
            $("#msg_Logout")[0].style.display = "none";
            $("#message_popup_Box")[0].innerHTML = "Error";
            $("#message_Input_popup")[0].innerHTML = "Empty!!<br><br>";
            $("#message_popup")[0].style.display = "block";
            $('#stng_Export')[0].style.display = 'none';
            break;
        case "demonic_error_message":
            $("#msg_Ok")[0].style.display = "block";
            $("#msg_Ok")[0].innerText = "Ok"
            $("#msg_Cancel")[0].style.display = "none";
            $("#msg_Logout")[0].style.display = "none";
            $("#message_popup_Box")[0].innerHTML = "Whoops!";
            $("#message_Input_popup")[0].innerHTML = "Sorry this feature isn't supported yet!<br><br>";
            $("#message_popup")[0].style.display = "block";
            $('#stng_Export')[0].style.display = 'none';
            break;
        case "img_Error":
            $("#msg_Ok")[0].style.display = "block";
            $("#msg_Cancel")[0].style.display = "none";
            $("#msg_Logout")[0].style.display = "none";
            $("#message_popup_Box")[0].innerHTML = "Whoops!";
            $("#message_Input_popup")[0].innerHTML = "For some reason only 1 File can be uploaded!<br><br>";
            $("#message_popup")[0].style.display = "block";
            $('#stng_Export')[0].style.display = 'none';
            break;
        case "img_Error_Size":
            $("#msg_Ok")[0].style.display = "block";
            $("#msg_Cancel")[0].style.display = "none";
            $("#msg_Logout")[0].style.display = "none";
            $("#message_popup_Box")[0].innerHTML = "Whoops!";
            $("#message_Input_popup")[0].innerHTML = "The file is too big!<br>3.7mb is only the limit!<br><br>";
            $("#message_popup")[0].style.display = "block";
            $('#stng_Export')[0].style.display = 'none';
            break;
        case "settings_pop":
            $("#msg_Ok")[0].style.display = "none";
            $("#msg_Cancel")[0].style.display = "block";
            $("#msg_Logout")[0].style.display = "none";
            $("#message_popup_Box")[0].innerHTML = "[development]";
            $("#message_Input_popup")[0].innerHTML = `Administrator Settings.
                                    <br><br>
                                    [note: this is no longer working because sessionStorage is no longer in-use]`;
            $("#message_popup")[0].style.display = "block";
            $('#stng_Export')[0].style.display = 'inline-block';
            break;
    }
}
function checkPost() {
    let v = post_Status;
    let regex = /^(?![\s-])[\w\s-]+/.test(v.innerHTML);
    if(!regex && !hasImage){
        v.innerHTML = "";
        message_popup("error_message");
    } else {
        v.innerText.trim();
        submitPost();
    }
}
function submitPost(){
    nPost++
    var ranID = uniqeID(6);
    $.ajax({
        type: "POST",
        url: "posts/Z2V0RmlsZQ==.php",
        data: {bool:hasImage},
        success: function (response) {
            feed.insertAdjacentHTML("afterbegin",response);
            $("div[tag='divP']").attr('name',ranID);
            $("img[tag='imgP']").attr('src',user_Pic.src);
            $("img[tag='imgP']").attr('alt',user_Name);
            $("h1[tag='h1P']").attr('title',user_Name);
            $("h1[tag='h1P']").text(user_Name);
            $("pre[tag='preP']").text(t_i(new Date));
            $("div[tag='divP']").removeAttr("tag");
            $("img[tag='imgP']").removeAttr("tag");
            $("img[tag='imgP']").removeAttr("tag");
            $("h1[tag='h1P']").removeAttr("tag");
            $("h1[tag='h1P']").removeAttr("tag");
            $("pre[tag='preP']").removeAttr("tag");
            if(hasImage){
                $("img[tag='imgP2']").attr('src', localStorage.getItem("imgData"));
                $("img[tag='imgP2']").removeAttr('tag');
            }
        },
        complete: ()=>{
            $("p[tag='plP']").text(post_Status.innerText);
            let g = $("span[name='g']");
            let fg = $(`div[name='${ranID}']`);
            $("p[tag='plP']").removeAttr("tag");
            let A251 = g[0].innerHTML;
            fg[0].insertAdjacentHTML("afterbegin", `<div id="p_Bar_b"><div id="p_Bar_w"></div></div>`);
            $('#p_Bar_w')[0].style.width = "0%";
            fg[0].style.opacity = "0.5";
            fg[0].style.pointerEvents = "none";
            g[0].removeAttribute('name');
            nPost--;
            hasImage = false;
            HasNoImage = true;
            img_prev.innerHTML = "";
            post_Status.innerText = "";
            setTimeout(()=>{
                $.ajax({
                xhr: function() {
                    let xhr = new window.XMLHttpRequest();
                    xhr.upload.addEventListener("progress", function(evt){
                        if(evt.lengthComputable){
                            let percentComplete = ((evt.loaded / evt.total) * 100);
                            $('#p_Bar_w')[0].style.width = `${percentComplete}%`;
                        }
                    }, false)
                    return xhr;
                },
                type: "POST",
                url: "pstats_upd.php",
                data: {D2G6: A251},
                proccessData:false,
                beforeSend:function(){
                    formChanged = true;
                },
                success:function(resp){
                    if(resp == 'ok'){
                        $('#upl_int')[0].value = '';
                        formChanged = false;
                        fg.removeAttr('style');
                        localStorage.removeItem("imgData");
                    }
                },
                complete:function(){
                    $('#p_Bar_b')[0].remove();
                }
            })
        },1000)
            
        }
    });
}
function Import_img(obj){
    if(document.getElementById("upl_int").files[0].size > 3882606){
        message_popup('img_Error_Size');
        $('#upl_int')[0].value = '';
    } else {
        if(HasNoImage){
            HasNoImage = false;
            hasImage = true;
            img_prev.innerHTML = `<img id="upload_Img" height="100px" style="margin: 20px"/>
                                    <div href="#">
                                        <a href="javascript:void(0)" onclick="removePic()" class="form_Buttons">
                                            remove photo
                                        </a>
                                    </div>`;

            if (FileReader)
            {
                let reader = new FileReader();
                reader.readAsDataURL(obj.files[0]);
                reader.onload = function (e) {
                    localStorage.setItem("imgData", reader.result);
                let image=new Image();
                image.src=e.target.result;
                image.onload = function () {
                    $(outImage).attr('src', image.src);
                };
                }
            } else {
                img_prev.innerHTML = "";
                localStorage.removeItem("imgData");
                HasNoImage = true;
            }
        }
    }
}
function removePic(){
    hasImage = false;
    img_prev.innerHTML = null;
    HasNoImage = true;
    localStorage.removeItem("imgData");
    $('#upl_int')[0].value = '';
}
function imgShow(obj){
    imgP.style.display = "block";
    if(obj.alt != ""){
        $("i#mg_title").text(`${obj.alt}'s Picture`);
    } else {
        $("#img_title").text("Preview Pic");
    }
    $("#img_popup_show").attr('src', obj.src);
    $("body").get(0).style.overflow = 'hidden';
}
function upl(){
    event.preventDefault();
    if(hasImage){
        message_popup('img_Error');
    }else{
        $('#upl_int').trigger('click');
    }
}
function uniqeID(length) {
    var result           = '';
    var characters       = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    var charactersLength = characters.length;
    for ( var i = 0; i < length; i++ ) {
       result += characters.charAt(Math.floor(Math.random() * charactersLength));
    }
    return result;
}