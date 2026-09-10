

<?php if (isset($_GET['contact_sent'])) : ?>

    <div class="alert alert-success">
        Thank you. Your message has been received.
    </div>

<?php endif; ?>


<form
    method="post"
    id="contact-form"
    class="row"
    novalidate
>

    <?php wp_nonce_field('submit_contact_form', 'contact_nonce'); ?>

    <div class="col-md-6 col-sm-12">

        <div class="block">

            <div class="form-group">
                <label for="user_name">Your Name</label>

                <input
                    id="user_name"
                    name="user_name"
                    type="text"
                    class="form-control"
                    placeholder="Your Name"
                    maxlength="100"
                    required
                >
            </div>

            <div class="form-group">
                <label for="user_email">Email Address</label>

                <input
                    id="user_email"
                    name="user_email"
                    type="email"
                    class="form-control"
                    placeholder="Email Address"
                    maxlength="254"
                    required
                >
            </div>

            <div class="form-group">
                <label for="user_subject">Subject</label>

                <input
                    id="user_subject"
                    name="user_subject"
                    type="text"
                    class="form-control"
                    placeholder="Subject"
                    maxlength="200"
                    required
                >
            </div>

        </div>

    </div>

    <div class="col-md-6 col-sm-12">

        <div class="block">

            <div class="form-group-2">

                <label for="user_message">Your Message</label>

                <textarea
                    id="user_message"
                    name="user_message"
                    class="form-control"
                    rows="6"
                    placeholder="Your Message"
                    maxlength="5000"
                    required
                ></textarea>

            </div>

            <button
                class="btn btn-default"
                type="submit"
                name="contact_submit"
                value="1"
            >
                Send Message
            </button>

        </div>

    </div>

    <div
        class="contact-message contact-message--error"
        id="contact-error"
        role="alert"
        hidden
    ></div>

    <div
        class="contact-message contact-message--success"
        id="contact-success"
        role="status"
        hidden
    ></div>

</form>
    <div class="contact-box row">
      <div class="col-md-6 col-sm-12">
        <div class="block">
          <h2>Stop By For A visit</h2>
          <ul class="address-block">
            <li>
              <i class="ion-ios-location-outline"></i>North Main Street,Brooklyn Australia
            </li>
            <li>
              <i class="ion-ios-email-outline"></i>Email: contact@mail.com
            </li>
            <li>
              <i class="ion-ios-telephone-outline"></i>Phone:+88 01672 506 744
            </li>
          </ul>
          <ul class="social-icons">
            <li>
              <a href="http://www.themefisher.com"><i class="ion-social-googleplus-outline"></i></a>
            </li>
            <li>
              <a href="http://www.themefisher.com"><i class="ion-social-linkedin-outline"></i></a>
            </li>
            <li>
              <a href="http://www.themefisher.com"><i class="ion-social-pinterest-outline"></i></a>
            </li>
            <li>
              <a href="http://www.themefisher.com"><i class="ion-social-dribbble-outline"></i></a>
            </li>
            <li>
              <a href="http://www.themefisher.com"><i class="ion-social-twitter-outline"></i></a>
            </li>
            <li>
              <a href="http://www.themefisher.com"><i class="ion-social-facebook-outline"></i></a>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-6 mt-5 mt-md-0">
        <div class="block">
          <div class="google-map">
            <div class="map" id="map_canvas" data-latitude="51.5223477" data-longitude="-0.1622023"
              data-marker="images/marker.png"></div>
          </div>
        </div>
      </div>
    </div>




    <?php
/**
 * Contact form template.
 */
?>

