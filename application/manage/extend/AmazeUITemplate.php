<?php
namespace app\manage\extend;

use Tamtamchik\SimpleFlash\BaseTemplate;
use Tamtamchik\SimpleFlash\TemplateInterface;

/**
 * Class Bootstrap4Template.
 * Uses default Bootstrap 4 markdown for flash messages.
 */
class AmazeUITemplate extends BaseTemplate implements TemplateInterface
{
    protected $prefix  = '';
    protected $postfix = '<br />';
    protected $wrapper = '<div class="am-alert am-alert-%s" data-am-alert>%s</div>';
    /**
     * Override base function to suite Bootstrap 3 alert naming.
     *
     * @param $messages - message text
     * @param $type     - message type: success, info, warning, error
     *
     * @return string
     */
    public function wrapMessages($messages, $type)
    {
        $type = ($type == 'error') ? 'danger' : $type;

        return sprintf($this->getWrapper(), $type, $messages);
    }
}
