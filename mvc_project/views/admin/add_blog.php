<div class="container">
    <h1>Add New Blog Post</h1>
    <form method="POST" action="/admin/addBlog">
        <label>Title</label>
        <input type="text" name="title" required>
        <label>Contents</label>
        <textarea name="content" required></textarea>
        <button type="submit">Add</button>
    </form>
</div>
