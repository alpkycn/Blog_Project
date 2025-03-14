<?php

namespace App\Controllers\Front;

use App\Core\BaseController;
use App\Models\Blog;

class BlogController extends BaseController
{
    public function show($id)
    {
        $blogModel = new Blog();
        $blog = $blogModel->getBlogById($id);

        $this->render("front/blog", ['blog' => $blog]);
    }
}
