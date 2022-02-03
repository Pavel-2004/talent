let uniqueID = () => {
    let s4 = () => {
        return Math.floor((1 + Math.random()) * 0x10000)
            .toString(16)
            .substring(1);
};
    //return id of format 'aaaaaaaa'-'aaaa'-'aaaa'-'aaaa'-'aaaaaaaaaaaa'
    return s4() + s4() + '-' + s4() + '-' + s4() + '-' + s4() + '-' + s4() + s4() + s4();
};

function inputField(parentId, type, inputText, iconClass) {
    const field = document.createElement("div");
    const icon = document.createElement("span");
    const input = document.createElement("input");
    const label = document.createElement("label");
    const checkmark = document.createElement("span");

    input.type = type;
    input.required = true;

    field.className = "field";
    icon.className = "icon " + iconClass;
    checkmark.className = "checkmark fas fa-check";

    const labelText = document.createTextNode(inputText);
    label.appendChild(labelText);


    field.appendChild(icon);
    field.appendChild(input);
    field.appendChild(label);
    field.appendChild(checkmark);

    const parentDiv = document.getElementById(parentId);
    console.log(parentDiv)
    parentDiv.appendChild(field);
}

function multipleChoice(parentId, answers) {
    const mcParent = document.createElement("div");
    const id = uniqueID();
    for (let i = 0; i < answers.length; i++) {
        const answer = document.createElement("div");
        const input = document.createElement("input");
        const label = document.createElement("label");
        input.type = "radio";
        input.name = id;

        const labelText = document.createTextNode(answers[i].toString());
        label.appendChild(labelText);

        answer.appendChild(input);
        answer.appendChild(label);
        mcParent.appendChild(answer);
    }

    mcParent.className = "mc-parent";

    const parentDiv = document.getElementById(parentId);
    parentDiv.appendChild(mcParent);
}
let navIcons = ["fa-user", "fa-spa", "fa-search", "fa-play-circle"];
let navTexts = ["Profile", "Self Relaxation", "Realization", "Video Interpretation"];



function nav(parentId, hrefs, active) {
    const nav = document.createElement("div");
    nav.className = "navigation";
    console.log("in")
    const ul = document.createElement("ul");

    for (let i = 0; i < 4; i++) {
        const li = document.createElement("li");
        li.className = "list-item";
        console.log(i)
        console.log(navTexts[i])
        if(navTexts[i] == active){
            li.classList.add("active")
        }
        const a = document.createElement("a");
        a.href = hrefs[i];

        const icon = document.createElement("span");
        icon.className = "icon fas " + navIcons[i].toString();

        const text = document.createElement("span");
        text.className = "text";

        const _text = document.createTextNode(navTexts[i].toString());
        text.appendChild(_text);

        a.appendChild(icon);
        a.appendChild(text);
        li.appendChild(a);
        ul.appendChild(li);

    }
    const indicator = document.createElement("div");
    indicator.className = "indicator";
    ul.appendChild(indicator);
    nav.appendChild(ul);

    const parentDiv = document.getElementById(parentId);
    parentDiv.appendChild(nav);
}

function dropDown(parentId, options) {
    const container = document.createElement("div");
    container.className = "dropdown-container";
    const select = document.createElement("select");
    for (let i = 0; i < options.length; i++) {
        const option = document.createElement("option");
        option.value = options[i].toString();
        const optionText = document.createTextNode(options[i].toString());
        option.appendChild(optionText);

        select.appendChild(option);
    }

    container.appendChild(select);

    const parentDiv = document.getElementById(parentId);
    parentDiv.appendChild(container);
}

function setBar(fill, slider) {
    fill.style.width = (slider.value - 2).toString() + "%";
    //
}

function createCircleNav(parentId, number){
    parentDiv = document.createElement("div")
    parentDiv.classList.add("circle-nav")

    for (let i = 0; i < 3; i++) {
        circle = document.createElement("span")
        circle.classList.add("circle-invid")

        if(i==number){
            circle.classList.add("active");
        } else{
            circle.classList.remove("active");
        }
        parentDiv.append(circle)
    }
    document.getElementById(parentId).append(parentDiv)
}


function createButton(parentId, context, action){
    parent = document.getElementById(parentId)
    button = document.createElement("button")
    button.classList.add("button-orange")
    button.innerText = context
    button.setAttribute("onclick", action);
    parent.append(button)
}

function createBlackText(parentId, context){
    h2 = document.createElement("h2")
    h2.classList.add("text-center")
    h2.classList.add("blackText")
    h2.innerText = context
    document.getElementById(parentId).append(h2)
}

function createBlackTextTitle(parentId, context){
    h2 = document.createElement("h2")
    h2.classList.add("blackTextTitle")
    h2.innerText = context
    document.getElementById(parentId).append(h2)
}


