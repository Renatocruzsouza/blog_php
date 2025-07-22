<?php
    include_once("templates/header.php");

    

    if(isset($_GET['id'])) {

        $postId = $_GET['id'];
        
        $currentPost = null;

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
            <p class="post-container">Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit officia aliquid voluptate rerum vero quo harum modi quis minima? Dicta, tempore qui? Unde sapiente voluptate debitis, facilis ut iste enim.
            Commodi distinctio corrupti maiores necessitatibus ipsa labore amet officia explicabo? Eligendi necessitatibus rerum perferendis eum, laboriosam placeat. Ad esse vitae reprehenderit et alias tempore, fugit animi molestias sint recusandae! Mollitia!
            Veniam quis nostrum laborum recusandae ducimus. Sunt at molestias pariatur itaque fugiat totam dolor aspernatur amet vitae esse, quidem autem velit quam impedit expedita nemo dolorem soluta ex vel. Sed?
            Expedita omnis voluptatem ducimus enim fugiat amet aut quisquam iusto cumque iste repellat itaque tempore numquam, minus incidunt assumenda a nulla, architecto minima. Animi error repellendus dolore nemo quae voluptatibus.
            Neque sunt commodi consequuntur id esse quod debitis accusamus, exercitationem quo perferendis. Quam, magni iure accusantium quisquam est, nobis commodi alias atque autem perferendis explicabo ipsum dicta adipisci, incidunt molestias.</p>
            <p class="post-container">Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit officia aliquid voluptate rerum vero quo harum modi quis minima? Dicta, tempore qui? Unde sapiente voluptate debitis, facilis ut iste enim.
            Commodi distinctio corrupti maiores necessitatibus ipsa labore amet officia explicabo? Eligendi necessitatibus rerum perferendis eum, laboriosam placeat. Ad esse vitae reprehenderit et alias tempore, fugit animi molestias sint recusandae! Mollitia!
            Veniam quis nostrum laborum recusandae ducimus. Sunt at molestias pariatur itaque fugiat totam dolor aspernatur amet vitae esse, quidem autem velit quam impedit expedita nemo dolorem soluta ex vel. Sed?
            Expedita omnis voluptatem ducimus enim fugiat amet aut quisquam iusto cumque iste repellat itaque tempore numquam, minus incidunt assumenda a nulla, architecto minima. Animi error repellendus dolore nemo quae voluptatibus.
            Neque sunt commodi consequuntur id esse quod debitis accusamus, exercitationem quo perferendis. Quam, magni iure accusantium quisquam est, nobis commodi alias atque autem perferendis explicabo ipsum dicta adipisci, incidunt molestias.</p>
            <p class="post-container">Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit officia aliquid voluptate rerum vero quo harum modi quis minima? Dicta, tempore qui? Unde sapiente voluptate debitis, facilis ut iste enim.
            Commodi distinctio corrupti maiores necessitatibus ipsa labore amet officia explicabo? Eligendi necessitatibus rerum perferendis eum, laboriosam placeat. Ad esse vitae reprehenderit et alias tempore, fugit animi molestias sint recusandae! Mollitia!
            Veniam quis nostrum laborum recusandae ducimus. Sunt at molestias pariatur itaque fugiat totam dolor aspernatur amet vitae esse, quidem autem velit quam impedit expedita nemo dolorem soluta ex vel. Sed?
            Expedita omnis voluptatem ducimus enim fugiat amet aut quisquam iusto cumque iste repellat itaque tempore numquam, minus incidunt assumenda a nulla, architecto minima. Animi error repellendus dolore nemo quae voluptatibus.
            Neque sunt commodi consequuntur id esse quod debitis accusamus, exercitationem quo perferendis. Quam, magni iure accusantium quisquam est, nobis commodi alias atque autem perferendis explicabo ipsum dicta adipisci, incidunt molestias.</p>
        </div>
     
         <aside id="nav-container">
        <h3 id="tags-title">Tags</h3>
        <ul class="tags-list">
             <?php foreach($currentPost['tags'] as $tag):?>
            <li><a href="#"><?= $tag ?></a></li>
             <?php endforeach; ?>
         </ul>
         <h3 id="categories-title">Categorias</h3>
         <ul id="categories-list">
              <?php foreach($categories as $category):?>
            <li><a href="#"><?= $category ?></a></li>
             <?php endforeach; ?>
         </ul>
    </aside>
 </main>
   
<?php 
include_once("templates/footer.php"); 
?>