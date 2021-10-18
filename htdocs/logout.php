<?php
setcookie('loggedIn', 'false', 0, '/');
setcookie('authKey', $authKey, 0, '/');
setcookie('username', $data['username'], 0, '/');
setcookie('user_id', $data['user_id'], 0, '/');

echo "<script>location.href='http://kecovid19.epizy.com'</script>";
