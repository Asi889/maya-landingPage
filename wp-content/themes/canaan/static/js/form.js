

export const formfunction = function (form) {
    console.log(form);
    let box = document.querySelector('.message_box');


    form.addEventListener('submit', function (event) {
        event.preventDefault();
        const status = document.querySelector('input[name="look_for_job_education"]:checked')?.value;

        const form_data = {
            action: 'contactus',
            status
        };

        for (let index = 0; index < form.elements.length; index++) {
            const element = form.elements[index];
            form_data[element.name] = element.value
        }
        console.log(form_data);
        fetch(__mainData.ajaxUrl, {
            method: 'POST',
            body: new URLSearchParams(form_data),
        }).then(function (response) {
            if (response.ok) {
                return response.json();
            }
            return Promise.reject(response);
        }).then(function (data) {
            if (data.status==='fail') {

                 return box.innerHTML = '<h2 class="text-2xl">המייל שהזנת לא תקין בום!</h2>'
            }
            box.innerHTML = '<h2 class="text-2xl">ההודעה נשלחה בהצלחה, תודה</h2>'
            console.log(data);
        }).catch(function (error) {


            console.warn(error);
        });


    });


}

