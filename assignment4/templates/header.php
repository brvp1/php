<?php
/*
Author: Bhairavi Patel
Date: 06/23/2023
*/
ob_start();
?>
<!doctype html>
<html>

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="HandheldFriendly" content="True">
    <title>
        <?php // Print the page title
        if (defined('TITLE')) {
            print TITLE;
        } else {
            print 'MDC Issue Tracking System';
        }
        ?>
    </title>
    <link rel="stylesheet" type="text/css" media="screen" href="css/concise.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/masthead.css" />

  </head>

  <body>

    <header container class="siteHeader">
      <div row>
        <nav column="8" class="nav">
          <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="report.php">Report</a></li>
            <li><a href="register.php">Register</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="login.php">Login</a></li>
          </ul>
        </nav>
      </div>
    </header>

    <h1 class="text--center">
        <?php 
            if (defined('HEADLINE')) {
                print HEADLINE;
            } else {
                print 'MDC Issue Tracking System';
            }
        ?>
    </h1>

    <main container class="siteContent">
      <!-- BEGIN CHANGEABLE CONTENT. -->