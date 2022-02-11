
function start(){
    window.location.href = "faq"
}

href = ["#", "#", "#", "#"]
nav("navBar", href, "Self Relaxation")
createOrangeText("orangeText", "РОЗПОЧНІМО")
createSmallText("blackText", "ПРОЙДИ ПЕРШУ МЕТОДИКУ\n" +
    "ТАЛАНТ-АСЕССМЕНТУ ВЖЕ")

createButton("button", "СТАРТ", `start()`)

