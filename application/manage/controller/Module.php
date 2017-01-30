<?php
namespace app\manage\controller;

class Module extends Base
{

    /**
     * !CodeTemplates.overridecomment.nonjd!
     *
     * @see \app\common\controller\Root::fetch()
     */
    protected function fetch($template = '', $vars = [], $replace = [], $config = [])
    {
        // 模板文件
        $template || $template = MODULE_VIEW_PATH . \think\Loader::parseName(_CONTROLLER_) . '/' . _ACTION_ . '.html';
        
        return parent::fetch($template, $vars, $replace, $config);
    }
}