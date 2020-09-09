let interceptAnims;

document.addEventListener('DOMContentLoaded', () => {
	interceptAnims = document.getElementsByClassName('animated');
	pauseAnimations();
	configureLinks();
});

document.addEventListener('scroll', () => {
	for (let i = 0; i < interceptAnims.length; i++) {
		if (checkIntercept(interceptAnims[i])) {
			playAnimation(interceptAnims[i]);
		}
	}
});

function pauseAnimations() {
	for (let i = 0; i < interceptAnims.length; i++) {
		interceptAnims[i].style.webkitAnimationPlayState = 'paused';
	}
}

function checkIntercept(element) {
	if (window.pageYOffset + window.innerHeight * 0.5 > getYOffset(element)) {
		return true;
	} else {
		return false;
	}
}

function playAnimation(element) {
	element.style.webkitAnimationPlayState = 'running';
}

function getYOffset(element) {
	var offset = 0;

	while (element) {
		offset += element.offsetTop;
		element = element.offsetParent;
	}

	return offset;
}

function configureLinks() {
	let scrollers = document.getElementsByClassName('nav-link');
	for (let i = 0; i < scrollers.length; i++) {
		scrollers[i].onclick = (event) => {
			event.preventDefault();
			document.getElementById(scrollers[i].getAttribute('href').split('#')[1]).scrollIntoView();
		};
	}
}
