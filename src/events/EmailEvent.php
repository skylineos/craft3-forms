<?php
namespace plugins\dolphiq\form\events;

use yii\base\Event;

class EmailEvent extends Event
{
    /**
     * Whether or not to send email
     * @var boolean
     */
    public $sendEmail = true;

    /**
     * @var string
     */
    public $subject;

    /**
     * @var string
     */
    public $replyTo = array();

    public $to;

    /**
     * form handle
     *
     * @var string
     */
    public $form;

    public $model;

}
