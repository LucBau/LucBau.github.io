let getData = (url) => {
    return new Promise((resolve, reject) => {  // create the promesse
        let xhr = new XMLHttpRequest();   // XMLHttpRequest = xhr

        xhr.open('GET', url);  //if the prommesse is true
        xhr.onload = () => {  // start of the condition if she is broken
            if (xhr.status == 200) {   // status =200, means a  sucessful request
                resolve(JSON.parse(xhr.response)); //JSON,  Allowed the user to read a data on a web serveur and to print it on a web page
            } else {
                reject(xhr.responseText); //  We do not take the answers of the request if she's not succesfull
            }
        };
        xhr.onerror = () => reject(Error('Network Error')); // if the request failed
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

                        questions.appendChild(div); //append the let div to 'questions'
                        if (c == 5) break;
                    }
                }
            })
            .catch((error) => {   //out of the second then
                alert(error);
            });
    })
    .catch((error) => { //out of the first then
        alert(error);
    });
