<main>
    <div class="container">

        <h1 class="text-center my-5">Login</h1>
        <div class="container-fluid">

            <div class="row justify-content-center">
                <form method="POST" action="<?= BASEURL; ?>/login/auth"
                    class="col col-4 bg-light border border-secondary rounded p-lg-5">

                    <div class="mb-3">
                        <label for="username" class="form-label">
                            Username
                        </label>
                        <input type="text"
                            class="form-control"
                            id="username"
                            name="username"
                            aria-describedby="emailHelp"
                            required>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">
                            Password
                        </label>
                        <input
                            type="password"
                            class="form-control"
                            id="password"
                            name="password"
                            required>
                    </div>

                    <button
                        type="submit"
                        name="submit"
                        class="btn btn-primary">Login</button>
                </form>
            </div>

            <div class="row mt-3">
                <div class="col-5 mx-auto">
                    <?php Flasher::flash(); ?>
                </div>
            </div>

        </div>
    </div>
</main>
