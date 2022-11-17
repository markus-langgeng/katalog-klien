<?php LoginSession::checkLoginSession($data["judul"]); ?>
<main class="home-page">
    <div class="container">

        <div class="row mt-3">
            <?php Flasher::flash(); ?>
        </div>

        <h1 class="col">Data Klien</h1>

        <div class="row">
            <div class="my-3">

                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo" >
                            <button
                                class="accordion-button collapsed"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo"
                                aria-expanded="false"
                                aria-controls="collapseTwo">
                                <span data-bs-toggle="tooltip"
                                    data-bs-placement="right"
                                    data-bs-title="Checkbox ini hanya untuk menampilkan kolom tabel mana yang ingin dilihat." >
                                    Check list kolom yang ingin ditampilkan
                                </span>
                            </button>
                        </h2>

                        <div id="collapseTwo"
                            class="accordion-collapse collapse"
                            aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">

                                <?php require_once "check_list.php"; ?>

                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="d-md-flex justify-content-between">
                <div class="d-grid mb-3">
                    <button
                        id="btnTambahDataKlien"
                        class="btn btn-primary"
                        data-bs-toggle="modal"
                        data-bs-target="#modalDataKlien">
                        Tambahkan Klien
                    </button>
                </div>

                <div class="ms-auto me-md-2">
                    <?php require_once "filter_dropdown.php"; ?>
                </div>
                <div class="mb-3">
                    <div class="input-group">

                        <input type="text"
                            class="form-control"
                            placeholder="Cari Data Klien"
                            name="keyword"
                            id="keyword"
                            autocomplete="off">

                        <button class="btn btn-primary"
                            type="submit"
                            id="tombolCari">
                            Cari
                        </button>
                    </div>
                </div>
            </div>


        <div class="table-responsive mb-4" id="client-table-container">
        <?php require_once "clients_table.php"; ?>
        </div>

        <?php require_once "paginiaton.php"; ?>

    </div>
        <?php require_once "modal_form.php"; ?>
        <div class="modal fade" id="modalUserProfile" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Profil User</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>
                            Username : <?= $_SESSION["userData"]["nama"] ?>
                        </p>
                        <p>
                            Password : <?= $_SESSION["userData"]["password"] ?>
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Edit</button>
                    </div>
                </div>
            </div>
        </div>

</main>
