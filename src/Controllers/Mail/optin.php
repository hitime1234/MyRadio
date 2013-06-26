<?php
/**
 * Opt in to a mailing list
 * 
 * @author Lloyd Wallis <lpw@ury.org.uk>
 * @version 20130526
 * @package MyURY_Mail
 */

if (!isset($_REQUEST['list'])) throw new MyURYException('List ID was not provided!', 400);

if (isset($_REQUEST['memberid'])) {
  CoreUtils::requirePermission(AUTH_EDITANYPROFILE);
  $user = $_REQUEST['memberid'];
} else {
  $user = -1;
}

$list = MyURY_List::getInstance($_REQUEST['list']);
if ($list->optin(User::getInstance($user))) {
  CoreUtils::backWithMessage('You are now subscribed to '.$list->getName().'.');
} else {
  CoreUtils::backWithMessage('You could not be subscribed at this time. You may already have opted-in or it may not be an open mailing list.');
}