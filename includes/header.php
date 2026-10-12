<?php
if (!isset($pageTitle)) { $pageTitle = "Muneeb Ahmad | Chef Portfolio"; }
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Professional portfolio of Muneeb Ahmad, Commis 1 Chef based in Dubai, UAE.">
  <meta name="theme-color" content="#171a18">
  <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:ital,wght@0,400;0,500;0,600;1,400;1,500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
  <script>
    if ('scrollRestoration' in history) { history.scrollRestoration = 'manual'; }
    window.scrollTo(0, 0);
  </script>
  <script defer src="assets/js/script.js"></script>
</head>
<body>
<header class="site-header">
  <div class="container nav-wrap">
    <a class="brand" href="#home" aria-label="Muneeb Ahmad home"><span class="brand-mark">M.</span><span>Muneeb Ahmad<small>CHEF PORTFOLIO</small></span></a>
    <button class="menu-toggle" type="button" aria-label="Open navigation" aria-expanded="false"><span></span><span></span></button>
    <nav class="main-nav" aria-label="Main navigation">
      <a href="#home">Home</a><a href="#about">About</a><a href="#experience">Experience</a><a href="#skills">Skills</a><a href="#certificates">Certificates</a><a href="https://wa.me/971501550496" target="_blank" rel="noopener noreferrer" class="nav-contact">Contact ↗</a>
    </nav>
  </div>
</header>
