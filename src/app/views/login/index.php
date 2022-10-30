<main>
    <div class="container">
        <h1 class="text-center my-5">Login</h1>
        <div class="container-fluid">

            <?php var_dump($data["users"]); ?>

            <div class="row justify-content-center">
                <form class="col col-4 bg-light border border-secondary rounded p-lg-5">

                    <div class="mb-3">
                        <label for="username-id" class="form-label">
                            Username
                        </label>
                        <input type="text"
                            class="form-control"
                            id="username-id"
                            aria-describedby="emailHelp">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">
                            Password
                        </label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>

                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
            </div>

        </div>
    </div>
</main>
