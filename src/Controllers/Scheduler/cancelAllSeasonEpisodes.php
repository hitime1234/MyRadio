<?php
/**
 * Presents a form to the user to enable them to cancel all episodes of a season.
 */
use \MyRadio\MyRadioException;
use \MyRadio\MyRadio\URLUtils;
use \MyRadio\ServiceAPI\MyRadio_Timeslot;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //Submitted
    //Get data
    $data = MyRadio_Timeslot::getCancelForm()->readValues();
    //Cancel
    $season = MyRadio_Timeslot::getInstance($data['show_season_id']);
    $result = $season->cancelAllSeasonTimeslots($data['reason']);

    if (!$result) {
        $message = 'Your cancellation request could not be processed at this time. '
            .'Please contact programming@ury.org.uk instead.';
    } else {
        $message = 'Your cancellation request has been sent. You will receive an email informing you of updates.';
    }

    URLUtils::backWithMessage($message);
} else {
    //Not Submitted

    if (!isset($_REQUEST['show_season_id'])) {
        throw new MyRadioException('No seasonID provided.', 400);
    }

    MyRadio_Timeslot::getCancelForm()->render();
}
