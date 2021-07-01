document.addEventListener('DOMContentLoaded', function () {

    const form              = document.querySelector("#form");

    const formBtn           = document.querySelector("#submit");

    const respuestaForm     = document.querySelector("#respuestaForm");


   function formEnviado() {

        

        formBtn.forEach(function (formBtn) {
            formBtn.addEventListener('click', function () {
                respuestaForm.classList.add('gracias');
                form.classList.add('remove-form');


            });
        });

      




    }});

  


    /*
    for (let i = 0; i < formBtn.length; i++) {
        formBtn[i].addEventListener('click', function () {
                form.classList.add('remove-form');
                respuestaForm.classList.add('gracias');

            }

            

        )};

    formEnviado();


*/




