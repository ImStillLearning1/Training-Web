<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
define( 'WP_USE_THEMES', false );
get_header();
?>
<?php
  if ( have_posts() ) :
    while ( have_posts() ) :the_post();
        if(empty($aboutUsText) && empty($aboutUsTextButton) && empty($training))
        {
            $aboutUsText = get_post_meta(get_the_ID(),'about_us-text', true);
            $aboutUsTextButton = get_post_meta(get_the_ID(),'about_us-button-text', true);
            $training = get_post_meta(get_the_ID(),'szkolenia', true);
        }
    endwhile;
    else :
      echo "<p>Na tej stronie nie ma żadnych wpisów.</p>";
  endif;
?>
    </div>
		<section id="about_us" class="about_us">
			<div class="container container-about-us">
				<div class="row row-about-us">
					<div class="col-md-10 offset-md-1 col-about-us">
						<h2 class="header-about-us">
							<span class="about-us-color">Train </span>
							Up 
							<span class="about-us-color">Academy</span>
						</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-8 offset-md-1 field-about-us">
						<div class="row">
							<div class="col-md-8 about-us-text"><?php echo $aboutUsText;  ?>
                            </div>
						</div>
                        <div class="row">
                            <div class="col-md-4 offset-md-1 button-about-us">
                                <?php echo $aboutUsTextButton;  ?>
                            </div>
                        </div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 offset-md-7 black-field-about-us">
					</div>
				</div>
			</div>
		</section>
		
		<section id="timetable" class="timetable timetable-background">
			<div class="container container-timetable">
				<div class="row row-timetable-field">
                    <div class="col-md-10 offset-md-1 timetable-border">
                        <div class="row row-timetable">
                            <div class="col-md-12 date-of-training">
                                <div class="row row-date-of-training">
                                    <div class="col-md-2 square"><p class="text"><span class="text-date">21-22</span> lipca</p></div>
                                    <div class="col-md-8 timetable-text">
                                        <p class="text-timetable2"><?php echo $training; ?></p>
                                        <p class="text-timetable5"><i class="far fa-clock"></i> Ilość godzin szkoleniowych: <b>5 godzin</b></p>
                                        <p class="text-timetable3"><i class="fas fa-map-marker-alt"></i>miejsce: <b>Puławy, ul. Piłsudskiego 99</b></p>
                                        <p class="text-timetable4" style="clear:both;">Cena szkolenia:<span class="price"> 650zł</span></p>
                                    </div>
                                    <div class="col-md-2 sign-up"><p class="text-sign-up">Zapisz się</p></div>
                                </div>
                                <div class="sign-up-more">Poznaj szczegóły</div>
                            </div>
                        </div>

                        <div class="row row-timetable">
                            <div class="col-md-12 date-of-training">
                             <div class="row row-date-of-training">
                                <div class="col-md-2 square"><p class="text"><span class="text-date">21-22</span> lipca</p></div>
                                <div class="col-md-8 timetable-text">
                                    <p class="text-timetable2">Szkolenie z MS Excel</p>
                                    <p class="text-timetable5"><i class="far fa-clock"></i> Ilość godzin szkoleniowych: <b>5 godzin</b></p>
                                    <p class="text-timetable3"><i class="fas fa-map-marker-alt"></i>miejsce: <b>Puławy, ul. Piłsudskiego 99</b></p>
                                    <p class="text-timetable4" style="clear:both;">Cena szkolenia:<span class="price"> 650zł</span></p>
                                </div>
                                <div class="col-md-2 sign-up"><p class="text-sign-up">Zapisz się</p></div>
                                </div>
                                <div class="sign-up-more">Poznaj szczegóły</div>
                            </div>
                        </div>
                    </div>
                </div>
                <h1 class="training">SZKOLENIA</h1>
                <h3 class="nearest-training">Najbliższe Szkolenia</h3>
			</div>	
		</section>
		<section id="referance" class="comments">
			<div class="container container-comments">
				<div class="row row-comments">
                    <div class="col-md-10 offset-md-1 comments-field">
                        <div class="row">
                            <div class="col-md-10 offset-md-1 reviews">
                            
                            </div>
                        </div>
                        <h2 class="header-about-us">Opinie Klientów</h2>
                        <div class="row button-comments">
                            <div class="button"><p class="button-text">Zobacz nasze referencje</p></div>
                        </div>
                        <div class="icon-left">
                            <i class="fas fa-chevron-circle-left"></i>
                        </div>
                        <div class="icon-right">
                            <i class="fas fa-chevron-circle-right"></i>
                        </div>
                    </div>
				</div>
			</div>
		</section>
		
		<section id="contact" class="newsletter">
			<div class="container container-newsletter">
				<div class="row row-newsletter">
                    <div class="col-md-5 offset-md-1 newsletter-field">
                        <p class="text">Zapisz się do newslettera i bądź na bieżąco</p>
                    </div>
                    <div class="col-md-3 input-form">
                        <input type="text" placeholder="Twój adres e-mail"/>
                    </div>
                    <div class="col-md-2 sign-up2">
                        <span>Zapisz się</span>
                    </div>
                </div>
			</div>
		</section>
<?php
get_footer();
