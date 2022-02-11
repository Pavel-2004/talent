
console.log("here")

createOrangeText("orangeText", "МЕТОДИКИ ТАЛАНТИ-АСЕССМЕНТ")
createSmallText("sliderInfo1", "1. Генетичний/ Природний потенціал")
optionSlider("slider1", 100, 25)

createSmallText("sliderInfo2", "1. Генетичний/ Природний потенціал")
optionSlider("slider2", 100, 0)


metoticIcon("icon1", false, true)
document.getElementById("icon1").setAttribute("onclick", "start()")
metoticIcon("icon2", true, false)
document.getElementById("icon2").setAttribute("onclick", "start()")
metoticIcon("icon3", false, false)
document.getElementById("icon3").setAttribute("onclick", "start()")
metoticIcon("icon4", false, false)
document.getElementById("icon4").setAttribute("onclick", "start()")

metoticIcon("icon5", true, false)
document.getElementById("icon5").setAttribute("onclick", "start()")
metoticIcon("icon6", false, false)
document.getElementById("icon6").setAttribute("onclick", "start()")
metoticIcon("icon7", false, false)
document.getElementById("icon7").setAttribute("onclick", "start()")
metoticIcon("icon8", false, false)
document.getElementById("icon8").setAttribute("onclick", "start()")


nav("nav", ["faq", "overview", "results", "profile"], "Methods")


function display(view){
    for (let i = 0; i < document.getElementsByClassName("display").length; i++) {
        document.getElementsByClassName("display")[i].classList.add("d-none")
    }
    document.getElementById(view).classList.remove("d-none");
}

document.getElementById("main").style.height = (window.innerHeight - document.getElementById("orangeText").clientHeight - document.getElementById("nav").clientHeight) + "px"


for (let i = 0; i < document.getElementsByClassName("display").length; i++) {
    document.getElementsByClassName("display")[i].classList.add("d-none");
}




function start(){
    window.location.href = "overview-specific/method"
}
