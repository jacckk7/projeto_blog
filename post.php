<?php

    include_once("templates/header.php");

    if(isset($_GET['id'])) {
        $postId = $_GET['id'];
        $currentPost;

        foreach($posts as $post) {
            if($post['id'] == $postId) {
                $currentPost = $post;
            }
        }
    }

?>

    <main id="post-container">
        <div class="content-container">
            <h1 id="main-title"><?= $currentPost['title'] ?></h1>
            <p id="post-description"><?= $currentPost['description'] ?></p>
            <div class="img-container">
                <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
            </div>
            <p class="post-content">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perferendis vitae, harum enim ratione delectus suscipit dolorum iure velit! Excepturi reprehenderit tempora est, aut ad harum? Molestiae asperiores ex distinctio deserunt!
                Voluptate quae illo nemo sit similique magni eos architecto sed molestias possimus, cumque aspernatur laborum accusamus rem, hic placeat veritatis error incidunt a minus quos. Repellendus, quasi esse? Ducimus, sit.
                Veritatis cupiditate repudiandae nam quia recusandae natus consequatur, distinctio pariatur, corporis provident in similique doloribus eligendi obcaecati itaque sit quaerat fugiat reiciendis libero commodi dignissimos perferendis. Sit maxime ex autem.
                Modi, illum? Sequi ipsam rem perspiciatis voluptas doloremque eos inventore iure illum quidem adipisci qui reprehenderit soluta quibusdam hic corporis dolore omnis eum eligendi quasi vitae, earum veniam obcaecati corrupti.
                Culpa consequuntur, a ea quis facere iusto libero eveniet quam fugit sed numquam minima ducimus possimus magni aperiam voluptates quas inventore ut molestias. Eveniet provident doloremque animi dicta aperiam nostrum!
            </p>
            <p class="post-content">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perferendis vitae, harum enim ratione delectus suscipit dolorum iure velit! Excepturi reprehenderit tempora est, aut ad harum? Molestiae asperiores ex distinctio deserunt!
                Voluptate quae illo nemo sit similique magni eos architecto sed molestias possimus, cumque aspernatur laborum accusamus rem, hic placeat veritatis error incidunt a minus quos. Repellendus, quasi esse? Ducimus, sit.
                Veritatis cupiditate repudiandae nam quia recusandae natus consequatur, distinctio pariatur, corporis provident in similique doloribus eligendi obcaecati itaque sit quaerat fugiat reiciendis libero commodi dignissimos perferendis. Sit maxime ex autem.
                Modi, illum? Sequi ipsam rem perspiciatis voluptas doloremque eos inventore iure illum quidem adipisci qui reprehenderit soluta quibusdam hic corporis dolore omnis eum eligendi quasi vitae, earum veniam obcaecati corrupti.
                Culpa consequuntur, a ea quis facere iusto libero eveniet quam fugit sed numquam minima ducimus possimus magni aperiam voluptates quas inventore ut molestias. Eveniet provident doloremque animi dicta aperiam nostrum!
            </p>
        </div>

        <aside id="nav-container">
            <h3 id="tags-title">Tags</h3>
            <ul id="tag-list">
                <?php foreach($currentPost['tags'] as $tag): ?>
                    <li><a href="#"><?= $tag ?></a></li>
                <?php endforeach; ?>
            </ul>
            <h3 id="categories-title">Categorias</h3>
            <ul id="categories-list">
                <?php foreach($categories as $category): ?>
                    <li><a href="#"><?= $category ?></a></li>
                <?php endforeach; ?>
            </ul>
        </aside>
    </main>

<?php

    include_once("templates/footer.php");

?>