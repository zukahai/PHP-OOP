<?php
    include "ProductManagement.php";
    $ps = new ProductManagement();
    $ps->add(new Product(1, "2", "4", "sss"));
    $ps->add(new Product(1, "2", "4", "sss"));
    $ps->add(new Product(1, "2", "4", "sss"));
    $ps->add(new Product(1, "2", "4", "sss"));
    $ps->display();
?>