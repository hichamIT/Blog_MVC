<?php

//Load Config

require_once 'config/config.php';

// Load Helpers
require_once 'helpers/url_helper.php';
require_once 'helpers/session_helper.php';

//autoload core libraries

spl_autoload_register(function($calssname){

    require_once 'libraries/'.$calssname.'.php';

});