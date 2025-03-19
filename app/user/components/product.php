<div class="contents" id="content_main">
    <h2 class="pb-2 border-bottom">สินค้า</h2>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 align-items-stretch g-4 py-5">
        <?php
            foreach ($all_product as $data):
        ?>
            <a href="#" class="nav-link nav-content" data-content="product_select-<?= $data['id'] ?>">
                <div class="col">
                    <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg"
                        style="background-image: url('<?= $data['image'] ?>'); background-size: cover; background-position: center; background-repeat: no-repeat;">
                        <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                            <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold text-primary"><?= $data['name'] ?></h3>
                            <ul class="d-flex list-unstyled mt-auto">
                                <li class="me-auto">
                                    <small><?= $data['id_ca'] ?></small>
                                </li>
                                <li class="d-flex align-items-center me-3">
                                    <svg class="bi me-2" width="1em" height="1em">
                                        <use xlink:href="#geo-fill"></use>
                                    </svg>
                                    <small><?= $data['bio'] ?></small>
                                </li>
                                <li class="d-flex align-items-center">
                                    <svg class="bi me-2" width="1em" height="1em">
                                        <use xlink:href="#calendar3"></use>
                                    </svg>
                                    <small class="text-success"><?= number_format($data['price'], 2) ?> ฿</small>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </a>
        <?php endforeach; ?>
    </div>
</div>
