<?php

namespace App\Admin\Controllers;

use App\Models\Wxh;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class WxhController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\Models\Wxh';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Wxh);

        $grid->column('id', __('序号'));
        $grid->column('wxh', __('微信号'));
// 设置text、color、和存储值
        $states = [
            'on'  => ['value' => 1, 'text' => '打开', 'color' => 'success'],
            'off' => ['value' => 2, 'text' => '关闭', 'color' => 'danger'],
        ];
        $grid->column('use',__('启用'))->switch($states);
        $grid->column('created_at', __('创建时间'));
        $grid->column('updated_at', __('更新时间'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Wxh::findOrFail($id));

        $show->field('id', __('序号'));
        $show->field('wxh', __('微信'));
        $show->field('use', __('启用'));
        $show->field('created_at', __('创建时间'));
        $show->field('updated_at', __('更新时间'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Wxh);

        $form->textarea('wxh', __('微信'));
//        $form->number('use', __('是否使用'))->default(1);
        $states = [
            'on'  => ['value' => 1, 'text' => '打开', 'color' => 'success'],
            'off' => ['value' => 0, 'text' => '关闭', 'color' => 'danger'],
        ];

        $form->switch('use','启用')->states($states);
        return $form;
    }
}
