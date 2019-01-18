console.log('fetch.js running...');


fetch('https://ghibliapi.herokuapp.com/films')
    .then((res) => {
        return res.json();
    })
    .then((resJSON) => {
        console.log(resJSON);
        const app = document.getElementById('container');
        resJSON.forEach(film => {
            const card = document.createElement('div');
            card.setAttribute('class', 'card');
            app.appendChild(card);

            const title = document.createElement('h2');
            title.innerText = film.title;
            card.appendChild(title);

            const description = document.createElement('p');
            description.textContent = film.description;
            card.appendChild(description);

            const director = document.createElement('p');
            director.innerHTML = '<strong>Director: </strong>' + film.director;
            card.appendChild(director);

            const release_date = document.createElement('p');
            release_date.innerHTML = '<strong>Release Date: </strong>' + film.release_date;
            card.appendChild(release_date);
        });
    })