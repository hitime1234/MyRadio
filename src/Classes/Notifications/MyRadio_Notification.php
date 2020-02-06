<?php


namespace MyRadio\Notifications;


use MyRadio\MyRadioEmail;
use MyRadio\ServiceAPI\MyRadio_List;
use MyRadio\ServiceAPI\MyRadio_User;

abstract class MyRadio_Notification
{
    /**
     * @var MyRadio_User[] | MyRadio_List[]
     */
    private $receivers = [];

    /**
     * @param MyRadio_User[] | MyRadio_List[] $receivers
     * @return MyRadio_Notification
     */
    public function setReceivers($receivers) {
        $this->receivers = $receivers;
        return $this;
    }

    public function send() {
        foreach ($this->receivers as $rec) {
            // Email
            if ($this instanceof MyRadio_EmailNotification) {
                if($rec instanceof MyRadio_List) {
                    // TODO check preferences
                    MyRadioEmail::sendEmailToList($rec, $this->getEmailSubject($rec), $this->toEmailBody($rec));
                } else {
                    // TODO check preferences
                    MyRadioEmail::sendEmailToUser($rec, $this->getEmailSubject($rec), $this->toEmailBody($rec));
                }
            }
        }
    }
}