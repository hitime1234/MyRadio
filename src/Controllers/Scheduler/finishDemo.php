<?php

use \MyRadio\MyRadio\URLUtils;
use \MyRadio\ServiceAPI\MyRadio_Demo;

MyRadio_Demo::getInstance($_REQUEST['demoid'])->markTrained();
URLUtils::redirect($module, 'listDemos', ['msg' => 4]); // 4 means finished and trained... see listDemos.php
