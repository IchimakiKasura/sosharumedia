let offset = 0;
let db;
p_CG();
$(document).ready(function() {
    $.ajax({
        url: "ajax/cont_load.php",
        method: "GET",
        async: false,
        data:{
            limit:4, 
            offset:0
        },
        success:function(data){
            feed.innerHTML += data;
            offset += 4;
            if(data != '')
            {
                p_CG();
                $('#f_dn')[0].style.display = 'none';
                $('#f_ld')[0].style.display = 'block';
                if($('#s_cont')[0] != null)
                {
                    $('#s_cont')[0].style.display = "block";

                }
                if($('html')[0].scrollHeight > $('html')[0].clientHeight == false){
                    loadCont();
                }
            } else {
                $('#f_dn')[0].style.display = 'block';
                $('#f_ld')[0].style.display = "none";
                if($('#s_cont')[0] != null)
                {
                    $('#s_cont')[0].style.display = "none";
                }
            }
        }
    });
    $(window).scroll(function() {  
        if($(window).scrollTop() >= $(document).height() - $(window).height()){
            loadCont()
        }
    });
    $(window).resize(function() { 
        if($('html')[0].scrollHeight > $('html')[0].clientHeight == false){
            loadCont();
        }
    });
});

function loadCont(){
    if(db != '')
    {
        $.ajax({
            url: "ajax/cont_load.php",
            method: "GET",
            async:false,
            data:{
                limit:4, 
                offset:offset
            },
            success:function(data){
                feed.innerHTML += data;
                db = data;
                offset += 4;
                if(data != '')
                {
                    p_CG();
                    $('#f_dn')[0].style.display = 'none';
                    $('#f_ld')[0].style.display = 'block';
                    if($('#s_cont')[0] != null)
                    {
                        $('#s_cont')[0].style.display = "block";
                    }
                    loadCont();
                } else {
                    $('#f_dn')[0].style.display = 'block';
                    $('#f_ld')[0].style.display = "none";
                    if($('#s_cont')[0] != null)
                    {
                        $('#s_cont')[0].style.display = "none";
                    }
                }
            }
        }); 
    }
}