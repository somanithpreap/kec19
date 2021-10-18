const form = document.getElementsByTagName('form')[0];
const username = document.getElementById('username');
const password = document.getElementById('password');
const phone = document.getElementById('phone');
const usernameAlert = document.getElementById('username-alert');
const phoneAlert = document.getElementById('phone-alert');
const passwordAlert = document.getElementById('password-alert');
const submitBtn = document.querySelector('input[type="button"]');

submitBtn.addEventListener('click', () => {
    if (username.value !== '' && phone.value !== '' && password.value !== '') {
        form.submit();
    } else if (username.value === '' || phone.value !== '' || password.value === '') {
        if (username.value === '') {
            usernameAlert.textContent = 'សូមបំពេញឈ្មោះអ្នកប្រើប្រាស់';
            usernameAlert.style.display = 'block';
        }

        if (phone.value === '') {
            phoneAlert.textContent = 'សូមបំពេញលេខទូរស័ព្ទ';
            phoneAlert.style.display = 'block';
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

phone.addEventListener('input', () => {
    if (phoneAlert.style.display === 'block') {
        phoneAlert.style.display = 'none';
    }
});

password.addEventListener('input', () => {
    if (passwordAlert.style.display === 'block') {
        passwordAlert.style.display = 'none';
    }
});
