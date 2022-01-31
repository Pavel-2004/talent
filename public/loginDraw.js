//
// inputField("userContainer", "text", "username", "fas fa-user");
// inputField("passwordContainer", "password", "password", "fas fa-lock", 30)
// button("button", "Login", "login()", [], 30);
// slider("slider", 100, "");




//inputField("userContainer", "text", "username", "fas fa-user");
//inputField("passwordContainer", "password", "password", "fas fa-lock", 30)
//button("button", "Login", "login()", [], 30);
//slider("slider", 100, "");
//circle("circle")
//
// <<<<<<< HEAD
//
// =======
// inputField("userContainer", "text", "username", "fas fa-user");
// inputField("passwordContainer", "password", "password", "fas fa-lock", 30)
// button("button", "Login", "login()", [], 30);
// //slider("slider", 100, "");
// //circle("circle")
// //
// slider("slider", 100, "")


//nav("nav", ["#!", "#!", "#!", "#!"], "Profile");
circle_decal("circle", 150);
for (let i = 0; i < document.getElementsByName("bar").length; i++) {
    document.getElementsByClassName("bar")[i].remove()
}

createBlackText("blackText", "ЗАРЕЄСТРУВАТИСЯ")
createOrangeText("orangeText", "А ТАЛАНТ-АССЕССМЕНТ")
inputField("username", "text","Email", "fas fa-envelope")
inputField("password", "password","Password", "fas fa-lock")
createButton("button", "SIGN UP", `aboutOne()`);

//nav("nav", ["", "", "", ""], ["fa-user", "fa-spa", "fa-search", "fa-play-circle"], ["Profile", "Self Relaxation", "Realization", "Video Interpretation"], "Realization")



function aboutOne(){
    window.location.href = "about-one"
}

