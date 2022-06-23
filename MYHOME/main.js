var signup_btn = document.getElementById("signup_btn");
var signup_h1 = document.getElementById("signup_h1");
var sign_div = document.getElementsByClassName("sign_div")[0];
var signup_child = document.getElementsByClassName("signup_child");

var login_btn = document.getElementById("login_btn");
var login_h1 = document.getElementById("login_h1");
var login_div = document.getElementsByClassName("login_div")[0];
var login_child = document.getElementsByClassName("login_child");


signup_btn.addEventListener("click", ()=>{
    signup_btn.classList.toggle("down_initial");
    signup_h1.classList.toggle("up_initial");
    login_btn.classList.toggle("down_initial");
    login_h1.classList.toggle("up_initial");
    for(var i = 0; i < signup_child.length; i++){
        signup_child[i].classList.toggle("opacity");
    }
    for(var i = 0; i < login_child.length; i++){
        login_child[i].classList.toggle("opacity");
    }
    sign_div.classList.toggle("sign_div_change");
    login_div.classList.toggle("login_div_change");
});


login_btn.addEventListener("click", ()=>{
    login_btn.classList.toggle("down_initial");
    login_h1.classList.toggle("up_initial");
    signup_btn.classList.toggle("down_initial");
    signup_h1.classList.toggle("up_initial");
    for(var i = 0; i < signup_child.length; i++){
        signup_child[i].classList.toggle("opacity");
    }
    for(var i = 0; i < login_child.length; i++){
        login_child[i].classList.toggle("opacity");
    }
    login_div.classList.toggle("login_div_change");
    sign_div.classList.toggle("sign_div_change");
});
