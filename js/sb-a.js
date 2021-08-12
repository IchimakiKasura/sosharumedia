"use strict"
var isShowMore = false;
var showMoreBtn = $("#sidebar_btn")[0];
var sfoo = $("#footer")[0];
var showMoreDiv = $("#profile_btn_nav")[0];
function showMore(){
    switch(isShowMore){
        case false:
            isShowMore=true;
            showMoreBtn.value = "▲"
            showMoreBtn.title = "Hide";
            sfoo.style.marginTop = "36.55rem";
            showMoreDiv.style.visibility = "visible";
            showMoreDiv.style.opacity = 1;
            showMoreDiv.style.marginBottom = "0px";
            break;

        case true:
            isShowMore=false;
            showMoreBtn.value = "▼"
            showMoreBtn.title = "Show more";
            sfoo.style.marginTop = "31.55rem";
            showMoreDiv.style.visibility = "hidden";
            showMoreDiv.style.opacity = 0;
            showMoreDiv.style.marginBottom = "-80px";
            break;
    }
}