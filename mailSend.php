<?php
if (isset($_POST['email']) && isset($_POST['name']) && isset($_POST['subject']) && isset($_POST['message']) && !empty($_POST['email']) && !empty($_POST['name']) && !empty($_POST['subject']) && !empty($_POST['message'])) {
// contact information
    $contact_name = $_POST['name'];
    $contact_email = $_POST['email'];

    $messages= $_POST['message'];
    $subject = $_POST['subject'];
    $recipient_email = 'info@shaviationmw.com';



    // $to = 'maryjane@email.com';
    // $subject = 'Marriage Proposal';
    // $from = 'peterparker@email.com';

    // To send HTML mail, the Content-type header must be set
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    // Create email headers
    $headers .= 'From: '.$contact_email."\r\n".
        'Reply-To: '.$contact_email."\r\n" .
        'X-Mailer: PHP/' . phpversion();

    // Compose a simple HTML email message
    $message = '<html><body>';

    $message .= '<p style="color:black;font-size:18px;">'.$contact_name.', '.$contact_email.' contacted you through your website</p>
    <p style="text-align: justify;">'.$messages.'</p>
    ';
    $message .= '</body></html>';



    if (mail($recipient_email, $subject, $message, $headers)) {
        echo json_encode(array("code" => 1, "msg" => "Email sent"));
    } else {
        echo json_encode(array("code" => 2, "msg" => "Email failed sending"));
    }
} else {
    echo json_encode(array("code" => 2, "msg" => "Some fields are empty"));

}
?>