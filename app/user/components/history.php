<div class="contents" id="content_history">
    <div class="card border-0 shadow-sm p-3">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h3 class="m-0">ประวัติการสั่งซื้อ</h3>
        </div>
        <div class="table-responsive">
            <table class="table text-center" id="userTable">
                <thead>
                    <tr>
                        <th>ไอดี</th>
                        <th>เวลา</th>
                        <th>ผู้ส่ง</th>
                        <th>สถานะการส่ง</th>
                        <th>รายละเอียด</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($all_order as $data): ?>
                        <tr>
                            <td><?= $data['id'] ?></td>
                            <td><?= $data['time'] ?></td>
                            <th><?= $data['delivery_name'] ? $data['delivery_name'] : 'ยังไม่มีผู้ส่ง' ?></th>
                            <td><?= $data['delivery_status'] == 0 ? '🚚 กำลังจัดส่ง' : '✅ จัดส่งแล้ว'; ?></td>
                            <td>
                                <button class="btn btn-primary btn-sm" data-bs-toggle="modal"data-bs-target="#order-<?= $data['id'] ?>">
                                    ดูรายละเอียด
                                </button>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>