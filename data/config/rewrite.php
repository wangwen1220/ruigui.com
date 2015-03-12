<?php
return array(
    /* URL规则 */
    'REWRITE_RULE' =>array(
        // 'list-<class_id>.html' => 'article/Category/index',
        '<urlname>' => 'article/Category/index',
        // 'page-<class_id>.html' => 'page/Category/index',
        '<urlname>.html' => 'page/Category/index',
        // 'article/<content_id>.html' => 'article/Content/index',
        'product/<urltitle>.html' => 'article/Content/index',
        'form-<name>/<id>.html' => 'duxcms/Form/info',
        'form-<name>.html' => 'duxcms/Form/index',
        // 'tags-list/<name>.html' => 'duxcms/Tags/index',
        '<name>.html' => 'duxcms/Tags/index',
        'tags/<name>.html' => 'duxcms/TagsContent/index',
    ),
);