<?php
if ($_POST['Submit'] == "Submit") {
    $id_kue=$_POST['id_kue'];
    $nomor=$_POST['nomor'];
    $jumlah=$_POST['jumlah'];
    
    include "koneksistok.php";  
    $num = mysqli_affected_rows($connect);  
    $selSto =mysqli_query($connect, "SELECT * FROM tb_kue WHERE id='$id_kue'");
    $sto=mysqli_fetch_array($selSto);
    $stok=$sto['stok'];
    //menghitung sisa stok
    $sisa=$stok-$jumlah;
    
    if ($stok < $jumlah) {
        ?>
        <script language="JavaScript">
            alert('Oops! Jumlah pengeluaran lebih besar dari stok ...');
        </script>
        <?php
    }
    //proses    
    else{
        $insert =mysqli_query($connect, "INSERT INTO tb_out (id_kue, nomor, jumlah) VALUES ('$id_kue', '$nomor', '$jumlah')");
            if($insert){
                //update stok
                $upstok= mysqli_query($connect, "UPDATE tb_kue SET stok='$sisa' WHERE id='$id_kue'");
                ?>
                <script language="JavaScript">
                    alert('Good! Input transaksi barang berhasil ...');
                    document.location='./form_pesan.php';
                </script>
                <?php
            }
            else {
                echo "<div><b>Oops!</b> 404 Error Server.</div>";
            }
    }
    }
?>