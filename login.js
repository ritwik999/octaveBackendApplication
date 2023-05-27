const submit = document.querySelector('#login');

const saveLead =  async() => {

    let userName = document.getElementById("User-Name").value
    let userEmail = document.getElementById("User-Email").value
    let password = document.getElementById("Pass-Word").value
    let response = await fetch('POSTMAN API URL'); //GET

    let response2 = await fetch('save user postman api url', {
        method: 'POST',
        headers:{
            'Accept': 'application/json',
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({
            name: userName,
            email: userEmail,
            password: password
        })
    });
    console.log(response2);
    console.log(response);
}

login.addEventListener('click', saveLead);