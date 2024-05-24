<?php
include __DIR__ . '/library/redbean.php';
R::setup('sqlite:' . __DIR__ . '/database.sqlite');
?>

<meta name='viewport' content="width=device-width, initial-scale=1" />
<script src='/library/htmx.js'></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">

<style>
  * {
    font-family: "Plus Jakarta Sans", sans-serif;
    font-optical-sizing: auto;
    font-style: normal;
  }
</style>
