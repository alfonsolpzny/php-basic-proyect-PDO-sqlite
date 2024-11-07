<?php

require_once __DIR__ . '/router.php';

//%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
//%%%%%%%%%%%%%%%%%%%%%%%% Rutas GET %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
//%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
// Static GET
// In the URL -> http://localhost
//Page to sign in
get('/', 'views/index.php');
get('/index', 'views/index.php');

//Page to authenticate
post('/authenticate', 'views/autheticate.php');

//Page to register as new user
get('/signup', 'views/signup.php');
post('/signup', 'views/signup.php');

//Page to go home principal page
get('/home', 'views/home.php');

//page to close session
get('/logout', 'views/logout.php');

//page to see profile
get('/profile', 'views/profile.php');

//page to changue password
get('/password', 'views/password.php');
post('/password', 'views/password.php');

//page to changue password
get('/admin/dashboard', 'views/admin/dashboard.php');



//Page template (for test)
get('/template', 'views/template.php');

get('/usertest', 'views/usertest.php');

get('/sqli', 'views/sqli.php');






//%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
//%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% route 404 %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
//%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
// For GET or POST
// The 404.php which is inside the views folder will be called
// The 404.php has access to $_GET and $_POST
any('/404', 'views/404.php');

//##########################################################