function createSmallText(parentId, context){
    p = document.createElement("p")
    p.classList.add("verySmallText")
    p.classList.add("text-center")
    p.innerText = context

    document.getElementById(parentId).append(p)
}

function createOrangeText(parentId, context){
    p = document.createElement("p")
    p.classList.add("gradient-text")
    p.style.fontSize = "1.4rem";
    p.style.fontWeight = "600";
    p.innerText = context
    document.getElementById(parentId).append(p)
}

function slider(parentId, maxRange, funcCall = "") {
    const slider = document.createElement("input");
    slider.type = "range";
    slider.min = "0";
    slider.max = maxRange;
    slider.value = "30"
    slider.classList.add("slider")
    slider.setAttribute("onchange", funcCall);


    const bar = document.createElement("span");
    bar.classList.add("bar");

    const fill = document.createElement("span");
    fill.classList.add("fill");

    bar.appendChild(fill);

    slider.addEventListener("input", function () {
        setBar(fill, slider)
    });

    setBar(fill, slider);

    const parentDiv = document.getElementById(parentId);
    parentDiv.style.position = "relative";
    parentDiv.appendChild(slider);
    parentDiv.appendChild(bar);
}




function optionSlider(parentId, maxRange, precent) {
    slider = document.createElement("input")
    slider.type = "range"
    slider.value = precent
    slider.min = 1
    slider.max = 100

    if(precent == 0){
        slider.classList.add("option-slider-zero")
        slider.disabled = true;
    } else{
        slider.classList.add("option-slider")
        slider.disabled = true;
    }

    document.getElementById(parentId).append(slider)
}

function circle(parentId, bars, maxHeight) {
    const circle = document.createElement("div");
    circle.classList.add("circle");
    //figure out how to put icon inside or orange circle

    let width = 200;
    console.log(width);

    const parentDiv = document.getElementById(parentId);
    parentDiv.style.position = "relative";

    for (let i = 0; i < Object.keys(bars).length; i++) {
        const bar = document.createElement("div");
        bar.classList.add("bar");
        bar.style.transform = "rotate(" + i * 10 + "deg)";
        bar.setAttribute("data-tooltip", bars[Object.keys(bars)[i]].info.toString());
        bar.setAttribute("rotation-compensation", (i * -10).toString());
        let h = (width/2) + (bars[Object.keys(bars)[i]].val/100)*maxHeight;
        bar.style.height = h + "px";
        parentDiv.appendChild(bar);
    }


    parentDiv.appendChild(circle)
}



function circle_decal(parentId, maxHeight) {
    const circle = document.createElement("div");
    circle.classList.add("circle");
    // let width = circle.offsetHeight;
    // let width = circle.getBoundingClientRect();
    let width = 200;
    console.log(width);

    const parentDiv = document.getElementById(parentId);
    parentDiv.style.position = "relative";




    parentDiv.appendChild(circle)
}

function bigIcon(parentId, iconClass) {
    const circle = document.createElement("div");
    const icon = document.createElement("span");
    icon.className = iconClass;
    icon.classList.add("gradient-text");
    circle.classList.add("big-icon");
    circle.appendChild(icon);

    const parentDiv = document.getElementById(parentId);
    parentDiv.appendChild(circle);
}

function FAQ(parentId, question, text) {
    const container = document.createElement("div");
    container.classList.add("FAQ-container");
    const wrapper = document.createElement("div");
    wrapper.classList.add("wrapper");
    const toggle = document.createElement("button");
    toggle.classList.add("toggle");
    const icon = document.createElement("i");
    icon.className = "fas fa-plus";
    const content = document.createElement("div");
    content.classList.add("content");

    const contentText = document.createTextNode(text);
    content.appendChild(contentText);
    const questionText = document.createTextNode(question);
    toggle.appendChild(questionText);

    toggle.appendChild(icon);
    wrapper.appendChild(toggle);
    wrapper.appendChild(content);
    container.appendChild(wrapper);

    toggle.addEventListener('click', () => {
        if (!toggle.classList.contains("active")) {
            content.style.height = "calc(" + content.scrollHeight + "px + 1rem)";
            toggle.classList.add("active");
        } else {
            content.style.height = "0px";
            toggle.classList.remove("active");
        }
    });


    const parentDiv = document.getElementById(parentId);
    parentDiv.appendChild(container);
}







function tag (parentId, text, isActive){
    const tag = document.createElement("h2");
    tag.appendChild(document.createTextNode(text.toString()));
    tag.classList.add("tag");

    if(isActive){
        tag.classList.add("active");
    }

    const parentDiv = document.getElementById(parentId);
    parentDiv.appendChild(tag);
}

