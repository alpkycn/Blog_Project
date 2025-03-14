<?php

namespace App\Models;

use PDO;

class Blog
{
    private $db;

    public function __construct()
    {
        $this->db = new PDO("mysql:host=localhost;dbname=blog_db", "root", "");
    }

    public function getAllBlogs()
    {
        $query = $this->db->query("SELECT * FROM blogs ORDER BY created_at DESC");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getBlogById($id)
    {
        $query = $this->db->prepare("SELECT * FROM blogs WHERE id = ?");
        $query->execute([$id]);
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public function addBlog($title, $content)
    {
        $query = $this->db->prepare("INSERT INTO blogs (title, content) VALUES (?, ?)");
        return $query->execute([$title, $content]);
    }
}


?>