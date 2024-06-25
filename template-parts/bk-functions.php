<?php 

// SSEG Form 
function enquiry_form() {
    
 
    if(!wp_verify_nonce($_POST['nonce'],'ajax_nonce'))
    {
        wp_send_json_error('Nonce is incorrect', 401);
        die();
    }

    $formdata = [];
    wp_parse_str($_POST ['enquiry'],$formdata);
    
    //Admin Email
    $admin_email = get_option('admin_email');

    //Email Headers
    $headers[] = 'Content-Type: text/html; charset=UTF-8';
    // $headers[] = 'From: GCE <' . $admin_email . '>';
    $headers[] = 'Reply-to:' .$formdata['email'];

    //Send the email to?
    $send_to = $admin_email . ', ssegapps@greencapeengineering.com';


    //Subject
    $subject = $formdata['First_Name'] . ' ' . $formdata['Last_Name'] . ' ' . "SSEG Application Form";

    

    // Message with HTML and inline CSS
    $message = '<html><body style="margin: 0; padding: 0; background-color: #f2f2f2;">';
    $message .= '<table width="100%" border="0" cellspacing="0" cellpadding="10">';
    $message .= '<tr><td>';
    $message .= '<h2 style="color: #0073e6;">SSEG Application Form Submission</h2>';

    // Attach a file
    if ($_FILES['attachment']['error'] === UPLOAD_ERR_OK) {
        $attachmentPath = $_FILES['attachment']['tmp_name'];
        $attachmentName = $_FILES['attachment']['name'];
        $phpmailer->addAttachment($attachmentPath, $attachmentName);
    }
    // Form fields and style 
    foreach ($formdata as $index => $field) {
        
        $message .= '<p style="margin-bottom: 10px;"><strong>' . $index . ':</strong> ' . $field . '</p>';
    }

    // Close the table and HTML body
    $message .= '</td></tr></table></body></html>';


    try {
        if (wp_mail($send_to, $subject, $message, $headers, $attachments)) {
            wp_send_json_success('Form sent successfully.');


        } else {
            wp_send_json_error('Form could not be sent.');
        }
    } catch (Exception $e) {
        wp_send_json_error($e->getMessage());
    }
}
add_action("wp_ajax_enquiry", "enquiry_form");
add_action("wp_ajax_nopriv_enquiry", "enquiry_form");
?>



