<?php

namespace framework;

function dd($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
}

function template($path, $attributes = []) {
  extract($attributes);

  require BASE . ('templates/' . $path);
}

function redirect($path) {
  header("location: {$path}");
  exit();
}