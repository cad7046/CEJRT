function hoverIn(callerElement) {
    if (callerElement.getElementsByClassName('dropdown').length == 0) {
        callerElement.style.backgroundColor = '#333652';
    } else {
    	callerElement.style.backgroundColor = '#333652';
    	callerElement.getElementsByClassName('dropdown')[0].style.backgroundColor = 'transparent';
    }
}

function hoverOut(callerElement) {
	callerElement.style.backgroundColor = 'transparent';
}

function dropdownIn(callerElement) {
    callerElement.getElementsByClassName('dropdown')[0].style.display = 'block';
}

function dropdownOut(callerElement) {
    callerElement.getElementsByClassName('dropdown')[0].style.display = 'none';
}