<?php
function landertheme_get_title(){
   // default page title
   $defaulttitle = drupal_get_title();
    // if no default page title --> get drupal site name
    if(!$defaulttitle) $defaulttitle = variable_get('site_name');
    // return title (string) to use in our tepmlate file
    return $defaulttitle;
}