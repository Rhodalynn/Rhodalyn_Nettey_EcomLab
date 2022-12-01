




// const form = $('#form');
// const customer_name = $('#customer_name')
// const customer_email = $('#customer_email')
// const customer_pass = $('#customer_pass')
// const conf_password = $('#conf_password')
// const customer_country = $('#customer_country')
// const customer_city = $('#customer_city')
// const customer_contact = $('#customer_contact')

let errors = 0;

// show input error message
function showError(displayPlace, message) {
    displayPlace.html(message);
}

// function checkRequired(val) {
//     if (val.value =='') {
//         showError(val.next(), `${vai.attr('id')} field is required`)
//     } else {
//         console.log('not empty')
//     }
// }
// 



//  showError = (displayPlace, message) => {
//     displayPlace.html(message);
//     errors += 1;
// }

// check for required field
// const checkRequired = (inputArr) => {
    
//     inputArr.forEach(function(input){
//         if(input.value === '') {
//             showError(input.next(), `${input.attr('id')} field is required`);
//         }
//     })
// }

// // check for input length
// const checkInputLength = (input, min, max) => {

//     if(input.val().length <= min){
//         showError(input.next(), `${input.attr('id')} must be more than ${min} characters long`);
//     } else if( input.val().length >= max){
//         showError(input.next(), `${input.attr('id')} must be less than ${max} characters long`);
//     }
// }

// // check for email structure
// const checkEmail = (input) => {
//     const regex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

//     if(!regex.test(input.val())){
//         showError(input.next(), 'Email is not valid');
//     }
// }

// // check for password match
// const checkPasswordMatch = (password1, password2) => {
//     if(password1.val() != password2.val()){
//         showError(password2.next(), 'Your passwords do not match');
//     }
// }

// When form is submitted
// form.submit(function(e){
    
//     // Submit the form
// })

const validateForm = document.getElementById('submit') 
validateForm.addEventListener("click", e =>
{
    
    // Select UI elements or inputs
    let form = document.getElementById('form').value
    let customer_name = document.getElementById('customer_name').value
    let customer_email = document.getElementById('customer_email').value
    let customer_pass = document.getElementById('customer_pass').value
    let conf_password = document.getElementById('conf_password').value
    let customer_country = document.getElementById('customer_country').value
    let customer_city = document.getElementById('customer_city').value
    let customer_contact = document.getElementById('customer_contact')
    e.preventDefault()
    // checkRequired(customer_contact)

    // console.log(customer_contact.value)
    // alert (conf_password);
    // //e.preventDefault();
    // $('small').html('');
    // errors = 0;

    // TODO check for required inputs
    //checkRequired([customer_name, customer_email, customer_pass, conf_password, customer_country, customer_city, customer_contact]);

    // // TODO check for password length
    // checkInputLength(customer_pass, 5, 10);
    // // TODO check for valid email
    // checkEmail(customer_email);
    // // TODO check if the passwords match
    // checkPasswordMatch(customer_pass, conf_password);

    // if(errors === 0){
    //     return true;
    // }else{
    //     return false;
    // }
})



// form.addEventListener('submit', e => {
//     e.preventDefault();

//     validateInputs();
// });

// const setError = (element, message) => {
//     const inputControl = element.parentElement;
//     const errorDisplay = inputControl.querySelector('.error');

//     errorDisplay.innerText = message;
//     inputControl.classList.add('error');
//     inputControl.classList.remove('success')
// }

// const setSuccess = element => {
//     const inputControl = element.parentElement;
//     const errorDisplay = inputControl.querySelector('.error');

//     errorDisplay.innerText = '';
//     inputControl.classList.add('success');
//     inputControl.classList.remove('error');
// };

// const isValidEmail = customer_email => {
//     const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
//     return re.test(String(email).toLowerCase());
// }

// const validateInputs = () => {
//     const emailValue = email.value.trim();
//     const passwordValue = customer_pass.value.trim();
//     const password2Value = conf_password.value.trim();


//     if(emailValue === '') {
//         setError(email, 'Email is required');
//     } else if (!isValidEmail(emailValue)) {
//         setError(email, 'Provide a valid email address');
//     } else {
//         setSuccess(email);
//     }

//     if(passwordValue === '') {
//         setError(customer_pass, 'Password is required');
//     } else if (passwordValue.length < 8 ) {
//         setError(customer_pass, 'Password must be at least 8 character.')
//     } else {
//         setSuccess(customer_pass);
//     }

//     if(password2Value === '') {
//         setError(conf_password, 'Please confirm your password');
//     } else if (password2Value !== passwordValue) {
//         setError(conf_password, "Passwords doesn't match");
//     } else {
//         setSuccess(conf_password);
//     }

// };
