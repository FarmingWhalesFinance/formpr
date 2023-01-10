<?php include 'sendmail.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Contact Form</title>
    </head>
<body>
<form method="post" class="form-group">
                    <input type="text" size="50" class="form-control" placeholder="Your Name" name="name" required>
                    <input type="email" class="form-control" placeholder="Enter Email" name="email" required>
                    <textarea name="message" id="comment" rows="6" class="form-control"
                        placeholder="Write Something"></textarea>
                    <input type="submit" value="Send Message" name="submit" class="form-control">
                </form>
</body>
</html>