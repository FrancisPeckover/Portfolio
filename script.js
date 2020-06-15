function load() {
	document.querySelector('main').innerHTML +=
		"<div id='loader'><div id='outer-loading-bar'><div id='inner-loading-bar'></div></div></div>";
	document.querySelector('body').style.overflow = 'hidden';
	let loader = document.getElementById('loader');

	setTimeout(() => {
		loader.classList.add('loading');
	}, 2000);

	setTimeout(() => {
		loader.remove();
		document.querySelector('body').style.overflow = 'auto';
	}, 4000);
}
