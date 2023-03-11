@props(['active' => false])

<?php
  $classes = "block px-4 py-2 text-sm hover:bg-gray-100 hover:text-gray-900";

  $active
      ? $classes .= " bg-gray-100 text-gray-900 pointer-events-none"
      : $classes .= " text-gray-700";
?>

<a
    {{ $attributes([
        "class" => $classes,
        "role" => "menuitem",
        "tabindex" => "-1"
    ]) }}

>{{ $slot }}</a>
