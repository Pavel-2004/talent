function result(){
    window.location.href = "results"
}


document.getElementById("backgroundCircle").style.height = document.getElementById("backgroundCircle").clientWidth + "px"
console.log(document.getElementById("backgroundCircle").clientWidth)
document.getElementById("backgroundCircle").style.lineHeight = document.getElementById("backgroundCircle").clientWidth + "px"
nav("nav", ["faq", "overview", "results", "talent"], "Results")
document.getElementById("main").style.height = (window.innerHeight - document.getElementById("title").clientHeight - document.getElementById("nav").clientHeight) + "px"

document.getElementById("image").style.width = document.getElementById("backgroundCircle").clientWidth - 30 + "px"
document.getElementById("image").style.height = document.getElementById("backgroundCircle").clientWidth - 30 + "px"
document.getElementById("image").style.marginLeft






