<?php
$get = mysqli_query($koneksi, "SELECT * FROM detail_pesanan p. produk pr, pelanggan pl WHERE p.id_produk=pr.id_produk And id_pesanan='$idp'");
$i = 1;
while ($ap = mysqli_fetch_array($getview))
{
$qty = $ap['qty'];
$harga = $ap['harga'];
$namaproduk = $ap['nama_produk'];
$subtotal = $qty * $harga;
?>
><tr>
<td><?= $i++; ?></td>
<td><?= $namaproduk; ?> (<?= $deskripsi;  ?>)</td>
<td>Rp.<?= number_format($harga); ?></td>
<td><?= number_format($qty);  ?></td>
<td>Rp.<?= number_format($subtotal);  ?></td>
<td>Edit | Delete</td>
</tr>
<?php
}; //end of wile
?>