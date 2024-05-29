<?php
class SubscribeMail
{
    public $email;
    public $subject;
    public $message;
    public $message_two;
    public $subscribed_month;
    public $subscribed_day;

    public $companyName;
    public $companyYear;
    public $companyEmail;
    public $adminName;
    public $adminPosition;
    public function __construct($email, $subject, $message, $message_two, $subscribed_month, $subscribed_day, $companyName, $companyYear, $companyEmail, $adminName, $adminPosition)
    {
        $this->email = $email;
        $this->subject = $subject;
        $this->message = $message;
        $this->message_two = $message_two;
        $this->subscribed_month = $subscribed_month;
        $this->subscribed_day = $subscribed_day;
        $this->companyName = $companyName;
        $this->companyYear = $companyYear;
        $this->companyEmail = $companyEmail;
        $this->adminName = $adminName;
        $this->adminPosition = $adminPosition;
    }

    public function sendSubscriberMail()
    {
        $file = fopen("mails/subscribe.html", "r") or die("Unable to open File");
        $template = fread($file, filesize("mails/subscribe.html"));
        fclose($file);


        $template = str_replace("{{name}}", "User", $template);
        $template = str_replace("{{message}}", "$this->message", $template);
        $template = str_replace("{{message_two}}", "$this->message_two", $template);
        $template = str_replace("{{subject}}", "$this->subject", $template);
        $template = str_replace("{{subscribe_month}}", "$this->subscribed_month", $template);
        $template = str_replace("{{subscribe_day}}", "$this->subscribed_day", $template);
        $template = str_replace("{{company_name}}", "$this->companyName", $template);
        $template = str_replace("{{company_email}}", "$this->companyEmail", $template);
        $template = str_replace("{{company_year}}", "$this->companyYear", $template);
        $template = str_replace("{{admin_name}}", "$this->adminName", $template);
        $template = str_replace("{{admin_position}}", "$this->adminPosition", $template);

        // echo json_encode((array) $this);


        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-Type: text/html; charset=utf-8" . "\r\n";
        $headers .= "From: $this->companyEmail" . "\r\n";
        $headers .= "Cc: $this->email" . "\r\n";

        $success = mail($this->email, $this->subject, $template, $headers);
        return $success;
    }
}

class AdminMail
{
    public $username;
    public $email;
    public $subject;
    public $message;

    public $company_email;

    public function __construct($username, $email, $subject, $message, $company_email)
    {
        $this->username = $username;
        $this->email = $email;
        $this->subject = $subject;
        $this->message = $message;
        $this->company_email = $company_email;
    }

    public function sendAdminMail()
    {
        $file = fopen("mails/message.html", "r") or die("Unable to access file: " . $file);
        $template = fread($file, filesize("mails/message.html"));
        fclose($file);

        $template = str_replace("{{admin_name}}", $this->username, $template);
        $template = str_replace("{{admin_email}}", $this->email, $template);
        $template = str_replace("{{subject}}", $this->subject, $template);
        $template = str_replace("{{message}}", $this->message, $template);

        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-Type: text/html; charset=utf-8" . "\r\n";
        $headers .= "From: $this->company_email" . "\r\n";
        $headers .= "Cc: $this->email" . "\r\n";

        $success = mail($this->email, $this->subject, $this->message, $headers);
        return $success;
    }
}
