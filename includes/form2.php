<?php
    $name = $_POST['fullname'];
    $name .= $_POST['phone'];
    $email = $_POST['mail'];
    $message = $_POST['info'];
    $from = 'From: My Contact Form';
    $to = 'zewebd@gmail.com';
    $subject = 'User Form Data';

    $body = "From: $name\n E-Mail: $email\n Message:\n $message";

    if(isset($_POST['submit'])) {
        if (mail ($to, $subject, $body, $from)) {
        echo "<script type='text/javascript'>alert('message sent successfully');</script>";
        } else {
        echo "<script type='text/javascript'>alert('message failed to send');</script>";
        }
    }
?>

<form action="contact.php" class="form">
    <div class="mb-2">
        <h2 class="form-title text-center">
            Contact Us
        </h2>
    </div>
    <div class="grid-12 gap-4s">
        <div class="col-6 form-group">
            <input type="text" class="form-input" id="fname" name="fullname" placeholder="Full Name" onblur="namevalidation(fullname)" required>
            <label for="fname" class="form-label" id="label1">Full Name</label>
        </div>
        <div class="col-6 form-group">
            <input type="text" class="form-input" id="number" name="phone" placeholder="Phone 0002224444" onblur="phonevalidation(phone)" required>
            <label for="number" class="form-label" id="label2">Phone Number</label>
        </div>
        <div class="col-6 col-12s form-group">
            <input type="email" class="form-input" id="email" name="mail" placeholder="Email Address" onblur="emailvalidation(mail)" required>
            <label for="email" class="form-label" id="label3">Email Address</label>
        </div>
        <div class="col-12 form-group">
            <textarea type="text" class="form-input" id="message" name="info" rows="15" placeholder="Please enter message here"
                required></textarea>
        </div>
        <div class="col-4 col-2s"></div>
        <div class="col-4 col-8s">
            <input type="submit" name="submit" id="submitbtn" class="btn-3 mt-2" value="Submit a Request">
        </div>
        <div class="col-4 col-2s"></div>
    </div>
</form>