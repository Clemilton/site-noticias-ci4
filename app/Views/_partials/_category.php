<div class="container" data-aos="fade-up">

    <div class="section-header d-flex justify-content-between align-items-center mb-5">
        <h2><?php echo $posts[0]->categoryName ?></h2>
        <div><a href="category.html" class="more">See All <?php echo $posts[0]->categoryName ?></a></div>
    </div>

    <div class="row">
        <div class="col-md-9">

            <div class="d-lg-flex post-entry-2">
                <a href="single-post.html" class="me-4 thumbnail mb-4 mb-lg-0 d-inline-block">
                    <img src="<?php echo $posts[0]->image ?>" alt="" class="img-fluid">
                </a>
                <div>
                    <div class="post-meta"><span class="date"><?php echo $posts[0]->categoryName ?></span> <span class="mx-1">&bullet;</span> <span><?php echo date('d/m/Y H:i:s', strtotime($posts[0]->created_at)) ?></span></div>
                    <h3><a href="single-post.html"> <?php echo $posts[0]->title; ?></a></h3>
                    <p><?php echo word_limiter($posts[0]->description, 50) ?></p>
                    <div class="d-flex align-items-center author">
                        <div class="photo"><img src="assets/img/person-2.jpg" alt="" class="img-fluid"></div>
                        <div class="name">
                            <h3 class="m-0 p-0"><?php echo $posts[0]->userFirstName ?> <?php echo $posts[0]->userLastName ?></h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4">
                    <div class="post-entry-1 border-bottom">
                        <a href="single-post.html"><img src="assets/img/post-landscape-1.jpg" alt="" class="img-fluid"></a>
                        <div class="post-meta"><span class="date"><?php echo $posts[1]->categoryName ?></span> <span class="mx-1">&bullet;</span> <span><?php echo date('d/m/Y H:i:s', strtotime($posts[1]->created_at)) ?></span></div>
                        <h2 class="mb-2"><a href="single-post.html"><?php echo $posts[1]->title; ?></a></h2>
                        <span class="author mb-3 d-block"><?php echo $posts[1]->userFirstName ?> <?php echo $posts[1]->userLastName ?></span>
                        <p class="mb-4 d-block"><?php echo word_limiter($posts[1]->description, 30) ?></p>
                    </div>

                    <div class="post-entry-1">
                        <div class="post-meta"><span class="date"><?php echo $posts[2]->categoryName ?></span> <span class="mx-1">&bullet;</span> <span><?php echo date('d/m/Y H:i:s', strtotime($posts[2]->created_at)) ?></span></div>
                        <h2 class="mb-2"><a href="single-post.html"><?php echo $posts[2]->title; ?></a></h2>
                        <span class="author mb-3 d-block"><?php echo $posts[2]->userFirstName ?> <?php echo $posts[2]->userLastName ?></span>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="post-entry-1">
                        <a href="single-post.html"><img src="assets/img/post-landscape-2.jpg" alt="" class="img-fluid"></a>
                        <div class="post-meta"><span class="date"><?php echo $posts[3]->categoryName ?></span> <span class="mx-1">&bullet;</span> <span><?php echo date('d/m/Y H:i:s', strtotime($posts[3]->created_at)) ?></span></div>
                        <h2 class="mb-2"><a href="single-post.html"><?php echo $posts[3]->title; ?></a></h2>
                        <span class="author mb-3 d-block"><?php echo $posts[3]->userFirstName ?> <?php echo $posts[3]->userLastName ?></span>
                        <p class="mb-4 d-block"><?php echo word_limiter($posts[3]->description, 30) ?></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <?php $posts = array_slice($posts, 4, 10); ?>
            <?php foreach ($posts as $post) : ?>
                <div class="post-entry-1 border-bottom">
                    <div class="post-meta"><span class="date"><?php echo $post->categoryName ?></span> <span class="mx-1">&bullet;</span> <span><?php echo date('d/m/Y H:i:s', strtotime($post->created_at)) ?>/span></div>
                    <h2 class="mb-2"><a href="single-post.html"><?php echo $post->title; ?></a></h2>
                    <span class="author mb-3 d-block"><?php echo $post->userFirstName ?> <?php echo $post->userLastName ?></span>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
</div>