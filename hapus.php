<?php
require 'functions.php';

$id = $_GET["id"];

if (hapus($id) > 0) {
    echo "
            <script>
                alert('data berhasil di hapus');
                document.location.href = 'home.php';
            </script>
        ";
} else {
    echo "
            <script>
                alert('data gagal di hapus');
            </script>
        ";
}
