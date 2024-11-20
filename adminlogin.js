const form = document.getElementById('login-form');
const emailInput = document.getElementById('email');
const passwordInput = document.getElementById('password');
const submitBtn = document.getElementById('submit-btn');
const errorMsg = document.getElementById('error-msg');

const validEmail = 'admin@gmail.com'; 
const validPassword = 'Admin123'; 
form.addEventListener('submit', (e) => {
    e.preventDefault();

    const emailValue = emailInput.value.trim();
    const passwordValue = passwordInput.value.trim();

    if (emailValue === validEmail && passwordValue === validPassword) {
        errorMsg.textContent = 'Login Successful!';
        errorMsg.style.color = 'green';
        errorlink.hrefContent = 'file:///D:/Ammps/www/OPD%20SYSTEM/DASHBOARD/dashboard.html'
    } else {
        errorMsg.textContent = 'Invalid email or password!';
        errorMsg.style.color = 'red';
    }
});