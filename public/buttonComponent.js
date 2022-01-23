let uniqueID = () => {
    let s4 = () => {
        return Math.floor((1 + Math.random()) * 0x10000)
            .toString(16)
            .substring(1);
    };
    //return id of format 'aaaaaaaa'-'aaaa'-'aaaa'-'aaaa'-'aaaaaaaaaaaa'
    return s4() + s4() + '-' + s4() + '-' + s4() + '-' + s4() + '-' + s4() + s4() + s4();
};

function inputField(parentId, type, inputText, iconClass, topMargin = 0) {
    const field = document.createElement("div");
    if(topMargin){
        field.style.marginTop = topMargin + "px";
    }

    const icon = document.createElement("span");
    const input = document.createElement("input");
    const label = document.createElement("label");
    const checkmark = document.createElement("span");

    input.type = type;
    input.required = true;

    field.className = "field";
    icon.className = "icon " + iconClass;
    checkmark.className = "checkmark fas fa-check";
    input.placeholder = inputText



    field.appendChild(icon);
    field.appendChild(input);
    field.appendChild(label);
    field.appendChild(checkmark);

    const parentDiv = document.getElementById(parentId);
    parentDiv.appendChild(field);
}

function multipleChoice(parentId, question, answers) {
    const mcParent = document.createElement("div");
    const id = uniqueID();
    const questionText = document.createElement("h2")
    questionText.innerText = question
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
    parentDiv.appendChild(questionText)
    parentDiv.appendChild(mcParent);
}

let navIcons = ["fa-user", "fa-spa", "fa-search", "fa-play-circle"];
let navTexts = ["Profile", "Self Relaxation", "Realization", "Video Interpretation"];



function button(parentId, text, func, specialCLasses, top = 0){
    button = document.createElement("button")
    button.classList.add("button")
    if(top){
        button.style.marginTop = top + "px"
    }

    console.log(button.style.marginTop)
    for (let i = 0; i < specialCLasses.length; i++) {
        button.classList.add(specialCLasses[i])
    }
    button.innerText = text
    button.setAttribute("onclick", func);
    document.getElementById(parentId).append(button)
}

/*
info = {
    "text" : {
        href: "",
        icon: "font-awesome-class",
    }
}

 */
function nav(parentId, info) {
    const nav = document.createElement("div");
    nav.className = "navigation";

    const ul = document.createElement("ul");

    for (let i = 0; i < Object.keys(info).length; i++) {
        const li = document.createElement("li");
        li.className = "list-item"
        if(i==0){
            li.classList.add("active")
        }

        const a = document.createElement("a");
        a.href = info[Object.keys(info)[i]]["href"]

        const icon = document.createElement("span")
        icon.classList.add("icon")
        icon.classList.add("fas")
        icon.classList.add(info[Object.keys(info)[i]]["icon"])

        const text = document.createElement("span")
        text.classList.add("text")

        text.innerText = Object.keys(info)[i]

        a.appendChild(icon)
        a.appendChild(text);
        li.appendChild(a);
        ul.appendChild(li);


    }

    /*
    for (let i = 0; i < 4; i++) {
        const li = document.createElement("li");
        li.className = "list-item";
        if(i===0)
            li.className = li.className + " active";

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

     */
    const indicator = document.createElement("div");
    indicator.className = "indicator";
    ul.appendChild(indicator);
    nav.appendChild(ul);

    const parentDiv = document.getElementById(parentId);
    parentDiv.appendChild(nav);
}

function dropDown (parentId, options){
    const container = document.createElement("div");
    container.className="dropdown-container";
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


//Test Uses
//inputField("div2", "text", "Email", "fas fa-envelope");
//inputField("div3", "password", "Password", "fas fa-lock");

//dropDown("dropdown", ["Option 1", "Option 2", "Longer Option", "Option 4"]);

//button("button", "login", "login()", [])
//multipleChoice("div4", "text", ["Answer1", "Answer2", "Answer3"]);
//nav("div6", {"text": {"href": "#", "icon": "fa-user"}, "text2": {"href": "#", "icon": "fa-spa"}});



function slider(parentId, maxRange, funcCall="") {
    const slider = document.createElement("input");
    slider.type = "range";
    slider.min = "0";
    slider.max = maxRange;
    slider.value = "30"
    slider.classList.add("slider")
    slider.setAttribute("onchange",funcCall);


    const bar = document.createElement("span");
    bar.classList.add("bar");

    const fill = document.createElement("span");
    fill.classList.add("fill");

    bar.appendChild(fill);

    slider.addEventListener("input", function(){setBar(fill, slider)});

    setBar(fill, slider);

    const parentDiv = document.getElementById(parentId);
    parentDiv.style.position = "relative";
    parentDiv.appendChild(slider);
    parentDiv.appendChild(bar);
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

console.log("here")
