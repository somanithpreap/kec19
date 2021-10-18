const form = document.getElementsByTagName('form')[0];
const username = document.getElementById('username');
const password = document.getElementById('password');
const usernameAlert = document.getElementById('username-alert');
const passwordAlert = document.getElementById('password-alert');
const submitBtn = document.querySelector('input[type="button"]');

submitBtn.addEventListener('click', () => {
    if (username.value !== '' && password.value !== '') {
        form.submit();
    } else if (username.value === '' || password.value === '') {
        if (username.value === '') {
            usernameAlert.textContent = 'សូមបំពេញឈ្មោះអ្នកប្រើប្រាស់';
            usernameAlert.style.display = 'block';
        }
        if (password.value === '') {
            passwordAlert.textContent = 'សូមបំពេញលេខសម្ងាត់';
            passwordAlert.style.display = 'block';
        }
    }
});

username.addEventListener('input', () => {
    if (usernameAlert.style.display === 'block') {
        usernameAlert.style.display = 'none';
    }
});

password.addEventListener('input', () => {
    if (passwordAlert.style.display === 'block') {
        passwordAlert.style.display = 'none';
    }
});
