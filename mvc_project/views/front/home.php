<div class="container">
    <h1>Blog Posts</h1>
    <ul>
        <?php foreach ($blogs as $blog): ?>
            <li>
                <a href="/blog/<?php echo $blog['id']; ?>">
                    <?php echo $blog['title']; ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</div>