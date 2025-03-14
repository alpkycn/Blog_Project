<?php
namespace App\Controllers\Front;

use App\Core\BaseController;
use App\Models\Blog;

class HomeController extends BaseController
{
    public function index()
    {
        $blogModel = new Blog();
        $blogs = $blogModel -> getAllBlogs();

        $this->render("front/home" , ['blogs' => $blogs]);
    }
}

?>