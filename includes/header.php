<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="public/stylesheets/bootstrap.min.css">
    <link rel="stylesheet" href="public/stylesheets/font-awesome.min.css">
    <link rel="stylesheet" href="public/stylesheets/rpg-awesome.min.css">
    <link rel="stylesheet" href="public/stylesheets/dhs.css">

    <title>Dragon Horde Studios</title>
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/"><i class="ra ra-dragon"></i> Dragon Horde Studios</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item<?php if (isset($active) && $active === "home") { echo ' active'; } ?>">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
          </ul>
        </div>
      </nav>
    </header>
