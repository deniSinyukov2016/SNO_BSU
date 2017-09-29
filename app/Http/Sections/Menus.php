<?php

namespace App\Http\Sections;

use SleepingOwl\Admin\Contracts\Display\DisplayInterface;
use SleepingOwl\Admin\Contracts\Form\FormInterface;
use SleepingOwl\Admin\Section;

use AdminColumn;
use AdminDisplay;
use AdminForm;
use AdminFormElement;
use AdminColumnEditable;

/**
 * Class Menus
 *
 * @property \App\Menu $model
 *
 * @see http://sleepingowladmin.ru/docs/model_configuration_section
 */
class Menus extends Section
{
    /**
     * @see http://sleepingowladmin.ru/docs/model_configuration#ограничение-прав-доступа
     *
     * @var bool
     */
    protected $checkAccess = false;

    /**
     * @var string
     */
    protected $title = 'Меню';

    /**
     * @var string
     */
    protected $alias = 'menus';

    /**
     * @var \App\Menu
     */
    protected $model = '\App\Menu';

    /**
     * @return DisplayInterface
     */
    public function onDisplay()
    {
//        return AdminDisplay::table()/*->with('users')*/
//        ->setHtmlAttribute('class', 'table-primary')
//            ->setColumns(
//                AdminColumn::text('id', 'ID')->setWidth('30px'),
//                AdminColumn::text('title', 'Название')->setWidth('30px'),
//                AdminColumnEditable::checkbox('active', 'Published'),
//                AdminColumn::text('url', 'URL'),
//                AdminColumn::text('alias', 'Альтернативное имя')
//            )->paginate(20);

        $display = AdminDisplay::datatables()->setHtmlAttribute('class', 'table-primary');
        //$display->setOrder([[1, 'asc']]);
        $display->setColumns([
            AdminColumn::text('id', 'ID')->setWidth('30px'),
            AdminColumn::link('title', 'Название'),
            AdminColumn::text('alias', 'Альтернативное имя'),
            AdminColumn::text('url', 'URL'),
            AdminColumn::custom('Состояние', function (\App\Menu $model) {
                return $model->active ? '<i class="fa fa-check"></i>' : '<i class="fa fa-minus"></i>';
            })->setWidth('50px')->setHtmlAttribute('class', 'text-center')->setOrderable(false),
        ]);

        return $display;
    }

    /**
     * @param int $id
     *
     * @return FormInterface
     */
    public function onEdit($id)
    {
        $form = AdminForm::panel()
            ->addBody([
                AdminFormElement::text('title', 'Title')->required(),
                AdminFormElement::checkbox('active', 'Опубликовать'),
                AdminFormElement::text('url', 'URL'),
                AdminFormElement::text('alias', 'Альтернатива'),
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
