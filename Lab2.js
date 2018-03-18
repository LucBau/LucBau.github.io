let getData = (url) => {
    return new Promise((resolve, reject) => {  // creation de la promesse
        let xhr = new XMLHttpRequest();   // XMLHttpRequest = xhr

        xhr.open('GET', url);  //si la prommesse est tenue
        xhr.onload = () => {  // Debut de la condition si elle est rompue
            if (xhr.status == 200) {   // status =200, signifie une requete sucessful
                resolve(JSON.parse(xhr.response)); //JSON, permet de lire une data sur un serveur web, et de l'afficher sur une page web
            } else {
                reject(xhr.responseText); // on ne prend pas la reponse de la requete si elle n'est pas sucessfull
            }
        };
        xhr.onerror = () => reject(Error('Network Error'));
        xhr.send();
    });
};

getData('http://jservice.io/api/categories?count=5&offset=10')
    .then((res) => {
        let fetchQuestions = [];
        const categories = document.querySelector('#categories');
        const questions = document.querySelector('#questions');
        for (const category of res) {
            fetchQuestions.push(getData(`http://jservice.io/api/category?id=${category['id']}`));
            let div = document.createElement('div');
            let title = document.createTextNode(category['title']);
            div.appendChild(title);
            div.id = category['id'];
            div.classList.add('category');
            categories.appendChild(div);
        }

        Promise.all(fetchQuestions)
            .then((res) => {
                for (const r of res) {
                    let c = 0;
                    for (const question of r['clues']) {
                        c += 1;
                        let div = document.createElement('div');
                        let points = document.createTextNode(question['value']);
                        div.appendChild(points);
                        div.id = question['id'];
                        div.classList.add('question');
                        div.setAttribute('data-value', question['value']);
                        div.setAttribute('data-question', question['question']);
                        div.setAttribute('data-show', 'false');

                        div.addEventListener('click', (event) => {
                            let _div = event.target;
                            if (_div.getAttribute('data-show').indexOf('true') > -1) {
                                _div.innerHTML = _div.getAttribute('data-value');
                                _div.setAttribute('data-show', 'false');
                            } else {
                                _div.innerHTML = _div.getAttribute('data-question');
                                _div.setAttribute('data-show', 'true');

                            }
                        });

                        questions.appendChild(div);
                        if (c == 5) break;
                    }
                }
            })
            .catch((error) => {
                alert(error);
            });
    })
    .catch((error) => {
        alert(error);
    });
