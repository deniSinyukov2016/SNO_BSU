<?php

namespace App\Http\Sections;

use SleepingOwl\Admin\Contracts\Display\DisplayInterface;
use SleepingOwl\Admin\Contracts\Form\FormInterface;
use SleepingOwl\Admin\Section;
use AdminColumn;
use AdminDisplay;
use AdminForm;
use AdminFormElement;
use SleepingOwl\Admin\Contracts\Initializable;

/**
 * Class Posts
 *
 * @property \App\Post $model
 *
 * @see http://sleepingowladmin.ru/docs/model_configuration_section
 */
class Posts extends Section
{
    /**
     * @see http://sleepingowladmin.ru/docs/model_configuration#ограничение-прав-доступа
     *
     * @var bool
     */
    protected $checkAccess = false;

    /**
     * @var \App\Post
     */
    protected $model = '\App\Post';

    /**
     * @var string
     */
    protected $title = 'Новости';

    /**
     * @var string
     */
    protected $alias = 'news';

    /**
     * @return DisplayInterface
     */
    public function onDisplay()
    {
        $table =  AdminDisplay::table()/*->with('users')*/
        ->setHtmlAttribute('class', 'table-primary')
            ->setColumns(
                AdminColumn::text('id', 'ID')->setWidth('30px'),
                AdminColumn::link('title', 'Заголовок')->setWidth('200px'),
                AdminColumn::text('content', 'Содержимое'),
                AdminColumn::text('status', 'Статус'),
                AdminColumn::text('url', 'URL')
            )->paginate(20);
//        $table = AdminForm::panel()
//            ->addHeader([
//                AdminFormElement::text('title', 'Title'),
//            ]);
    return $table;
    }

    /**
     * @param int $id
     *
     * @return FormInterface
     */
    public function onEdit($id)
    {
        $form =  AdminForm::panel()->addBody([
            AdminFormElement::text('title', 'Заголовок'),
            AdminFormElement::wysiwyg('content', 'Содержимое', 'ckeditor'),
            AdminFormElement::text('status', 'Статус'),
            AdminFormElement::text('url', 'URL')->required(),
            AdminFormElement::text('id', 'ID')->setReadonly(1),
            AdminFormElement::text('created_at')->setLabel('Создано')->setReadonly(1),
        ]);
        return $form;
    }

    /**
     * @return FormInterface
     */
    public function onCreate()
    {
        return $this->onEdit(null);
    }

    /**
     * @return void
     */
    public function onDelete($id)
    {
        // remove if unused
    }

    /**
     * @return void
     */
    public function onRestore($id)
    {
        // remove if unused
    }
}
