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
            circle.style.backgroundColor = "#FBA158";
        } else{
            circle.style.backgroundColor = "#EBECF0"
        }
        parentDiv.append(circle)
    }
    document.getElementById(parentId).append(parentDiv)
}


function createButton(parentId, context, action){
    parent = document.getElementById(parentId)
    button = document.createElement("button")
    button.classList.add("button")
    button.innerText = context
    button.setAttribute("onclick", action);
    parent.append(button)
}

function createBlackText(parentId, context){
    h2 = document.createElement("h2")
    h2.classList.add("blackText")
    h2.innerText = context
    document.getElementById(parentId).append(h2)
}


function createSmallText(parentId, context){
    p = document.createElement("p")
    p.classList.add("smallText")
    p.classList.add("text-center")
    p.innerText = context

    document.getElementById(parentId).append(p)
}

function createOrangeText(parentId, context){
    p = document.createElement("p")
    p.classList.add("orangeText")
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

//Test Uses
//inputField("username", "text", "Email", "fas fa-envelope");
// inputField("div3", "password", "Password", "fas fa-lock");
// dropDown("dropdown", ["Option 1", "Option 2", "Longer Option", "Option 4"]);
// multipleChoice("div4", ["Answer1", "Answer2", "Answer3"]);


//------------------------------------------------------------------
const listItem = document.querySelectorAll('.list-item');

function activeLink() {
    listItem.forEach((item) =>
        item.classList.remove('active'));
    this.classList.add('active');
}

listItem.forEach((item) =>
    item.addEventListener('click', activeLink));