function metoticIcon(parentId, active, watched){

    outerDiv = document.createElement("div")
    if(active){
        outerDiv.classList.add("circle-border-first-active")
    } else{
        outerDiv.classList.add("circle-border-first")
    }



    icon = document.createElement("i")
    icon.classList.add("fas")
    icon.classList.add("fa-user-alt")
    icon.classList.add("fa-lg")
    if(watched){
        icon.classList.add("icon-active")
    } else{
        icon.classList.add("iconText")
    }
    icon.classList.add("iconText")
    outerDiv.append(icon)


    innerDiv = document.createElement("div")
    innerDiv.classList.add("circle-content")

    insideDiv = document.createElement("div")
    insideDiv.classList.add("inside-text")
    insideDiv.classList.add("text-center")
    insideDiv.classList.add("smallTextIcon")
    insideDiv.innerText = "Конституційний аналіз і Фізіогноміка"

    innerDiv.append(insideDiv)

    insideCircle = document.createElement("div")
    if(active){
        insideCircle.classList.add("inside-border-active")
    } else{
        insideCircle.classList.add("inside-border")
    }

    insideImgDiv = document.createElement("div")
    insideImgDiv.classList.add("image")
    insideCircle.append(insideImgDiv)
    innerDiv.append(insideCircle)

    bottomText = document.createElement("div")
    bottomText.classList.add("bottom-text")
    bottomText.classList.add("text-center")
    bottomText.classList.add("smallTextIcon")
    bottomText.innerText = "10 XB"
    innerDiv.append(bottomText)


    outerDiv.append(innerDiv)
    document.getElementById(parentId).append(outerDiv)
    outerDiv.style.height = outerDiv.clientWidth + "px"
    document.getElementById(parentId).style.height = outerDiv.clientWidth + "px"
}


function cardWithText(parentId, title, text){
    const container = document.createElement("div");
    container.classList.add("container-div")
    container.classList.add("card-container");
    container.classList.add("row")
    container.classList.add("justify-content-center")

    innerCols = document.createElement("div")
    innerCols.classList.add("col-12")
    container.append(innerCols)

    titleRow = document.createElement("div")
    titleRow.classList.add("row")
    innerCols.append(titleRow)

    titleText = document.createElement("h2")
    titleRow.append(titleText)
    titleText.innerText = title


    parRow = document.createElement("div")
    parRow.classList.add("row")

    parText = document.createElement("p")
    parText.innerText = text
    parRow.append(parText)


    innerCols.append(parRow)

    document.getElementById(parentId).append(container)
}

function cardText(parentId, title, text){
    container = document.createElement("div")
    container.classList.add("greyCard")
    container.classList.add("row")

    colContainer = document.createElement("div")
    colContainer.classList.add("col-12")
    colContainer.classList.add("greyCard")

    container.append(colContainer)

    titleRow = document.createElement("div")
    titleRow.classList.add("row")
    titleRow.classList.add("justify-content-center")

    colContainer.append(titleRow)

    titleContainer = document.createElement("h2")
    titleContainer.classList.add("greyTitle")
    titleContainer.classList.add("text-center")
    titleContainer.innerText = title
    titleRow.append(titleContainer)


    paragraphRow = document.createElement("div")
    paragraphRow.classList.add("row")
    paragraphRow.classList.add("justify-content-center")
    colContainer.append(paragraphRow)

    paragraphContainer = document.createElement("p")
    paragraphContainer.classList.add('text-center')
    paragraphContainer.innerText = text
    paragraphRow.append(paragraphContainer)

    document.getElementById(parentId).append(container)


}


function card (parentId, imgSrc, text1, text2){
    const container = document.createElement("div");
    container.classList.add("container-div");
    container.classList.add("card-container");
    const img = document.createElement("img");
    img.setAttribute("src", imgSrc);

    const textContainer = document.createElement("div");
    textContainer.classList.add("text-container");
    const firstText = document.createElement("h2");

    firstText.appendChild(document.createTextNode(text1.toString()));

    const secondText = document.createElement("p");
    secondText.classList.add("gradient-text");

    secondText.appendChild(document.createTextNode(text2.toString()));

    container.appendChild(img);

    textContainer.appendChild(firstText);
    textContainer.appendChild(secondText);

    container.appendChild(textContainer);

    const parentDiv = document.getElementById(parentId);
    parentDiv.appendChild(container);
}







//------------------------------------------------------------------
const listItem = document.querySelectorAll('.list-item');

function activeLink() {
    listItem.forEach((item) =>
        item.classList.remove('active'));
    this.classList.add('active');
}

listItem.forEach((item) =>
    item.addEventListener('click', activeLink));
