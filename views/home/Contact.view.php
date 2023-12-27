<?php require_once('../../views/partials/head.php');
require_once('../../views/css/contact.css.php');
?>
<div class="container">
    <div class="row mt-5">
        <div class="col-5">
            <h6>OPERATION TIME</h6>
            <p>09:00 AM - 07:00 PM</br> Monday - Saturday</p>
        </div>
        <div class="col-4">
            <h6>PHONE NUMBER</h6>
            <p>+84 333 988 406</p>
        </div>
        <div class="col-3">
            <h6>EMAIL ADDRESS</h6>
            <p>Marina@gmail.com</p>
        </div>
    </div>
    <div class="paragrap row mt-5">
        <h5>Our customer service team is waiting to assist you</h5>
        <p>Please allow up to 2-Business days response time in order for us to fully address your inquiries.</br>
            You can also check your order status through our website.</p>
    </div>
    <h4>CONTACT FORM</h4>
    <p>Please fill out all feilds</p>
    <div class="contact_form row">
        <div class="img_contact col-6 mt-5">
            <img src="../../asset/contact.png" alt="">
        </div>
        <div class="col-6 mt-5">
            <form class="contact-form" action="/submit_reservation" method="post">
                <h2>Generate feedback</h2>
                <label for="fullname">Full Name:</label><br>
                <input type="text" id="fullname" name="fullname" required><br>
                <label for="email">Email:</label><br>
                <input type="email" id="email" name="email" required><br>
                <label for="messenger">Messenger:</label><br>
                <input type="text" id="messenger" name="messenger" required><br>
                <input class="button-submit" type="submit" value="Send">
            </form>
        </div>
    </div>
    <h4>ADDRESS FOR CONTACT</h4>
    <p>Click on the map below for a closer look</p>
    <div class="location row">
        <div class="mt-5 col-6">
            <div class="our_location">
                <p><strong>Our Location</strong></p>
                <p>My Khe 3-Phuoc My-Son Tra-Da Nang</p>
            </div>
            <div class="information">
            <p><strong>Contact Info</strong></p>
                <p>Phone : +84 333 988 406 </p>
                <p>Email : hello@yourdomain.com</p>
                <p>Skype : support.spamagic</p>

            </div>
            <div class="Working">
                <p><strong>Working</strong></p>
                <p> HoursMon – Fri : 9:00 AM - 7:00 PM </p>
                <p>Saturday : 9:00 AM - 6:00 PM Sunday : Closed</p>
            </div>
        </div>
        <div class="col-6 mt-5">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1605.802669746338!2d108.24044665300075!3d16.061136720857956!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sen!2s!4v1703004294401!5m2!1sen!2s" width="500" height="400" style="border-radius:10px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

        </div>
    </div>
</div>

<?php require "../../views/partials/footer.php"; ?>