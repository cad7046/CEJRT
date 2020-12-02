var hamburgerState = false;
var navList = document.getElementById("outer");
var dropStatuses = {
    "tutorials": false,
    "quizzes": false
};


function toggleHamburger() {
    if (hamburgerState) {
        hamburgerState = false;
        navList.style.display = "none";
    } else {
        hamburgerState = true;
        navList.style.display = "flex";
    }
}

function toggleDrop(target) {
    let dropUL = target.getElementsByTagName("ul")[0];
    if (window.innerWidth <= 1200) {
        if (dropStatuses[target.id]) {
            dropStatuses[target.id] = false;
            dropUL.style.display = "none";
        } else {
            dropStatuses[target.id] = true;
            dropUL.style.display = "flex"
        }
    }
}