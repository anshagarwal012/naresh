<?php
$heading = "Contact Us";
require('header.php');
?>
<div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Contact Us</h2>
                <ul>
                    <li><a href="/">Home</a></li>
                    <li class="active"><a href="/contact.php">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="contact-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="section-title text-center">
                    <h2>Get In touch</h2>
                    <p>Office Address - H9/5, Malviya Nagar, Delhi - 110016<br>
                        Email - <a href="mailto:info@oliveventurepartners.in">info@oliveventurepartners.in</a><br>
                        Phone - <a href="tel://+919582993610">+91 958 299 3610</a>&nbsp;
                        <a href="tel://+919911480079">+91 991 148 0079</a>
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="contact-form m-t">
                    <form action="#">
                        <div class="row">
                            <div class="col-md-6">
                                <p>
                                    <input type="text" placeholder="Enter Your Name">
                                </p>
                            </div>
                            <div class="col-md-6">
                                <p>
                                    <input type="email" placeholder="Enter Your Email">
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <p>
                                    <input type="tel" placeholder="Enter Your Phone">
                                </p>
                            </div>
                            <div class="col-md-6">
                                <p>
                                    <input type="text" placeholder="Your Subject">
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <p>
                                    <textarea cols="30" rows="10" placeholder="Write Your Message"></textarea>
                                </p>
                            </div>
                        </div>
                        <div class="row text-center">
                            <div class="col-md-12">
                                <p>
                                    <input type="submit" value="Send Message">
                                </p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
require('footer.php');
