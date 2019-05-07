<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>

	<footer class="footer">
			<div class="container container-footer">
				<div class="row footer1">
					<div class="cold-md-4">
                        <p class="text-footer">Jesteś zainteresowany ofertą? Skontaktuj się!</p>
                    </div>
                    <div class="col-md-2"> <p class="text-footer2">tel. 500 500 500</p></div>
                    <div class="col-md-2"> <p class="text-footer2">biuro@trainup.pl</p></div>
                    <div class="col-md-3"> <p class="text-footer button-footer">Formularz Kontaktowy</p></div>
                    <div class="col-md-1"></div>
				</div>  
			</div>
            <div class="container-fluid footer2">
                <div class="container footer3">
                    <div class="row footer3">
                        <div class="col-md-3 text-footer3">
                            <p>Copyright &copy 2016 <b>Train Up Academy</b></p>
                        </div>
                        <div class="col-md-3 offset-md-6 text-footer4">
                            <p class="expandy">Projekt i Realizacja</p>
                            <img class="expandy2" src="<?php echo get_template_directory_uri(); ?>/img/expandy.png"" />
                        </div>
                    </div>        
                </div>
            </div>  
		</footer>

<?php wp_footer(); ?>

</body>
</html>
