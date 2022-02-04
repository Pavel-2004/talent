nav("nav", ["faq", "overview", "results", "talent"], "Opportunities")

document.getElementById("outsideSqr").style.height = document.getElementById("outsideSqr").clientWidth + "px"
document.getElementById("innerSquare").style.height = document.getElementById("innerSquare").clientWidth + "px"
document.getElementById("innerSquare").style.marginTop = (document.getElementById("outsideSqr").clientWidth - document.getElementById("innerSquare").clientWidth) / 2 + "px"


function talentInfo(){
    window.location.href = "talent-info"
}
