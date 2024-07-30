<?php
    $userData = $user[0];
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
                                <h4><?php echo esc($userData->name); ?></h4>
                            </div>
                        </div>
                        <hr class="my-4">
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="admin/users/edit/<?php echo esc($userData->user_id); ?>">
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Full Name</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="text" class="form-control" value="<?php echo esc($userData->name); ?>" name="name">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Email</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="email" class="form-control" value="<?php echo esc($userData->email); ?>" name="email">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Phone</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="text" class="form-control" value="<?php echo esc($userData->phone); ?>" name="phone" placeholder="0323456789">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">State</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="number" class="form-control" value="<?php echo esc($userData->state); ?>" name="state" min="0" max="2" step="1">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3"></div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="submit" class="btn btn-primary px-4" value="Save Changes">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>