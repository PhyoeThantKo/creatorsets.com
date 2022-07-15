//Cart Navigation
const cart = document.getElementById('cart');
const createAcc = document.getElementById('create_account');
const payment = document.getElementById('payment');
const cart_nav = document.getElementById('cart_nav');
const acc_nav = document.getElementById('acc_nav');
const payment_nav = document.getElementById('payment_nav');
const wallet_info = document.getElementById('wallet_info');
const bank_info = document.getElementById('bank_info');
const continue_btn = document.getElementById("continue");

const email_field = document.getElementById('email');
const name_field = document.getElementById('name');
const password_field = document.getElementById('password');
//deactivate submit button
const submit_btn = document.getElementById('submit');
submit_btn.disabled = true;

continue_btn.addEventListener('click', ()=>{
    cart.classList.add("hidden");
    cart_nav.classList.remove('text-yellow-600', 'border-b-2');
    acc_nav.classList.add('text-yellow-600', 'border-b-2', 'border-yellow-500');
    createAcc.classList.remove('hidden');
});

/*from validation*/
document.getElementById('continue_to_payment').addEventListener('click', ()=>{
    //activate submit button
    submit_btn.removeAttribute('disabled');

    //validate name
    const name = name_field.value;

    if (validateName(name)) {
        //validate email
        const email = email_field.value;
        if (validateEmail(email)) {
            //validate password
            const password = password_field.value;
            if (validatePsw(password)) {
                acc_nav.classList.remove('text-yellow-600', 'border-b-2');
                payment_nav.classList.add('text-yellow-600', 'border-b-2', 'border-yellow-500');
                createAcc.classList.add('hidden');
                payment.classList.remove('hidden');
            } else {
                alert("Passwork should have minimum 6 characters");
            };
        } else {
            alert("The email is invalid");
        };
    } else {
        alert("Name too short");
    };


    function validatePsw(password) {
        if (password.length >= 6) {
            return true;
        };
    };

    function validateName(name) {
        if(name.length > 3){
            return true;
        };
    };

    function validateEmail(email) {
    const re =
        /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(String(email).toLowerCase());
    }
});

document.getElementById('wallet').addEventListener('click', ()=>{
    wallet_info.classList.remove("hidden");
    bank_info.classList.add("hidden");

});
document.getElementById('bank').addEventListener('click', ()=>{
    wallet_info.classList.add("hidden");
    bank_info.classList.remove("hidden");
});

//Duration & Total Price

const total_container = document.getElementById('total_container');
const subtotal_tag = document.getElementById('subtotal');
const total_tag = document.getElementsByClassName('total');
const total_input_tag = document.getElementById('total_input');
const mo_price = document.getElementById('mo_price');
const duraion_tag = document.getElementById('duration');
const select_notice = document.getElementById('select_notice');

document.getElementById('paymonthly').addEventListener('click', ()=>{
    continue_btn.classList.remove('pointer-events-none', 'opacity-50');
    subtotal_tag.innerHTML = mo_price.innerHTML + "Ks";
    duraion_tag.innerHTML = "1 month";
    total_tag[0].innerHTML = mo_price.innerHTML + "Ks";
    total_tag[1].innerHTML = mo_price.innerHTML + "Ks";
    total_input_tag.value = mo_price.innerHTML;
    select_notice.classList.add('hidden');
    total_container.classList.remove('hidden');
});

const an_price = document.getElementById('an_price').innerHTML;
const annual_total_price = an_price * 12;

document.getElementById('annually').addEventListener('click', ()=>{
    continue_btn.classList.remove('pointer-events-none', 'opacity-50');
    subtotal_tag.innerHTML = an_price  + "Ks";
    duraion_tag.innerHTML = "1 Year";
    total_tag[0].innerHTML = annual_total_price + "Ks";
    total_tag[1].innerHTML = annual_total_price + "Ks";
    total_input_tag.value = annual_total_price;
    select_notice.classList.add('hidden');
    total_container.classList.remove('hidden');
});