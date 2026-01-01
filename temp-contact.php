<?php
/** Template Name: Contact */

get_header();
?>


<div class="custom-contact-form">
    <form method="post" class="contact-form" action="<?php echo esc_url( home_url( '/submit-contact' ) ); ?>">
        <label>
            <span class="screen-reader-text">Name:</span>
            <input type="text" class="contact-field" placeholder="Your Name" name="name" required>
        </label>
        <label>
            <span class="screen-reader-text">Email:</span>
            <input type="email" class="contact-field" placeholder="Your Email" name="email" required>
        </label>
        <label>
            <span class="screen-reader-text">Message:</span>
            <textarea class="contact-field" placeholder="Your Message" name="message" required></textarea>
        </label>
        <input type="submit" class="contact-submit" value="Send Message"></input>
    </form>

<?php
get_footer();  ?>