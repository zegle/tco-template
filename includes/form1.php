<?php
    $name = $_POST['fullname'];
    $name .= $_POST['carmodel'];
    $name .= $_POST['vyear'];
    $email = $_POST['mail'];
    $message = $_POST['info'];
    $from = 'From: My Custom Form';
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

<form action="custom.php" class="form">
    <div class="mb-2">
        <h2 class="form-title text-center">
            Specifications
        </h2>
    </div>
    <div class="grid-12 gap-0s">
        <div class="col-12 col-12s form-group">
            <input type="email" class="form-input" id="email" name="mail" placeholder="Email Address" onblur="emailvalidation(mail)" required>
            <label for="email" class="form-label" id="label4">Email Address</label>
        </div>
        <div class="col-5 col-12s form-group">
            <input type="text" class="form-input" id="fname" name="fullname" placeholder="Enter Vehicle Brand" onblur="namevalidation(fullname)" required>
            <label for="brand" class="form-label" id="label1">Enter Vehicle Brand</label>
        </div>
        <div class="col-5 col-12s form-group">
            <input type="text" class="form-input" id="model" name="carmodel" placeholder="Enter Vehicle Model" onblur="modelvalidation(carmodel)" required>
            <label for="model" class="form-label" id="label2">Enter Vehicle Model</label>
        </div>
        <div class="col-2 col-12s form-group">
            <input type="text" class="form-input" id="year" name="vyear" placeholder="Vehicle Year" onblur="yearvalidation(vyear)" required>
            <label for="year" class="form-label" id="label3">Vehicle Year</label>
        </div>
        <div class="col-12 form-group">
            <textarea type="text" class="form-input" id="message" name="info" rows="15" placeholder="Please specify any information about the dimensions, color, or any specific details you would like for your custom aero here..."
                required></textarea>
            
        </div>
        <div class="col-4 col-2s"></div>
        <div class="col-4 col-8s">
            <input type="submit" name="submit" id="submitbtn" class="btn-3 mt-2" value="Submit a Request">
        </div>
        <div class="col-4 col-2s"></div>
    </div>
</form>