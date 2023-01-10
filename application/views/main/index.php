<section class="home">
    <div class="home__container _container">
        <div class="home__body">
            <div class="home__wrapper">
                <a href="https://github.com/qsiax">
                    <div class="home__image"></div>
                </a>
                <div class="home__heading">PHP Post Starter by qsiax</div>
                <div class="home__content">
                    
                    <!-- ADD TO POST -->
                    <!-- <?php if (empty($list)): ?>
                        <h1>Новостная лента в данное время пуста</h1>
                    <?php else: ?>
                    <?php foreach ($list as $val): ?>
                        <a href="/post/<?php echo $val['id']; ?>">
                            <div class="home__news-item">
                                <div class="home__news-item-image" style="background: url('/public/materials/<?php echo $val['id']; ?>.jpg') !important; background-size: cover !important;
                            background-repeat: no-repeat !important;"></div>
                                <div class="home__news-item-block">
                                    <div class="home__news-item-box">
                                        <div class="home__news-item-title"><?php echo htmlspecialchars($val['name'], ENT_QUOTES); ?></div>
                                        <div class="home__news-item-text"><?php echo htmlspecialchars($val['description'], ENT_QUOTES); ?></div>
                                    </div>
                                    <div class="home__news-item-num">0<?php echo $val['id']; ?></div>
                                </div>
                            </div>
                        </a>
                    <?php endforeach; ?>
                    <?php endif; ?> -->

                    <!-- POST SAMPLE -->
                    <div class="home__news-wrapper">
                        <div class="home__news-item">
                            <div class="home__news-item-image"></div>
                            <div class="home__news-item-block">
                                <div class="home__news-item-box">
                                    <div class="home__news-item-title">Test post</div>
                                    <div class="home__news-item-text">Descriptions</div>
                                </div>
                                <div class="home__news-item-num">01</div>
                            </div>
                        </div>
                        <div class="home__news-item">
                            <div class="home__news-item-image"></div>
                            <div class="home__news-item-block">
                                <div class="home__news-item-box">
                                    <div class="home__news-item-title">Test post</div>
                                    <div class="home__news-item-text">Descriptions</div>
                                </div>
                                <div class="home__news-item-num">02</div>
                            </div>
                        </div>
                        <div class="home__news-item">
                            <div class="home__news-item-image"></div>
                            <div class="home__news-item-block">
                                <div class="home__news-item-box">
                                    <div class="home__news-item-title">Test post</div>
                                    <div class="home__news-item-text">Descriptions</div>
                                </div>
                                <div class="home__news-item-num">03</div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>