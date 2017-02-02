<?php
// 异常错误报错级别,
error_reporting(E_ERROR | E_PARSE );
return [
    
    // 异常
    'exception_handle' => 'app\manage\exception\Http',
    
    // 分页
    'paginate' => [
        'type' => 'cms\paginator\AmazeUi',
        'var_page' => 'page'
    ]
];
