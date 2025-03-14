<?php

namespace App\Controllers\Admin;

use App\Core\BaseController;
use App\Models\Blog;

class DashboardController extends BaseController
{
    public function index()
    {
        $this->render("admin/dashboard");
    }

    public function addBlog()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $title = $_POST['title'];
            $content = $_POST['content'];

            $blogModel = new Blog();
            $blogModel->addBlog($title, $content);

            header("Location: /admin/dashboard");
            exit;
        }

        $this->render("admin/add_blog");
    }
}
