<?php

    $connect = mysqli_connect("localhost", "root", "##Urban2018##", "dts_sertifikat");

    if (mysqli_connect_errno()) {
        echo "koneksi tidak terhubung".mysqli_connect_error();
    }