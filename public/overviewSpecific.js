
console.log("here")

createOrangeText("orangeText", "МЕТОДИКИ ТАЛАНТИ-АСЕССМЕНТ")
createSmallText("sliderInfo1", "1. Генетичний/ Природний потенціал")
optionSlider("slider1", 100, 25)

createSmallText("sliderInfo2", "1. Генетичний/ Природний потенціал")
optionSlider("slider2", 100, 0)


metoticIcon("icon1", false, true)
metoticIcon("icon2", true, false)
metoticIcon("icon3", false, false)
metoticIcon("icon4", false, false)


metoticIcon("icon5", true, false)
metoticIcon("icon6", false, false)
metoticIcon("icon7", false, false)
metoticIcon("icon8", false, false)


nav("nav", ["faq", "overview", "#", "#"], "Self Relaxation")


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




function redirect(){
    window.location.href = "overview-specific/method"
}
