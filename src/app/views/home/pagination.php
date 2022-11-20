<?php
$tot_hlm = $data["clients"]["tot_hlm"];
$hlm_aktif = $data["clients"]["hlm_aktif"];
$index_awal = $data["clients"]["index_awal"];

$limit = 5;
$samping_hlm_aktif = floor($limit / 2);
$prev = $hlm_aktif - 1;
$next = $hlm_aktif + 1;

$first_page = "<li class='page-item'><a class='page-link' href='1'>1</a></li>";
$dot_pages = "<li class='page-item disabled'><span class='page-link'>...</span></li>";
$last_page = "<li class='page-item'> <a class='page-link' href='{$tot_hlm}'>{$tot_hlm}</a></li>";
$pagination = "<nav aria-label='Page navigation'>";
$pagination .= "<ul class='pagination justify-content-center'>";

// tombol previous
if ($hlm_aktif > 1) {
    $pagination .= "<li class='page-item'><a class='page-link' href='{$prev}' aria-label='Previous'>
                        <span aria-hidden='true'>&laquo;</span>
                    </a></li>";
}

if ($tot_hlm <= $limit + 1) { // ngga cukup bnyk halamannya; ga perlu dipisah"
    for ($i = 1; $i <= $tot_hlm; $i++) {
        $active = $i == $hlm_aktif ? "active" : "";
        $pagination .= "<li class='page-item'><a class='page-link {$active}' href='{$i}'>{$i}</a></li>";
    }
} else { // halamannya cukup banyak, bisa dipisah"
    if ($hlm_aktif >= $limit) {
        $pagination .= $first_page;
        $pagination .= $dot_pages;
    }

    if ($hlm_aktif < $limit) { // dekat dengan awal
        for ($i = 1; $i <= $limit; $i++) {
            $active = $i == $hlm_aktif ? "active" : "";
            $pagination .= "<li class='page-item'><a class='page-link {$active}' href='{$i}'>{$i}</a></li>";
        }
    } elseif ($hlm_aktif >= $limit && $hlm_aktif <= $tot_hlm - ($limit - 1)) { // tengah"
        for ($i = $hlm_aktif - $samping_hlm_aktif; $i <= $hlm_aktif + $samping_hlm_aktif; $i++) {
            $active = $i == $hlm_aktif ? "active" : "";
            $pagination .= "<li class='page-item'><a class='page-link {$active}' href='{$i}'>{$i}</a></li>";
        }
    } elseif ($hlm_aktif > $tot_hlm - ($limit - 1)) { // dekat dengan akhr
        for ($i = $tot_hlm - ($limit - 1); $i <= $tot_hlm; $i++) {
            $active = $i == $hlm_aktif ? "active" : "";
            $pagination .= "<li class='page-item'><a class='page-link {$active}' href='{$i}'>{$i}</a></li>";
        }
    }

    if ($hlm_aktif <= $tot_hlm - ($limit - 1)) {
        $pagination .= $dot_pages;
        $pagination .= $last_page;
    }
}

// tombol next
if ($hlm_aktif < $tot_hlm) {
    $pagination .= "<li class='page-item'><a class='page-link' href='{$next}' aria-label='Next' >
    <span aria-hidden='true'>&raquo;</span>
    </a></li>";
}


