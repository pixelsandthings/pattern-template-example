<?php

//------------------------------------------------------------------------------
// Compile Functions - Import all .php files within /functions
//------------------------------------------------------------------------------

foreach(glob(get_template_directory() . "/functions/*.php") as $file){
    require $file;
}

?>
