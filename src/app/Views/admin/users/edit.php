<?php
    if (isset($user)) {
        $userData = $user[0];
    } else {
        $userData = false;
    }
?>
<div class="container">
    <div class="main-body">
        <div class="row">
            <div class="col-lg-4">
                <div class="card" style="height:100%">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                            <img src="assets/images/faces/face15.jpg" alt="Admin" class="rounded-circle p-1 bg-primary" width="170">
                            <div class="mt-3">
                                <h4><?php echo $userData ? esc($userData->name) : "avatar"; ?></h4>
                            </div>
                        </div>
                        <hr class="my-4">
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="<?php echo $userData ? "admin/users/edit/".esc($userData->user_id) : "admin/users/create"; ?>">
                            <?php if ($userData): ?>
                                <input type="hidden" name="_method" value="PUT">
                            <?php endif; ?>
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Full Name</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="text" class="form-control" value="<?php echo $userData ? esc($userData->name) : null; ?>" name="name" placeholder="Họ và tên" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Email</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="email" class="form-control" value="<?php echo $userData ? esc($userData->email) : null; ?>" name="email" placeholder="example@example.com" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Password</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="text" class="form-control" value="" name="password" placeholder="Mật khẩu">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Phone</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="text" class="form-control" value="<?php echo $userData ? esc($userData->phone) :null ?>" name="phone" placeholder="0323456789" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">State</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="number" class="form-control" value="<?php echo $userData ? esc($userData->state) : "1"; ?>" name="state" min="0" max="2" step="1" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3"></div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="submit" class="btn btn-primary px-4" value="Lưu">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
