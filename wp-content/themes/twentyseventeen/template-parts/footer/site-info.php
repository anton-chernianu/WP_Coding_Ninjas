<?php
/**
 * Displays footer site info
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<div class="site-info">

	<div class="contact-block__left">
		<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'twentyseventeen' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'twentyseventeen' ), 'WordPress' ); ?></a>
	</div>

	<div class="contact-block__right">
		<div class="contact-block__right_phone">
			<p>Call Us: <a href="tel:0987654321">0987654321</a></p>
		</div>
		<div class="contact-block__right_email">
			<p>Email: <a href="mailto:testdomain@mail.to">testdomain@mail.to</a></p>
		</div>
		<div class="contact-block__right_buttons">
			<a class="btn btn--phone" href="tel:0987654321">Call Us</a>
			<a class="btn btn--email" href="mailto:testdomain@mail.to">Email Us</a>
			<button id="open-popun" class="btn btn--contact-us">Contact Us</button>
		</div>
<div id="popUp" class="popup">

  <div class="popup-content">
    <span class="close"></span>
    <p class="popup-content__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas mollitia earum recusandae sed, vel veritatis error repudiandae ullam voluptas nesciunt voluptatem suscipit, magnam. Illum quas expedita reiciendis ipsum quisquam. Ducimus.</p>
    <p>Name:</p>
    <input class="contact-name" type="text">
    <p>Message:</p>
    <textarea name="message" class="contact-message" cols="30" rows="10"></textarea>
    <a class="btn btn--send-message">Send Message</a>
  </div>

</div>
	</div>
	
	<script>
		var popUp = document.getElementById('popUp');
		var btn = document.getElementById("open-popun");
		var span = document.getElementsByClassName("close")[0];

		btn.onclick = function() {
		    popUp.style.display = "block";
		}
		span.onclick = function() {
		    popUp.style.display = "none";
		}
		window.onclick = function(event) {
		    if (event.target == popUp) {
		        popUp.style.display = "none";
		    }
		}
	</script>

</div><!-- .site-info -->
