<?php
  header('Content-Type: text/html; charset=utf-8');
  include $_SERVER['DOCUMENT_ROOT'] . '/session_data_setup.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--[if lt IE 7]><html class="ie6" lang="en-GB" xmlns="http://www.w3.org/1999/xhtml"><![endif]-->
<!--[if IE 7]><html class="ie7" lang="en-GB" xmlns="http://www.w3.org/1999/xhtml"><![endif]-->
<!--[if IE 8]><html class="ie8" lang="en-GB" xmlns="http://www.w3.org/1999/xhtml"><![endif]-->
<!--[if IE 9]><html class="ie9" lang="en-GB" xmlns="http://www.w3.org/1999/xhtml"><![endif]-->
<!--[if IE 10]><html class="ie10" lang="en-GB" xmlns="http://www.w3.org/1999/xhtml"><![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en-GB" xmlns="http://www.w3.org/1999/xhtml">
<!--<![endif]-->
<head>
  <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=1200, user-scalable=yes" />
  <meta name="description" content="Accepting all major credit cards for your business is essential in today's economic environment. Pura Payments will provide your retail business with a merchant processing solution that fully satisfies the needs of you and your customers." />

  <?php include 'css-files.php'; ?>
  <?php include $_SERVER['DOCUMENT_ROOT'] . '/head_scripts.php'; ?>
  <title>Pura Payments - Experience Pure Payments</title>
</head>
<body x-ms-format-detection="none">

<?php
    include 'sections/header.php';
    include 'sections/body.php';
    include 'nice-alerts/new-alerts.php';
    include 'sections/footer.php';
?>
</body>
</html>
