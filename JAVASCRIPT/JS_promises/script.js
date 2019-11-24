let myPromise = () => {
	console.log('myPromise run...');
	return new Promise((resolve, reject) => {
		let xhr = new XMLHttpRequest();
		xhr.open('GET', 'https://api.github.com/users/rafaelmuto');
		xhr.send(null);

		xhr.onreadystatechange = () => {
			if (xhr.readyState === 4) {
				if (xhr.status === 200) {
					resolve(JSON.parse(xhr.responseText));
				} else {
					reject('something went wrong... o___O');
				}
			}
		};
	});
};

myPromise()
	.then(response => {
		console.log(response);
	})
	.catch(error => {
		console.log(error);
	});
