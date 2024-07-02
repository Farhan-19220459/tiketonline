<?php
require('views/essentials.php');
adminLogin();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Settings</title>
    <?php require('views/links.php'); ?>
</head>

<body class="bg-light">

    <?php require('views/header.php'); ?>

    <div class="container-fluid" id="main-content">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">
                <h3 class="mb-4">Settings</h3>

                <!----- TITLE SETTINGS ----->

                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="card-title m-0">Content Settings</h5>
                            <button type="button" class="btn btn-dark shadown-none btn-sm" data-bs-toggle="modal" data-bs-target="#general-s"><i class="bi bi-pencil-square"></i> Edit</button>
                        </div>
                        <h6 class="card-subtitle mb-1 fw-bold">Title</h6>
                        <p class="card-text" id="title"></p>
                        <h6 class="card-subtitle mb-1 fw-bold">About Us</h6>
                        <p class="card-text" id="about"></p>
                    </div>
                </div>

                <!----- Title Content SETTINGS ----->

                <div class="modal fade" id="general-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <form id="general_s_form">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Settings</h5>
                                </div>
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label class="form-label fw-bold">Title</label>
                                        <input type="text" name="title" id="title_inp" class="form-control shadow-none">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label fw-bold">About us</label>
                                        <textarea name="about" id="about_inp" class="form-control shadow-none" rows="6"></textarea>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" onclick="title.value = general_data.title, about.value = general_data.about" class="btn text-secondary shadown-none" data-bs-dismiss="modal">Cancel</button>
                                    <button type="button" class="btn custom-bg text-white shadow-none">Submit</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>

                <!----- Shutdown SETTINGS ----->

                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="card-title m-0">Shutdown Settings</h5>
                            <div class="form-check form-switch">
                                <form>
                                    <input onchange="upd_shutdown(this.value)" class="form-check-input" type="checkbox" id="shutdown-toggle">
                                </form>
                            </div>
                        </div>
                        <p class="card-text">
                            Menonaktifkan website dari segala aktivitas yang sedang berjalan.
                        </p>
                    </div>
                </div>

                <!----- Contact SETTINGS ----->

                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="card-title m-0">Contacts Settings</h5>
                            <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#contacts-s">
                                <i class="bi bi-pencil-square"></i> Edit
                            </button>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <h6 class="card-subtitle mb-1 fw-bold">Address</h6>
                                    <p class="card-text" id="address"></p>
                                </div>
                                <div class="mb-4">
                                    <h6 class="card-subtitle mb-1 fw-bold">Google Map</h6>
                                    <p class="card-text" id="gmaps"></p>
                                </div>
                                <div class="mb-4">
                                    <h6 class="card-subtitle mb-1 fw-bold">Phone Numbers</h6>
                                    <p class="card-text mb-1">
                                        <i class="bi bi-telephone-fill"></i>
                                        <span id="telepon1"></span>
                                    </p>
                                    <p class="card-text">
                                        <i class="bi bi-telephone-fill"></i>
                                        <span id="telepon2"></span>
                                    </p>
                                </div>
                                <div class="mb-4">
                                    <h6 class="card-subtitle mb-1 fw-bold">E-mail</h6>
                                    <p class="card-text" id="email"></p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <h6 class="card-subtitle mb-1 fw-bold">Social Links</h6>
                                    <p class="card-text mb-1">
                                        <i class="bi bi-facebook mb-1"></i>
                                        <span id="facebook"></span>
                                    </p>
                                    <p class="card-text mb-1">
                                        <i class="bi bi-instagram mb-1"></i>
                                        <span id="instagram"></span>
                                    </p>
                                    <p class="card-text">
                                        <i class="bi bi-twitter mb-1"></i>
                                        <span id="twitter"></span>
                                    </p>
                                </div>
                                <div class="mb-4">
                                    <h6 class="card-subtitle mb-1 fw-bold">iFrame</h6>
                                    <iFrame id="iFrame" class="border p-2 w-100" loading="lazy"></iFrame>
                                </div>

                            </div>
                        </div>


                    </div>
                </div>

            </div>

            <!----- Contact Contect SETTINGS ----->

            <div class="modal fade" id="contacts-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <form id="contacts_s_form">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Settings</h5>
                            </div>
                            <div class="modal-body">
                                <div class="container-fluid p-0">
                                    <div class="row">
                                        <div class="cold-md-6">
                                            <div class="mb-3">
                                                <label class="form-label fw-bold">Address</label>
                                                <input type="text" name="address" id="address_inp" class="form-control shadow-none">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label fw-bold">Google Maps Link</label>
                                                <input type="text" name="gmaps" id="gmaps_inp" class="form-control shadow-none">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label fw-bold">Phone Numbers</label>
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text"><i class="bi bi-telephone-fill"></i></span>
                                                    <input type="number" name="telp1" id="telp1_inp" class="form-control shadow-none" required>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text"><i class="bi bi-telephone-fill"></i></span>
                                                    <input type="number" name="telp2" id="telp2_inp" class="form-control shadow-none" required>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label fw-bold">Email</label>
                                                <input type="text" name="email" id="email_inp" class="form-control shadow-none">
                                            </div>
                                        </div>
                                        <div class="cold-md-6">
                                            <div class="mb-3">
                                                <label class="form-label fw-bold">Social Links</label>
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text"><i class="bi bi-facebook"></i></span>
                                                    <input type="text" name="facebook" id="facebook_inp" class="form-control shadow-none" required>
                                                </div>
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text"><i class="bi bi-instagram"></i></span>
                                                    <input type="text" name="instagram" id="instagram_inp" class="form-control shadow-none" required>
                                                </div>
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text"><i class="bi bi-twitter"></i></span>
                                                    <input type="text" name="twitter" id="twitter_inp" class="form-control shadow-none" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label fw-bold">iFrame</label>
                                                    <input type="text" name="iframe" id="iframe_inp" class="form-control shadow-none">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" onclick="contacts_inp(contacts_data)" class="btn text-secondary shadown-none" data-bs-dismiss="modal">Cancel</button>
                                    <button type="button" class="btn custom-bg text-white shadow-none">Submit</button>
                                </div>
                            </div>
                    </form>

                </div>
            </div>

        </div>
    </div>

    <?php require('views/scripts.php'); ?>
    <script src="scripts/settings.js"></script>
</body>

</html>