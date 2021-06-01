

function addMenu() {
    var d = document.getElementById('cycle-menu');
    if(d.classList.contains("hidden"))
    d.classList.remove("hidden");
    else 
    d.classList.add("hidden");
};

function timeTable(){
    var d1 = document.getElementById('timetable');
    var d2 = document.getElementById('marks');
    var d3 = document.getElementById('profile');
    var d4 = document.getElementById('activities');

    if(!d2.classList.contains("hidden"))
    d2.classList.add("hidden");
    if(!d3.classList.contains("hidden"))
    d3.classList.add("hidden");
    if(!d4.classList.contains("hidden"))
    d4.classList.add("hidden");
    d1.classList.remove("hidden");

    
};


function marks(){
    var d1 = document.getElementById('marks');
    var d2 = document.getElementById('timetable');
    var d3 = document.getElementById('profile');
    var d4 = document.getElementById('activities');

    if(!d2.classList.contains("hidden"))
    d2.classList.add("hidden");
    if(!d3.classList.contains("hidden"))
    d3.classList.add("hidden");
    if(!d4.classList.contains("hidden"))
    d4.classList.add("hidden");
    d1.classList.remove("hidden");
};

function profile(){
    var d1 = document.getElementById('profile');
    var d2 = document.getElementById('marks');
    var d3 = document.getElementById('timetable');
    var d4 = document.getElementById('activities');

    if(!d2.classList.contains("hidden"))
    d2.classList.add("hidden");
    if(!d3.classList.contains("hidden"))
    d3.classList.add("hidden");
    if(!d4.classList.contains("hidden"))
    d4.classList.add("hidden");
    d1.classList.remove("hidden");
};

function activities(){
    var d1 = document.getElementById('activities');
    var d2 = document.getElementById('marks');
    var d3 = document.getElementById('profile');
    var d4 = document.getElementById('timetable');

    if(!d2.classList.contains("hidden"))
    d2.classList.add("hidden");
    if(!d3.classList.contains("hidden"))
    d3.classList.add("hidden");
    if(!d4.classList.contains("hidden"))
    d4.classList.add("hidden");
    d1.classList.remove("hidden");
};

function parentProfile(){

    var d1 = document.getElementById('profile');
    var d2 = document.getElementById('children');
    var d3 = document.getElementById('observ');

    if(!d2.classList.contains("hidden"))
    d2.classList.add("hidden");
    if(!d3.classList.contains("hidden"))
    d3.classList.add("hidden");
    d1.classList.remove("hidden");
};

function childrenList(){
    var d1 = document.getElementById('children');
    var d2 = document.getElementById('profile');
    var d3 = document.getElementById('observ');

    if(!d2.classList.contains("hidden"))
    d2.classList.add("hidden");
    if(!d3.classList.contains("hidden"))
    d3.classList.add("hidden");
    d1.classList.remove("hidden");

};

function observationss(){

    var d1 = document.getElementById('observ');
    var d2 = document.getElementById('children');
    var d3 = document.getElementById('profile');

    if(!d2.classList.contains("hidden"))
    d2.classList.add("hidden");
    if(!d3.classList.contains("hidden"))
    d3.classList.add("hidden");

    d1.classList.remove("hidden");

};

