<?php

function active_class($path, $active = 'active') {
  return call_user_func_array('Request::is', (array)$path) ? $active : '';
}

function is_active_route($path) {
  return call_user_func_array('Request::is', (array)$path) ? 'true' : 'false';
}

function show_class($path) {
  return call_user_func_array('Request::is', (array)$path) ? 'show' : '';
}

function active_class_menu($path, $active = 'dropdown-toggle show') {
    return call_user_func_array('Request::is', (array)$path) ? $active : '';
}
