<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
?><!DOCTYPE HTML>
<html>
	<head>
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
		<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?> "/>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">




		
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<body>
		<div class="container-fluid">
            <header>
                <div class="row">
                    <div class="col-md-12 slider">
                        <div class="row top-info">
                            <div class="col-md-4"></div>
                            <div class="col-md-4"></div>
                            <div class="col-md-4"></div>
                        </div>
                        <div class="container top">
                            <nav class="navbar navbar-expand-lg">
                              <a class="navbar-brand" href="#"><img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" /></a>
                              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                              </button>
                              <div class="collapse navbar-collapse" id="navbarNav">
                                <?php wp_nav_menu(array(
                                        'menu' => 'top-navi',
                                        'menu_class' => "navbar-nav side-right",
                                        'container' => '',
                                        'walker' => new Walker_Quickstart_Menu()
                                    ));?>
                              </div>
                            </nav>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-10 offset-md-1 center">
                                    <h1 class="text-top-header"><?php echo get_post_meta(get_the_ID(),'slider_title', true); ?></h1>
                                    <p class="text-top"><?php echo get_post_meta(get_the_ID(),'slider_text', true); ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 offset-md-4">
                                    <div class="button-custom">Szkolenia</div>
                                </div> 
                            </div>
                        </div>	
                    </div>
                </div>
            </header>    
            