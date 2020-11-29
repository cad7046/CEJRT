var caller = document.getElementById('qform');

caller.addEventListener('submit', function(event) {
	let questions = caller.getElementsByClassName('quizquest');
	let answers = caller.getElementsByClassName('quizans');
	const CORRCOLOR = 'GREEN';
	const INCORRCOLOR = 'ORANGE';

	for (let i = 0; i < questions.length; i++) {
		if (questions[i].classList.contains('mcquestion')) {
			let labels = questions[i].getElementsByTagName('label');
			let curMCC = questions[i].getElementsByTagName('input');
			for (let j = 0; j < curMCC.length; j++) {
				if (curMCC[j].checked) {
					if (curMCC[j].value == answers[i].innerHTML) {
						labels[j + 1].style.color = CORRCOLOR;
					} else {
						labels[j + 1].style.color = INCORRCOLOR;
						for (let k = 0; k < curMCC.length; k++) {
							if (curMCC[k].value == answers[i].innerHTML) {
								labels[k + 1].style.color = CORRCOLOR;
								break;
							}
						}
					}
					break;
				}
			}
		} else {
			if (questions[i].value.toLowerCase() == answers[i].innerHTML) {
				questions[i].style.color = CORRCOLOR;
				questions[i].style.fontWeight = 'BOLD';
			} else {
				questions[i].style.color = INCORRCOLOR;
				questions[i].style.fontWeight = 'BOLD'
			}
		}
	}

	event.preventDefault();
});