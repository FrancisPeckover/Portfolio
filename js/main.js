const darkTheme = [
	'#282828',
	'#6e6e6e',
	'#ffffff',
	'#008b8b'
];

const blueTheme = [
	'#004E64',
	'#00A5CF',
	'#9FFFCB',
	'#25A18E'
];

const lightTheme = [
	'#A6A6A8',
	'#E8E9F3',
	'#CECECE',
	'#272635'
];

function setTheme(x) {
	switch (x) {
		case 'blue':
			changeTheme(blueTheme);
			break;
		case 'dark':
			changeTheme(darkTheme);
			break;
		case 'light':
			changeTheme(lightTheme);
			break;
	}
}

function changeTheme(theme) {
	let root = document.documentElement;
	root.style.setProperty('--colour-primary', theme[0]);
	root.style.setProperty('--colour-secondary', theme[1]);
	root.style.setProperty('--colour-tertiary', theme[2]);
	root.style.setProperty('--colour-accent', theme[3]);
}
