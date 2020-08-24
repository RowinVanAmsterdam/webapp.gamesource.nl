<?php
    if (isset($_POST['contact_submitted'])) {
        $contact_name = '';
        $contact_email = '';
        $contact_subject = '';
        $contact_content = '';
        if (trim($_POST['contact_name']) === '') {
            $nameError = 'Vul hieronder uw naam in.';
            $hasNameError = true;
        } else {
            $hasNameError = false;
            $contact_name = trim($_POST['contact_name']);
        }
        $contact_mailFrom = "info@gamesource.nl";
        if (trim($_POST['contact_email']) === '') {
            $emailError = 'Vul hieronder uw email adres in.';
            $hasEmailError = true;
        } else {
            $hasEmailError = false;
            $contact_mailSend = $_POST['contact_email'];
        }
        if (trim($_POST['contact_subject']) === '') {
            $subjectError = 'Vul hieronder het onderwerp in.';
            $hasSubjectError = true;
        } else {
            $hasSubjectError = false;
            $contact_subject = $_POST['contact_subject'];
        }
        if (trim($_POST['contact_content']) === '') {
            $contentError = 'Het is waarschijnlijk niet de bedoeling dat u een lege email stuurt.';
            $hasContentError = true;
        } else {
            $hasContentError = false;
            $contact_content = $_POST['contact_content'];
        }

        $mailTo = "info@gamesource.nl";
        $headers = "From: " . $contact_mailSend;
        $txt = "Bezoeker: \n" . $contact_name . "\n\nBezoeker E-mail: \n" . $contact_mailSend . "\n\nBericht: \n" . $contact_content;

        if ($hasNameError === false && $hasEmailError === false && $hasSubjectError === false && $hasContentError === false) {
            mail($mailTo, $contact_subject, $txt, $headers);
            header("Location: .");
        }
    }
?>
<div class="contact-container">
    <form class="contact-container__form" action="" method="POST">
        <?php if ($hasNameError === false && $hasEmailError === false && $hasSubjectError === false && $hasContentError === false) {
            echo '<span class="confirm">Bedankt voor uw bericht! Wij zullen zo snel mogelijk contact met u opnemen.</span>';
            } ?>
        <label for="contact_name">Naam</label>
        <span class="error"><?php echo $nameError ?></span>
        <input type="text" id="contact_name" name="contact_name" placeholder="Naam..." value="<?php echo $contact_name ?>">
        <label for="contact_email">Email</label>
        <span class="error"><?php echo $emailError ?></span>
        <input type="email" id="contact_email" name="contact_email" placeholder="Email..." value="<?php echo $contact_mailSend ?>">
        <label for="contact_subject">Onderwerp</label>
        <span class="error"><?php echo $subjectError ?></span>
        <input type="text" id="contact_subject" name="contact_subject" placeholder="Onderwerp..." value="<?php echo $contact_subject ?>">
        <label for="contact_content">Uw bericht</label>
        <span class="error"><?php echo $contentError ?></span>
        <textarea id="contact_content" placeholder="Uw bericht..." name="contact_content" value="<?php echo $contact_content ?>"><?php echo $contact_content ?></textarea>
        <input type="submit" name="contact_submit" value="Verzenden">
        <input type="hidden" name="contact_submitted" id="submitted" value="true" />
    </form>
</div>