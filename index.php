<?php
$nama_lengkap    = "Ravidya Satrio Adi";
$nama_panggilan  = "Ravid";
$agama           = "Islam";
$tempat_lahir    = "Pati";
$tanggal_lahir   = 21;
$bulan_lahir     = 3;
$tahun_lahir     = 2010;
$alamat          = "Jalan Purwomukti Dalam 4, RT 3 RW 7, No. 1A";
$gender          = "Laki-laki";
$kewarganegaraan = "Indonesia";
$no_wa           = "082323876648";
$email           = "ravidya.satrioadi@gmail.com";
$foto            = "fotogua.jpg";
$motto           = "Selagi doa ibu masih berjalan, janganlah berhenti untuk mencoba.";

$tahun_sekarang  = (int)date('Y');
$umur            = $tahun_sekarang - $tahun_lahir;
$tahun_10        = $tahun_sekarang + 10;
$umur_10         = $umur + 10;

$hobi = [
    "Belajar Cyber Security",
    "Bermain Game",
    "Membaca Buku",
    "Coding"
];

$skills = [
    ["nama" => "HTML",      "level" => 90],
    ["nama" => "CSS",       "level" => 70],
    ["nama" => "PHP",       "level" => 65],
    ["nama" => "Python",    "level" => 70],
    ["nama" => "Nmap",      "level" => 50],
    ["nama" => "Wireshark", "level" => 60],
];

$makanan = ["Spageti", "Mie Ayam", "Ayam Goreng"];
$minuman = ["Es Teh", "Es Cincau", "Air Putih"];

