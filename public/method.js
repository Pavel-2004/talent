createOrangeText("orangeText", "МЕТОДИКА ТАЛАНТИ-АСЕССМЕНТ");
nav("nav", ["faq", "overview", "#", "#"], "Self Relaxation")

createSmallText("sliderInfo", "§1. Генетичний/ Природний потенціал")
optionSlider("slider", 100, 25);
metoticIcon("icon", false, false)
createButton("button", "СТАРТ", "");

document.getElementById("main").style.height = (window.innerHeight - document.getElementById("orangeText").clientHeight - document.getElementById("nav").clientHeight) - 30 + "px"

cardText("whatToDo", "ЩО РОБИТИ?", "Пригадай, досліди і опиши генетичний талант-потенціал Твого Роду, сильні сторони попередніх поколінь. .\n" +
    "Які реалізовані таланти (успішні кейси Твоїх батьків і предків) могли передатися Тобі спадково?")

cardText("method", "МЕТА", "Активувати талант-потенціал роду-  ресурси, дані з народження.")
cardText("result", "РЕЗУЛЬТАТ", "Враховане ментально-історичене підґрунтя Твого талант-профілю")
