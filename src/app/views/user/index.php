<?php LoginSession::checkLoginSession($data["judul"]); ?>
<main>
    <div class="container d-flex flex-column">

        <div class="card my-4 mx-auto col-12 col-md-8 col-lg-6">
            <div class="card-body">
                <h5 class="card-title mb-4">Profil User</h5>
                <div class="card-text">
                    <p>
                        <span class="fw-bold">Username :</span>
                        <?= $_SESSION["userData"]["nama"] ?>
                    </p>
                </div>
                <div class="d-flex">
                        <button
                            class="btn btn-primary ms-auto"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#form-ubah-data-user"
                            aria-expanded="false"
                            aria-controls="#form-ubah-data-user">
                            Ubah Password atau Username</button>
                </div>
            </div>
        </div>

        <div class="collapse" id="form-ubah-data-user">
            <div class="card card-body mx-auto col-12 col-md-8 col-lg-6">

                <form action="<?= BASEURL ?>/user/updateData"
                    method="POST"
                    id="form_data_klien">

                    <div class="row mb-3">
                        <label for="username"
                            class="col-form-label col-sm-4">
                            Username :
                        </label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control"
                                id="username"
                                name="username"
                                required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="password"
                            class="col-form-label col-sm-4">
                            Password :
                        </label>
                        <div class="col-sm-8">
                            <input type="password" class="form-control"
                                id="password"
                                name="password"
                                required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="password2"
                            class="col-form-label col-sm-4">
                            Konfirmasi password :
                        </label>
                        <div class="col-sm-8">
                            <input type="password" class="form-control"
                                id="password2"
                                name="password2"
                                required>
                        </div>
                    </div>

                    <div class="container-fluid gap-2 p-0">
                            <button type="button"
                                class="btn btn-secondary"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#form-ubah-data-user"
                                aria-expanded="false"
                                aria-controls="#form-ubah-data-user"
                                data-bs-dismiss="modal">
                                Batal
                            </button>

                            <button type="submit"
                                form="form_data_klien"
                                id="btnSubmitFormDataKlien"
                                data-bs-toggle="tooltip"
                                data-bs-title="Setelah data profil user diedit, Anda perlu login lagi."
                                onclick="return confirm('Anda yakin untuk mengupdate data? Setelah data berhasil diudate, Anda perlu login lagi.')"
                                class="btn btn-primary">
                                Edit
                            </button>
                    </div>

                </form>

            </div>
        </div>

        <div class="my-4 mx-auto col-12 col-md-8 col-lg-6">
            <?php Flasher::flash(); ?>
        </div>

    </div>
</main>