$pendidikan = [
    ["SD",  "SDN Pedurungan Lor 02", 2017, 2022],
    ["MTs", "MTsN 02 Semarang",      2023, 2025],
    ["SMK", "SMK (sekarang)",        2025, "Sekarang"],
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Biodata – <?= $nama_panggilan ?></title>
<link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;700&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
<style>
* { margin:0; padding:0; box-sizing:border-box; }

body {
  background: #111;
  color: #ddd;
  font-family: 'Inter', sans-serif;
  font-size: 14px;
  line-height: 1.6;
}

a { color: inherit; text-decoration: none; }

.page { max-width: 720px; margin: 0 auto; padding: 40px 20px 60px; }

/* ── NAV ── */
.nav {
  display: flex;
  gap: 8px;
  margin-bottom: 40px;
  font-family: 'JetBrains Mono', monospace;
  font-size: 12px;
}
.nav a {
  padding: 6px 14px;
  border: 1px solid #2e2e2e;
  border-radius: 4px;
  color: #888;
  transition: all .15s;
}
.nav a:hover, .nav a.active {
  border-color: #5afa8d;
  color: #5afa8d;
}

/* ── PROFILE ── */
.profile {
  display: flex;
  gap: 24px;
  align-items: flex-start;
  margin-bottom: 32px;
  padding-bottom: 32px;
  border-bottom: 1px solid #1e1e1e;
}
.profile img {
  width: 90px;
  height: 110px;
  object-fit: cover;
  object-position: top center;
  border-radius: 6px;
  border: 1px solid #2a2a2a;
  flex-shrink: 0;
}
.profile-text h1 {
  font-size: 22px;
  font-weight: 700;
  color: #fff;
  margin-bottom: 4px;
}
.profile-text .sub {
  font-family: 'JetBrains Mono', monospace;
  font-size: 11px;
  color: #555;
  margin-bottom: 12px;
}
.tags { display: flex; flex-wrap: wrap; gap: 6px; }
.tag {
  font-family: 'JetBrains Mono', monospace;
  font-size: 11px;
  padding: 3px 10px;
  border-radius: 3px;
  background: #1a1a1a;
  border: 1px solid #2a2a2a;
  color: #888;
}

/* ── SECTION ── */
.section { margin-bottom: 32px; }
.section-title {
  font-family: 'JetBrains Mono', monospace;
  font-size: 11px;
  color: #5afa8d;
  text-transform: uppercase;
  letter-spacing: .12em;
  margin-bottom: 14px;
  padding-bottom: 8px;
  border-bottom: 1px solid #1e1e1e;
}

/* ── INFO ROWS ── */
.info-row {
  display: flex;
  gap: 12px;
  padding: 8px 0;
  border-bottom: 1px solid #181818;
  font-size: 13px;
}
.info-row:last-child { border-bottom: none; }
.info-key {
  font-family: 'JetBrains Mono', monospace;
  font-size: 11px;
  color: #555;
  min-width: 130px;
  padding-top: 1px;
}
.info-val { color: #ccc; }

/* ── SKILL ── */
.skill { margin-bottom: 10px; }
.skill-top { display: flex; justify-content: space-between; font-family: 'JetBrains Mono', monospace; font-size: 12px; color: #888; margin-bottom: 5px; }
.skill-top span:last-child { color: #5afa8d; }
.bar-track { height: 3px; background: #1e1e1e; border-radius: 2px; }
.bar-fill { height: 100%; background: #5afa8d; border-radius: 2px; width: 0; transition: width 1s ease; }

/* ── LISTS ── */
/* Hobi – 1 2 3 */
ol.hobi { list-style: none; counter-reset: hc; }
ol.hobi li {
  counter-increment: hc;
  display: flex;
  align-items: center;
  gap: 10px;
  padding: 7px 0;
  border-bottom: 1px solid #181818;
  font-size: 13px;
  color: #ccc;
}
ol.hobi li:last-child { border-bottom: none; }
ol.hobi li::before {
  content: counter(hc);
  font-family: 'JetBrains Mono', monospace;
  font-size: 11px;
  color: #5afa8d;
  min-width: 18px;
}

/* Makanan – kotak ■ */
ul.makanan { list-style: square; list-style-position: inside; }
ul.makanan li {
  padding: 7px 0;
  border-bottom: 1px solid #181818;
  font-size: 13px;
  color: #ccc;
}
ul.makanan li:last-child { border-bottom: none; }
ul.makanan li::marker { color: #fb923c; }

/* Minuman – A B C */
ol.minuman { list-style: none; counter-reset: mc; }
ol.minuman li {
  counter-increment: mc;
  display: flex;
  align-items: center;
  gap: 10px;
  padding: 7px 0;
  border-bottom: 1px solid #181818;
  font-size: 13px;
  color: #ccc;
}
ol.minuman li:last-child { border-bottom: none; }
ol.minuman li::before {
  content: counter(mc, upper-alpha);
  font-family: 'JetBrains Mono', monospace;
  font-size: 11px;
  color: #60a5fa;
  min-width: 18px;
}

/* ── KEINGINAN ── */
.keinginan {
  background: #161616;
  border-left: 2px solid #5afa8d;
  padding: 16px 18px;
  border-radius: 4px;
  font-size: 13px;
  line-height: 1.9;
  color: #bbb;
}
.keinginan b { color: #5afa8d; }

/* ── TABLE ── */
table { width: 100%; border-collapse: collapse; font-size: 13px; }
th {
  text-align: left;
  padding: 8px 12px;
  font-family: 'JetBrains Mono', monospace;
  font-size: 10px;
  color: #555;
  letter-spacing: .1em;
  border-bottom: 1px solid #1e1e1e;
  background: #151515;
}
td { padding: 9px 12px; border-bottom: 1px solid #181818; color: #ccc; }
tr:last-child td { border-bottom: none; }
.bdg {
  font-family: 'JetBrains Mono', monospace;
  font-size: 10px;
  font-weight: 700;
  padding: 2px 7px;
  border-radius: 3px;
}
.bdg-sd  { background:#1a2e1a; color:#4ade80; }
.bdg-mts { background:#1a1f2e; color:#60a5fa; }
.bdg-smk { background:#2e1a28; color:#f472b6; }

/* ── MOTTO ── */
.motto-wrap {
  overflow: hidden;
  border-top: 1px solid #1e1e1e;
  border-bottom: 1px solid #1e1e1e;
  padding: 10px 0;
  margin-bottom: 32px;
}
.motto-track {
  display: inline-block;
  white-space: nowrap;
  animation: scroll 25s linear infinite;
  font-family: 'JetBrains Mono', monospace;
  font-size: 12px;
  color: #444;
}
.motto-track em { color: #777; font-style: normal; }
@keyframes scroll { from { transform: translateX(0); } to { transform: translateX(-50%); } }

/* ── TWO COL ── */
.two { display: grid; grid-template-columns: 1fr 1fr; gap: 32px; }
@media (max-width: 560px) {
  .profile { flex-direction: column; }
  .two { grid-template-columns: 1fr; }
  .info-key { min-width: 100px; }
}
</style>
</head>
<body>
<div class="page">

  <!-- NAV -->
  <nav class="nav">
    <a href="index.php" class="active">Biodata</a>
    <a href="jadwal_mapel.php">Jadwal Mapel</a>
    <a href="jadwal_piket.php">Jadwal Piket</a>
  </nav>

  <!-- PROFILE -->
  <div class="profile">
    <img src="<?= $foto ?>" alt="<?= $nama_panggilan ?>">
    <div class="profile-text">
      <h1><?= $nama_lengkap ?></h1>
      <div class="sub"><?= $tempat_lahir ?>, 21 Maret <?= $tahun_lahir ?> &nbsp;·&nbsp; <?= $umur ?> tahun</div>
      <div class="tags">
        <span class="tag"><?= $gender ?></span>
        <span class="tag"><?= $agama ?></span>
        <span class="tag"><?= $kewarganegaraan ?></span>
        <span class="tag">X PPLG 2</span>
      </div>
    </div>
  </div>

  <!-- MOTTO -->
  <div class="motto-wrap">
    <div class="motto-track">
      <?php for ($i=0;$i<5;$i++) echo '<em>✦</em> ' . htmlspecialchars($motto) . ' &nbsp;&nbsp;&nbsp;'; ?>
      <?php for ($i=0;$i<5;$i++) echo '<em>✦</em> ' . htmlspecialchars($motto) . ' &nbsp;&nbsp;&nbsp;'; ?>
    </div>
  </div>

  <!-- INFO PRIBADI -->
  <div class="section">
    <div class="section-title">Informasi Pribadi</div>
    <?php
    $rows = [
      ["Nama Lengkap",    $nama_lengkap],
      ["Nama Panggilan",  $nama_panggilan],
      ["Jenis Kelamin",   $gender],
      ["Agama",           $agama],
      ["Kewarganegaraan", $kewarganegaraan],
      ["Tempat Lahir",    $tempat_lahir],
      ["Tanggal Lahir",   "21 Maret $tahun_lahir"],
      ["Umur",            "$umur tahun"],
      ["Alamat",          $alamat],
      ["No. WhatsApp",    $no_wa],
      ["Email",           $email],
    ];
    foreach ($rows as $r): ?>
    <div class="info-row">
      <div class="info-key"><?= $r[0] ?></div>
      <div class="info-val"><?= $r[1] ?></div>
    </div>
    <?php endforeach; ?>
  </div>

  <!-- SKILLS & HOBI -->
  <div class="two">
    <div class="section">
      <div class="section-title">Skills</div>
      <?php foreach ($skills as $s): ?>
      <div class="skill">
        <div class="skill-top"><span><?= $s['nama'] ?></span><span><?= $s['level'] ?>%</span></div>
        <div class="bar-track"><div class="bar-fill" data-w="<?= $s['level'] ?>"></div></div>
      </div>
      <?php endforeach; ?>
    </div>
    <div class="section">
      <div class="section-title">Hobi</div>
      <ol class="hobi">
        <?php foreach ($hobi as $h): ?><li><?= $h ?></li><?php endforeach; ?>
      </ol>
    </div>
  </div>

  <!-- MAKANAN & MINUMAN -->
  <div class="two">
    <div class="section">
      <div class="section-title">Makanan Favorit</div>
      <ul class="makanan">
        <?php foreach ($makanan as $m): ?><li><?= $m ?></li><?php endforeach; ?>
      </ul>
    </div>
    <div class="section">
      <div class="section-title">Minuman Favorit</div>
      <ol class="minuman">
        <?php foreach ($minuman as $m): ?><li><?= $m ?></li><?php endforeach; ?>
      </ol>
    </div>
  </div>

  <!-- KEINGINAN -->
  <div class="section">
    <div class="section-title">Keinginan 10 Tahun Lagi</div>
    <div class="keinginan">
      Hai namaku <b><?= $nama_panggilan ?></b>, saat ini tahun <b><?= $tahun_sekarang ?></b>,
      aku adalah <b>pelajar SMK</b> yang berumur <b><?= $umur ?> tahun</b>.
      10 tahun lagi di tahun <b><?= $tahun_10 ?></b>, di umur <b><?= $umur_10 ?> tahun</b>
      aku adalah <b>seorang miliarder</b>.
      Aku ingin <b>membawa kedua orang tuaku ke Makkah</b>.
      Rencana yang akan aku tempuh: <b>membangun bisnis sendiri dari nol dan terus berkembang hingga mencapai kebebasan finansial.</b>
    </div>
  </div>

  <!-- PENDIDIKAN -->
  <div class="section">
    <div class="section-title">Riwayat Pendidikan</div>
    <table>
      <thead>
        <tr><th>Tingkat</th><th>Nama Sekolah</th><th>Mulai</th><th>Lulus</th></tr>
      </thead>
      <tbody>
        <?php foreach ($pendidikan as $p): ?>
        <tr>
          <td><span class="bdg bdg-<?= strtolower($p[0]) ?>"><?= $p[0] ?></span></td>
          <td><?= $p[1] ?></td>
          <td><?= $p[2] ?></td>
          <td><?= $p[3] ?></td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>

</div>

<script>
window.addEventListener('load', () => {
  document.querySelectorAll('.bar-fill').forEach(b => b.style.width = b.dataset.w + '%');
});
</script>
</body>
</html>
