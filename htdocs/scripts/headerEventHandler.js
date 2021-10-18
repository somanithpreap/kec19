window.onload = () => {
    const headerLogo = document.querySelector('#logo>img');
    headerLogo.onclick = () => {
        location.href = 'http://kecovid19.epizy.com/index.php';
    };

    const profile = document.getElementById('username');
    profile.onclick = () => {
        location.href = 'http://kecovid19.epizy.com/profile.php';
    };
};