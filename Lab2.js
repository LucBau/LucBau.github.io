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
        xhr.onerror = () => reject(Error('Network Error')); // si la requete failed
        xhr.send();  // send the request to the serveur, cause it's asynchronous as default
    });
};

getData('http://jservice.io/api/categories?count=5&offset=10') // get the date from the web
    .then((res) => {  // res is here to send back the http response
        let fetchQuestions = [];
        const categories = document.querySelector('#categories'); // querySelector renvoie l'objet ayant pour classe CSS categories
        const questions = document.querySelector('#questions'); // querySelector renvoie l'objet ayant pour classe CSS questions
        for (const category of res) {   //select the category in the res
            fetchQuestions.push(getData(`http://jservice.io/api/category?id=${category['id']}`));
            let div = document.createElement('div'); //create a div element
            let title = document.createTextNode(category['title']);  // create a title
            div.appendChild(title); //append the title to 'div'
            div.id = category['id'];
            div.classList.add('category');
            categories.appendChild(div); //append the div to #categories
        }

        Promise.all(fetchQuestions)
            .then((res) => {
                for (const r of res) {
                    let c = 0; //using let in order to be see only in the for function
                    for (const question of r['clues']) {
                        c += 1;
                        let div = document.createElement('div'); //create a 'div' element
                        let points = document.createTextNode(question['value']); // create a text 'value'
                        div.appendChild(points); //append the let point to a 'div'
                        div.id = question['id'];
                        div.classList.add('question'); //the class id become 'questions'
                        div.setAttribute('data-value', question['value']); // data-value get question['value'] as value
                        div.setAttribute('data-question', question['question']); // data-question get question['question'] as value
                        div.setAttribute('data-show', 'false'); //data-show get 'False' as value


                        // this block define what happened after the user action : the click.  How the value become the question and the opposite way after the user click
                        div.addEventListener('click', (event) => {  //create a event with the user click
                            let _div = event.target; //_div became the event.target
                            if (_div.getAttribute('data-show').indexOf('true') > -1) { // condition de la boucle : si 'data-show' become 'true'
                                _div.innerHTML = _div.getAttribute('data-value'); // change the HTML content of _div into the value in data-value
                                _div.setAttribute('data-show', 'false'); // then, it become false
                            } else {
                                _div.innerHTML = _div.getAttribute('data-question');  // change the html content of _div into the value in data-question
                                _div.setAttribute('data-show', 'true'); // then , it become true

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
