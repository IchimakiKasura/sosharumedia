console.log("%c Stop!", css2, "\n Typing anything here will alert The server that you are commiting that against the\nrules. Thus banning your account or whitelisting your ip.");
console.log("%cYou're %s", css, "Gay if you type something here.");
console.log("%cThis is only for the developers to fix bugs and errors.", css3)
"use strict"
$("#msg_Logout").click((e) =>{
    e.preventDefault();
    $.ajax({
        type: "POST",
        url: "lg-cfm/logout-confirm.php",
        success: function(response){
            response;
            location.reload();
        }
    });
});
$("#subm").click((e)=> {
    e.preventDefault();
    let n_m = $("input[type='text']").val();
    let p_w = btoa($("input[type='password']").val());
    if(n_m == '' && p_w == ''){
        alert('No Username or Password input!');
    } else if(n_m == ''){
        alert('No Username input!');
    } else if(p_w == '') {
        alert('No Password input!');
    }
    if(n_m != '' && p_w != ''){
    $.ajax({
        type: "POST",
        url: "lg-cfm/login-confirm.php",
        data: {user: n_m,password: p_w},
        success: function(response){
            if(response != 'err'){
                response;
                location.reload();
            } else {
                alert('Wrong Username or Password.');
                p_w.val() = '';
            }
            if(response == 'inuse'){
                alert("The account you're trying to access is currently being used");
                n_m.val() = '';
                p_w.val() = '';
            }
        }
    });
    }
});


$("#stT").click((e)=>{
    e.preventDefault();
    message_popup('settings_pop');
});
$("#_lG").click((e)=>{
    e.preventDefault();
    message_popup('logout_show');
});
$("#stng_Clear").click((e)=>{
    e.preventDefault();
    sessionStorage.clear();
    localStorage.clear();
    alert('Cleared!');
});
$("#msg_Ok").click((e)=>{
    e.preventDefault();
    message_popup('cancel');
});
$("#msg_Cancel").click((e)=>{
    e.preventDefault();
    message_popup('cancel');
});

 