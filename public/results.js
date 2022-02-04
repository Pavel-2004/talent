
createOrangeText("title", "ТВІЙ ТАЛАНТ-ПРОФІЛЬ\n" + "РЕЗУЛЬТАТИ МЕТОДИК")


createTalentIcon("talent1", "Конституційний аналіз і Фізіогноміка")
createTalentIcon("talentTwo", "Енергетичні материці та Покликання")
createTalentIcon("talentThree", "Eas as adasa")

nav("nav", ["faq", "overview", "results", "talent"], "Results")
document.getElementById("main").style.height = (window.innerHeight - document.getElementById("title").clientHeight - document.getElementById("nav").clientHeight) - 30 + "px"

function profile(){
    window.location.href = "profile"
}
