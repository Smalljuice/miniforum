var app = new Vue({
    el: '#app',
    data: {
        name: '',
        surname: '',
        email: '',
        password: ''
    },
    methods: {
        registration: function () {
            var formData = new FormData()
            formData.append('user_name', this.name)
            formData.append('user_surname', this.surname)
            formData.append('user_email', this.email)
            formData.append('user_password', this.password)
            var headers = {
                // Authorization: 'Bearer ' + localStorage.getItem('token'),
                'Content-Type': 'multipart/form-data'
            }

            // Пример отправки POST запроса:
            async function postData(url = 'localhost/api/registration', data = {}) {
                // Default options are marked with *
                const response = await fetch(url, {
                    method: 'POST', // *GET, POST, PUT, DELETE, etc.
                    mode: 'cors', // no-cors, *cors, same-origin
                    cache: 'no-cache', // *default, no-cache, reload, force-cache, only-if-cached
                    credentials: 'same-origin', // include, *same-origin, omit
                    headers: {
                        'Content-Type': 'application/json'
                        // 'Content-Type': 'application/x-www-form-urlencoded',
                    },
                    redirect: 'follow', // manual, *follow, error
                    referrerPolicy: 'no-referrer', // no-referrer, *client
                    body: JSON.stringify(data) // body data type must match "Content-Type" header
                });
                return await response.json(); // parses JSON response into native JavaScript objects
            }

            postData('https://example.com/answer', { answer: 42 })
                .then((data) => {
                    console.log(data); // JSON data parsed by `response.json()` call
                });
        }    
    }
})

// Пример отправки POST запроса:
async function postData(url = 'localhost', data = {}) {
    // Default options are marked with *
    const response = await fetch(url, {
      method: 'POST', // *GET, POST, PUT, DELETE, etc.
      mode: 'cors', // no-cors, *cors, same-origin
      cache: 'no-cache', // *default, no-cache, reload, force-cache, only-if-cached
      credentials: 'same-origin', // include, *same-origin, omit
      headers: {
        'Content-Type': 'application/json'
        // 'Content-Type': 'application/x-www-form-urlencoded',
      },
      redirect: 'follow', // manual, *follow, error
      referrerPolicy: 'no-referrer', // no-referrer, *client
      body: JSON.stringify(data) // body data type must match "Content-Type" header
    });
    return await response.json(); // parses JSON response into native JavaScript objects
  }
  
  postData('https://example.com/answer', { answer: 42 })
    .then((data) => {
      console.log(data); // JSON data parsed by `response.json()` call
    });