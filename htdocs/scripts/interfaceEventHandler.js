window.onload = () => {
    const about = document.getElementById('about');
    const statistics = document.getElementById('statistics');
    const trackTravelHistory = document.getElementById('track-travel-history');
    const healthTracking = document.getElementById('health-tracking');
    const help = document.getElementById('help');
    const headerLogo = document.querySelector('#logo>img');

    headerLogo.onclick = () => {
        location.href = 'http://kecovid19.epizy.com/index.php';
    };

    about.onclick = () => {
        about.style.transform = 'scale(1.5, 1.5)';
        setTimeout(() => {
            location.href = 'http://kecovid19.epizy.com/about_covid_19.php';
        }, 200);
    };

    statistics.onclick = () => {
        statistics.style.transform = 'scale(1.5, 1.5)';
        setTimeout(() => {
            location.href = 'http://kecovid19.epizy.com/statistics.php';
        }, 200);
    };

    trackTravelHistory.onclick = () => {
        trackTravelHistory.style.transform = 'scale(1.5, 1.5)';
        setTimeout(() => {
            location.href = 'http://kecovid19.epizy.com/track_travel_history.php';
        }, 200);
    };

    healthTracking.onclick = () => {
        healthTracking.style.transform = 'scale(1.5, 1.5)';
        setTimeout(() => {
            location.href = 'http://kecovid19.epizy.com/health_tracking.php';
        }, 200);
    };

    help.onclick = () => {
        help.style.transform = 'scale(1.5, 1.5)';
        setTimeout(() => {
            location.href = 'http://kecovid19.epizy.com/help.php';
        }, 200);
    };
};