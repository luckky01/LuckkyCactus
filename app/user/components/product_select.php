<div class="contents" id="product_select-<?= $data['id'] ?>">
    <h2 class="pb-3 border-bottom text-primary"><?= $data['name'] ?></h2>
    <div class="container py-4">
        <div class="row g-4">
            <!-- Product Image Section -->
            <div class="col-md-6">
                <div class="card border-0 shadow-sm">
                    <img src="<?= $data['image'] ?>" alt="<?= $data['name'] ?>" class="card-img-top rounded-4"
                        style="height: 400px; object-fit: cover;">
                </div>
            </div>

            <!-- Product Information Section -->
            <div class="col-md-6">
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <form action="_class/handle.php" method="post">
                            <h3 class="fw-bold"><?= $data['name'] ?></h3>
                            <p class="text-muted mb-2"><strong>Category:</strong> <?= $data['id_ca'] ?></p>
                            <p class="text-muted mb-3"><strong>Description:</strong> <?= $data['bio'] ?></p>

                            <!-- Price -->
                            <h4 class="fw-bold text-success mb-4">฿<?= number_format($data['price'], 2) ?></h4>

                            <!-- Color Picker or Options (if any) -->
                            <div class="mb-3">
                                <strong>Select Color:</strong>
                                <select class="form-select">
                                    <option value="red">Red</option>
                                    <option value="blue">Blue</option>
                                    <option value="green">Green</option>
                                </select>
                            </div>

                            <!-- Quantity -->
                            <div class="mb-3">
                                <strong>Quantity:</strong>
                                <input type="number" name="qty" class="form-control" value="1" min="1">
                            </div>

                            <!-- Buy Button -->

                            <input type="hidden" name="product" value="<?= $data['id'] ?>">
                            <button class="btn btn-primary w-100" name="add_cart">Add to Cart</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>