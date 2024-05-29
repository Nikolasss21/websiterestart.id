<?php include 'navbar.php'; ?>
<?php
include 'include/config.php';

$query = "SELECT * FROM devisi";
$result = mysqli_query($conn, $query);

// Check for query execution error
if (!$result) {
    die("Error: " . mysqli_error($conn));
}

// Fetch the data and store it in the $divisi variable
$divisi = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<div class="baner">
    <h1>PR PMII RESTART</h1>
    <h2>PENGURUS RAYON PERGERAKAN MAHASISWA ISLAM INDONESIA</h2>
    <H3>REVOLUSI SATUAN AREK RAYON TEKNIK</H3>
    <h3>Diresmikan pada tanggal 05 Januari 2011</h3>
</div>

<div class="divisi" id="dev-p1">
    <h2>BIRO RESTART</h2>
    <h3>Pembagian BIRO RESTART</h3>
    <div class="pro-cont">
        <?php foreach ($divisi as $row) : ?>
            <div class="dev">
                <img src="admin/img/devisi/<?php echo $row['gambar']; ?>">
                <div class="des">
                    <span><?php echo $row['nama_devisi']; ?></span>
                    <h5><?php echo $row['deskripsi']; ?></h5>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<div class="baner1" id="dev-p2">
    <h2>HELLO SAHABAT/I</h2>
    <h4>PR PMII RESTART</h4>
</div>

<?php include 'footer.php'; ?>
<script src="scrip.js"></script>
</body>
</html>
