const button = document.querySelector('#button');


button.addEventListener("click", () => {

    let answer = 111;
    document.querySelectorAll('[name="briedis"]').forEach((radio) => {
        if (radio.checked) {
            answer = radio.value;
        }
    });



    axios.post('http://localhost/_3/r/briedis2.php', {
            answer: answer
        })
        .then(function(response) {

            document.querySelector('#top').innerHTML = response.data.atsakymas;
            console.log(response.data);
        })
        .catch(function(error) {
            console.log(error);
        });

});