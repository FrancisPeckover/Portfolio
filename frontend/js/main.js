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
		if (window.pageYOffset + window.innerHeight > interceptAnims[i].offsetTop + 300) {
			interceptAnims[i].style.webkitAnimationPlayState = 'running';
		}
	}
}
