

export const formfunction = function (form) {
    let box = document.querySelector('.message_box');
    const formWrapper = document.querySelector('.lp_section8');
    const formMessage = document.querySelector('.section8-form-message');


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
            formWrapper.style.display = 'none';
            formMessage.style.display = 'block';
            // box.innerHTML = '<h2 class="text-2xl">ההודעה נשלחה בהצלחה, תודה</h2>'
            // box.innerHTML = '<div class="section8-form-message"><h1 class="lp-section8-title my-5">ההודעה נשלחה בצלחה!</h1><p class="lp_sec8_form-message-text">תודה שפניתם אלינו</p></div>'
        }).catch(function (error) {

        });


    });


}

