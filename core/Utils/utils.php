<?php

function old($name)
{
    if (isset($_POST[$name])) {
        return $_POST[$name];
    }
    return '';
}

function strContain($search, $target)
{
    if (strpos($target, $search) !== false) {
        return true;
    } else {
        return false;
    }
}

function strpos_all($haystack, $needle)
{
    $offset = 0;
    $allpos = array();
    while (($pos = strpos($haystack, $needle, $offset)) !== FALSE) {
        $offset   = $pos + 1;
        $allpos[] = $pos;
    }
    return $allpos;
}


function inString($target, $data)
{
    $target = strtolower($target);
    $result = false;
    foreach ($data as $d) {
        if (strContain(strtolower($d), $target)) {
            $result = true;
            break;
        }
    }
    return $result;
}

function escape_string($string)
{
    $str = str_replace("'", "\'", $string);
    $str = str_replace('"', '\"', $str);
    return $str;
}

function slugify($text, string $divider = '-')
{
  $text = preg_replace('~[^\pL\d]+~u', $divider, $text);
  $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
  $text = preg_replace('~[^-\w]+~', '', $text);
  $text = trim($text, $divider);
  $text = preg_replace('~-+~', $divider, $text);
  $text = strtolower($text);
  if (empty($text)) {
    return 'n-a';
  }
  return $text;
}