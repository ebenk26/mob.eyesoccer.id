$(document).ready(function(){
    $("#evSlide").carousel();
    $(".left").click(function(){
        $("#evSlide").carousel("prev");
    });
    $(".right").click(function(){
        $("#evSlide").carousel("next");
    });
    $("a").on('click', function (event) {
        if (this.hash !== "") {
            event.preventDefault();
            var hash = this.hash;
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 800, function () {
                window.location.hash = hash;
            });
        }
    });
});
// window.onload = function(){
var srcbox = document.getElementById('srcbox');
var src = document.getElementById("src");
var srcS = document.getElementById("srcSub");
var close = document.getElementsByClassName("close")[0];
var menu = document.getElementById('menu');
var xMenu = document.getElementById("xMenu");
var xClose = document.getElementsByClassName("xClose")[0];
var boxNotif = document.getElementsByClassName("display-box-notif")[0];
var displayNotif = document.getElementsByClassName("box-notif")[0];
var heighMax = document.getElementsByClassName("deskripsi")[0];
var heighControl = document.getElementsByClassName("heightControl")[0];
var heighControl2 = document.getElementsByClassName("heightControl2")[0];
var xClose2 = document.getElementById("close");
var containerComment = document.getElementsByClassName("container-comment")[0];
var openComment = document.getElementsByClassName("openComment")[0];
var logBtn = document.getElementById('logBtn');
var regBtn = document.getElementById('regBtn');
var logBox = document.getElementsByClassName("login-box")[0];
var regBox = document.getElementsByClassName("register-box")[0];

window.onload = function(){
    //logBtn.onclick = function() {
    //    logBox.style.display = "block";
    //    regBox.style.display = "none";
    //    $('#logBtn').addClass('active');
    //    $('#regBtn').removeClass('active');
    //}
    //regBtn.onclick = function() {
    //    regBox.style.display = "block";
    //    logBox.style.display = "none";
    //    $('#regBtn').addClass('active');
    //    $('#logBtn').removeClass('active');
    //}
    src.onclick = function() {
        srcbox.style.display = "block";
    }
    srcS.onclick = function() {
        srcbox.style.display = "none";
    }
    close.onclick = function() {
        srcbox.style.display = "none";
    }
    menu.onclick = function() {
        xMenu.style.display = "block";
    }
    xClose.onclick = function() {
        xMenu.style.display = "none";
    }
    //boxNotif.onclick = function() {
    //    displayNotif.style.display = "block";
    //}
    //displayNotif.onclick = function() {
    //    displayNotif.style.display = "none";
    //}
    //heighControl.onclick = function() {
    //    heighMax.style.height = "auto";
    //    heighControl.style.display = "none";
    //    heighControl2.style.display = "block";
    //    heighControl2.style.zIndex = "2";
    //    heighControl2.style.color = "#000000";
    //}
    //heighControl2.onclick = function() {
    //    heighMax.style.height = "0px";
    //    heighControl.style.display = "block";
    //    heighControl2.style.display = "none";
    //}
    //openComment.onclick = function() {
    //    containerComment.style.display = "block";
    //}
    //xClose2.onclick = function() {
    //    containerComment.style.display = "none";
    //}
    function onhover(id) {
        var e = document.getElementById(id);
        if(e.style.display == 'block')
           e.style.display = 'none';
        else
           e.style.display = 'block';
     }
    window.onclick = function(event) {
        if (event.target == srcbox) {
            srcbox.style.display = "none";
        }
    }
}