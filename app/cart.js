const cart = document.getElementById('cart');
const createAcc = document.getElementById('create_account');
const payment = document.getElementById('payment');
const cart_nav = document.getElementById('cart_nav');
const acc_nav = document.getElementById('acc_nav');
const payment_nav = document.getElementById('payment_nav');

document.getElementById("continue").addEventListener('click', ()=>{
    cart.classList.add("hidden");
    cart_nav.classList.remove('text-blue-600', 'border-b-2');
    acc_nav.classList.add('text-blue-600', 'border-b-2', 'border-blue-500');
    createAcc.classList.remove('hidden');
});

document.getElementById('continue_to_payment').addEventListener('click', ()=>{
    acc_nav.classList.remove('text-blue-600', 'border-b-2');
    payment_nav.classList.add('text-blue-600', 'border-b-2');
    createAcc.classList.add('hidden');
    payment.classList.remove('hidden');
});