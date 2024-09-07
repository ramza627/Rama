<?php include_once 'koneksi/koneksi.php'; ?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>contact form</title>
</head>

<body>

<link href="style.css" rel="stylesheet">

<div class="fcf-body">
    <div id="fcf-form">
        <h3 class="fcf-h3">Contact Us</h3>
    
        <form id="fcf-form-id" class="fcf-form-class" method="post" action="contact-form-process.php">
            
            <div class="fcf-form-group">
                <label for="Name" class="fcf-label">Your name</label>
                <div class="fcf-input-group">
                    <input type="text" id="Name" name="Name" class="fcf-form-control" required>
                </div>
            </div>
    
            <div class="fcf-form-group">
                <label for="Email" class="fcf-label">Your email address</label>
            <div class="fcf-input-group">
                <input type="email" id="Email" name="Email" class="fcf-form-control" required>
            </div>
        </div>

        <div class="fcf-form-group">
            <label for="Message" class="fcf-label">Your message</label>
            <div class="fcf-input-group">
                <textarea id="Message" name="Message" class="fcf-form-control" rows="6" maxlength="3000" required></textarea>
            </div>
        </div>

        <div class="fcf-form-group">
            <button type="submit" id="fcf-button" class="fcf-btn fcf-btn-primary fcf-btn-lg fcf-btn-block">Send Message</button>
        </div>

        <div class="fcf-credit" id="fcf-credit">
        </div>

    </form>
    <?php if(isset($_GET['notif'])): ?>
        <?php if($_GET['notif'] == 'kirimberhasil'): ?>
            <div class="alert alert-success">Pesan berhasil dikirim</div>
        <?php elseif($_GET['notif'] == 'kirimgagal'): ?>
            <div class="alert alert-danger">Pesan gagal dikirim</div>
        <?php endif ?>
    <?php endif ?>
    </div>
</div>

</body>
</html>