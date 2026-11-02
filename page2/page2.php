<?php

if (isset($_REQUEST['activate_this_form']))

{
if ($_SERVER["REQUEST_METHOD"] == "POST") { foreach ($_POST as $key => $val){if(is_array($_POST[$key]))$_POST[$key] = implode(",",$_POST[$key]);}}
$C205726bc7d68418f9ce627dcd5ee021e= strip_tags($_POST['C205726bc7d68418f9ce627dcd5ee021e']);
$C6ec0d7a5adb2427f9fc5011caf3d2554= strip_tags($_REQUEST['C6ec0d7a5adb2427f9fc5011caf3d2554']);
$form_feedback_email='';
$ip=$_SERVER['REMOTE_ADDR'];
$headers="From:".$form_feedback_email."\r\nReply-To:$reply_email\r\nContent-type:text/html\r\n";

mail($form_feedback_email, 'Brewing guides | Ember Coffee Roasters', '<b>Check box label</b><p>'.$C205726bc7d68418f9ce627dcd5ee021e.'<p><b>Dropdown list label</b><p>'.$C6ec0d7a5adb2427f9fc5011caf3d2554.'<p>',$headers);

}
?>
