<section class="news">
    <div class="news__container _container">
        <div class="news__body">
            <div class="news__heading">News Action</div>
            <div class="news__content">

                <!-- ADD TO POST -->
                <!-- <?php if (empty($list)): ?>
                <div class="news__error">
                        Новостная лента в данное время пуста
                    </div>
                <?php else: ?>
                <?php foreach ($list as $val): ?>
                    <a href="/post/<?php echo $val['id']; ?>">
                        <div class="news__item">
                            <div class="news__item-image" style="background: url('/public/materials/<?php echo $val['id']; ?>.jpg') !important; background-size: cover !important;
                                background-repeat: no-repeat !important;"></div>
                            <div class="news__item-block">
                                <div class="news__item-box">
                                    <div class="news__item-title"><?php echo htmlspecialchars($val['name'], ENT_QUOTES); ?></div>
                                    <div class="news__item-text"><?php echo htmlspecialchars($val['description'], ENT_QUOTES); ?></div>
                                </div>
                                <div class="news__item-num">0<?php echo $val['id']; ?></div>
                            </div>
                        </div>
                    </a>
                <?php endforeach; ?>
                <?php endif; ?>  -->

                <!-- POST SAMPLE -->
                <div class="news__item">
                    <div class="news__item-image"></div>
                    <div class="news__item-block">
                        <div class="news__item-box">
                            <div class="news__item-title">Test post</div>
                            <div class="news__item-text">Descriptions</div>
                        </div>
                        <div class="news__item-num">01</div>
                    </div>
                </div>
                <div class="news__item">
                    <div class="news__item-image"></div>
                    <div class="news__item-block">
                        <div class="news__item-box">
                            <div class="news__item-title">Test post</div>
                            <div class="news__item-text">Descriptions</div>
                        </div>
                        <div class="news__item-num">02</div>
                    </div>
                </div>
                <div class="news__item">
                    <div class="news__item-image"></div>
                    <div class="news__item-block">
                        <div class="news__item-box">
                            <div class="news__item-title">Test post</div>
                            <div class="news__item-text">Descriptions</div>
                        </div>
                        <div class="news__item-num">03</div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
