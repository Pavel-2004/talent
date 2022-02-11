nav("navBar", ["faq", "overview", "results", "talent"], "Opportunities")
document.getElementById("main").style.height = (window.innerHeight - document.getElementById("navBar").clientHeight) + "px"
document.getElementById("outsideSqr").style.height = document.getElementById("outsideSqr").clientWidth + "px"
document.getElementById("innerSquare").style.height = document.getElementById("innerSquare").clientWidth + "px"
document.getElementById("innerSquare").style.marginTop = (document.getElementById("outsideSqr").clientWidth - document.getElementById("innerSquare").clientWidth) / 2 + "px"

FAQ("faq1", "example", "Підбір спеціальностей і сфер")
FAQ("faq2", "example2", "adssa adsasda")
