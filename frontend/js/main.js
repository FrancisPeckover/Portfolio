let interceptAnims;

document.addEventListener('DOMContentLoaded', () => {
	interceptAnims = document.getElementsByClassName('animated');
	for (let i = 0; i < interceptAnims.length; i++) {
		interceptAnims[i].style.webkitAnimationPlayState = 'paused';
	}
});

document.addEventListener('scroll', interceptAnim);

function interceptAnim() {
	for (let i = 0; i < interceptAnims.length; i++) {
		if (window.pageYOffset + window.innerHeight * 0.5 > getYOffset(interceptAnims[i])) {
			interceptAnims[i].style.webkitAnimationPlayState = 'running';
		}
	}
}

function getYOffset(element) {
	var offset = 0;

	while (element) {
		offset += element.offsetTop;
		element = element.offsetParent;
	}

	return offset;
}
