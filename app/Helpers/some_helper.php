<?php
function Tampilan($halaman, $data = [])
{
    $layout = [
        'judul' => 'Admin'
    ];
    echo view('layouts/v_header');

    echo view('layouts/v_sidebar', $layout);
    echo view('layouts/v_topbar');
    echo view($halaman, $data);
    echo view('layouts/v_footer');
}
