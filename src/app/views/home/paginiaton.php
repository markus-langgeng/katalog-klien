<?php
$jmlHlm = $data["clients"]["jmlHlm"];
$hlmAktif = $data["clients"]["hlmAktif"];
$indexAwal = $data["clients"]["indexAwal"];
?>
    <nav aria-label="Page navigation">
        <ul class="pagination justify-content-center">

            <?php if ($hlmAktif > 1) : ?>
            <li class="page-item">
                <a class="page-link"
                    href="1">
                    First
                </a>
            </li>
            <li class="page-item">
                <a class="page-link"
                href="<?= $hlmAktif - 1 ?>"
                aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <?php endif; ?>

            <?php for ($i = 1; $i <= $jmlHlm; $i++) : ?>

                <?php if ($i == $hlmAktif) : ?>

                <li class="page-item">
                    <a class="page-link active"
                        aria-current="page"
                        href="<?= $i ?>">
                        <?= $i; ?>
                    </a>
                </li>

                <?php else: ?>

                <li class="page-item">
                    <a class="page-link" href="<?= $i ?>">
                        <?= $i; ?>
                    </a>
                </li>

                <?php endif; ?>
            <?php endfor; ?>

            <?php if ($hlmAktif < $jmlHlm) : ?>
            <li class="page-item">
                <a class="page-link"
                    href="<?= $hlmAktif + 1 ?>"
                    aria-label="Next" >
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
            <li class="page-item">
                <a class="page-link"
                    href="<?= $jmlHlm ?>">
                    Last
                </a>
            </li>
            <?php endif; ?>


        </ul>
    </nav>

