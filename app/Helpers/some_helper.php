<?php
function Tampilan($halaman, $data = [])
{
    echo view('layouts/v_header');

    echo view('layouts/v_sidebar');
    echo view('layouts/v_topbar');
    echo view($halaman, $data);
    echo view('layouts/v_footer');
}
