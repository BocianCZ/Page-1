<?php namespace Modules\Page\Composers;

use Illuminate\Contracts\View\View;
use Modules\Core\Composers\BaseSidebarViewComposer;

class SidebarViewComposer extends BaseSidebarViewComposer
{
    public function compose(View $view)
    {
        $view->items->put('pages', [
            'weight' => 5,
            'request' => "*/$view->prefix/page/pages*",
            'route' => 'admin.page.page.index',
            'icon-class' => 'fa fa-file',
            'title' => 'Pages',
            'permission' => $this->auth->hasAccess('page.pages.index'),
        ]);
    }
}
