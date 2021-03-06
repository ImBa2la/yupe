<?php
/**
 * Отображение для blogBackend/update:
 *
 * @category YupeView
 * @package  yupe
 * @author   Yupe Team <team@yupe.ru>
 * @license  https://github.com/yupe/yupe/blob/master/LICENSE BSD
 * @link     http://yupe.ru
 **/
$this->breadcrumbs = [
    Yii::t('BlogModule.blog', 'Blogs') => ['/blog/blogBackend/index'],
    $model->name                       => ['/blog/blogBackend/view', 'id' => $model->id],
    Yii::t('BlogModule.blog', 'Edit'),
];

$this->pageTitle = Yii::t('BlogModule.blog', 'Blogs - edit');

$this->menu = [
    [
        'label' => Yii::t('BlogModule.blog', 'Blogs'),
        'items' => [
            [
                'icon'  => 'fa fa-fw fa-list-alt',
                'label' => Yii::t('BlogModule.blog', 'Manage blogs'),
                'url'   => ['/blog/blogBackend/index']
            ],
            [
                'icon'  => 'fa fa-fw fa-plus-square',
                'label' => Yii::t('BlogModule.blog', 'Add a blog'),
                'url'   => ['/blog/blogBackend/create']
            ],
            ['label' => Yii::t('BlogModule.blog', 'Blog') . ' «' . mb_substr($model->name, 0, 32) . '»', 'utf-8'],
            [
                'icon'  => 'fa fa-fw fa-pencil',
                'label' => Yii::t('BlogModule.blog', 'Edit blog'),
                'url'   => [
                    '/blog/blogBackend/update',
                    'id' => $model->id
                ]
            ],
            [
                'icon'  => 'fa fa-fw fa-eye',
                'label' => Yii::t('BlogModule.blog', 'View blog'),
                'url'   => [
                    '/blog/blogBackend/view',
                    'id' => $model->id
                ]
            ],
            [
                'icon'        => 'fa fa-fw fa-trash-o',
                'label'       => Yii::t('BlogModule.blog', 'Remove blog'),
                'url'         => '#',
                'linkOptions' => [
                    'submit'  => ['/blog/blogBackend/delete', 'id' => $model->id],
                    'confirm' => Yii::t('BlogModule.blog', 'Do you really want to remove the blog?'),
                    'params'  => [Yii::app()->getRequest()->csrfTokenName => Yii::app()->getRequest()->csrfToken],
                ]
            ],
        ]
    ],
    [
        'label' => Yii::t('BlogModule.blog', 'Posts'),
        'items' => [
            [
                'icon'  => 'fa fa-fw fa-list-alt',
                'label' => Yii::t('BlogModule.blog', 'Manage posts'),
                'url'   => ['/blog/postBackend/index']
            ],
            [
                'icon'  => 'fa fa-fw fa-plus-square',
                'label' => Yii::t('BlogModule.blog', 'Add a post'),
                'url'   => ['/blog/postBackend/create/', 'blog' => $model->id]
            ],
        ]
    ],
    [
        'label' => Yii::t('BlogModule.blog', 'Members'),
        'items' => [
            [
                'icon'  => 'fa fa-fw fa-list-alt',
                'label' => Yii::t('BlogModule.blog', 'Manage members'),
                'url'   => ['/blog/userToBlogBackend/index']
            ],
            [
                'icon'  => 'fa fa-fw fa-plus-square',
                'label' => Yii::t('BlogModule.blog', 'Add a member'),
                'url'   => ['/blog/userToBlogBackend/create']
            ],
        ]
    ],
];
?>
<div class="page-header">
    <h1>
        <?php echo Yii::t('BlogModule.blog', 'Blog edit'); ?><br/>
        <small>&laquo;<?php echo $model->name; ?>&raquo;</small>
    </h1>
</div>

<?php echo $this->renderPartial('_form', ['model' => $model]); ?>
