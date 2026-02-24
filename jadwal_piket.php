<?php
$nama_panggilan = "Ravid";
$nama_sendiri   = "Ravid"; // yang di-highlight

$piket = [
  "Senin"  => ["Cindy","Rasya","Nata","Yusuf","Tsabita","Habibi","Naila","Kartika"],
  "Selasa" => ["Keisha","Nail","Shafanira","Wahyu","Aurora","Sila","Syauqi"],
  "Rabu"   => ["Anin","Shifa","Dzaky","Tania","Vino","Fasya","Eka"],
  "Kamis"  => ["Aida","Ibnu","Maharani","Tegar","Alya","Denia","Ravid"],
  "Jumat"  => ["Aqila","Raka","Alais","Rahyan","Gendhis","Cloudya","Aziz"],
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Jadwal Piket – <?= $nama_panggilan ?></title>
<link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;700&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
<style>
* { margin:0; padding:0; box-sizing:border-box; }
body { background:#111; color:#ddd; font-family:'Inter',sans-serif; font-size:14px; line-height:1.6; }
.page { max-width: 760px; margin:0 auto; padding:40px 20px 60px; }

.nav { display:flex; gap:8px; margin-bottom:40px; font-family:'JetBrains Mono',monospace; font-size:12px; }
.nav a { padding:6px 14px; border:1px solid #2e2e2e; border-radius:4px; color:#888; text-decoration:none; transition:all .15s; }
.nav a:hover, .nav a.active { border-color:#5afa8d; color:#5afa8d; }

h1 { font-size:20px; font-weight:700; color:#fff; margin-bottom:4px; }
.sub { font-family:'JetBrains Mono',monospace; font-size:11px; color:#555; margin-bottom:28px; }

.section-title {
  font-family:'JetBrains Mono',monospace; font-size:11px; color:#5afa8d;
  text-transform:uppercase; letter-spacing:.12em; margin-bottom:14px;
  padding-bottom:8px; border-bottom:1px solid #1e1e1e;
}

/* Kartu grid */
.kartu-grid { display:grid; grid-template-columns:repeat(5, 1fr); gap:10px; margin-bottom:36px; }
.kartu { background:#161616; border:1px solid #1e1e1e; border-radius:6px; padding:14px; }
.kartu-day {
  font-family:'JetBrains Mono',monospace; font-size:10px; color:#5afa8d;
  letter-spacing:.1em; text-transform:uppercase; margin-bottom:10px;
}
.kartu-name { font-size:12px; color:#aaa; padding:4px 0; border-bottom:1px solid #1a1a1a; }
.kartu-name:last-child { border-bottom:none; }
.kartu-name.me { color:#5afa8d; font-weight:600; }
.kartu-name.me::before { content:"★ "; }

/* Tabel */
.tbl-wrap { overflow-x:auto; border:1px solid #1e1e1e; border-radius:6px; }
table { width:100%; border-collapse:collapse; font-size:13px; }
thead { background:#151515; }
th {
  padding:9px 12px; font-family:'JetBrains Mono',monospace; font-size:10px;
  color:#555; text-align:center; border-bottom:1px solid #1e1e1e; letter-spacing:.08em;
}
th:first-child { width:40px; }
td { padding:9px 12px; border-bottom:1px solid #181818; text-align:center; color:#aaa; }
tr:last-child td { border-bottom:none; }
.me-cell { color:#5afa8d; font-weight:600; }
.no-cell { font-family:'JetBrains Mono',monospace; font-size:11px; color:#333; }

@media (max-width:600px) { .kartu-grid { grid-template-columns:1fr 1fr; } }
@media (max-width:380px) { .kartu-grid { grid-template-columns:1fr; } }
</style>
</head>
<body>
<div class="page">

  <nav class="nav">
    <a href="index.php">Biodata</a>
    <a href="jadwal_mapel.php">Jadwal Mapel</a>
    <a href="jadwal_piket.php" class="active">Jadwal Piket</a>
  </nav>

  <h1>Jadwal Piket</h1>
  <div class="sub">X PPLG 2 &nbsp;·&nbsp; <span style="color:#5afa8d">★</span> = kamu</div>

  <!-- Kartu per hari -->
  <div class="section-title">Per Hari</div>
  <div class="kartu-grid">
    <?php foreach ($piket as $hari => $anggota): ?>
    <div class="kartu">
      <div class="kartu-day"><?= $hari ?></div>
      <?php foreach ($anggota as $a): ?>
      <div class="kartu-name <?= ($a === $nama_sendiri) ? 'me' : '' ?>"><?= $a ?></div>
      <?php endforeach; ?>
    </div>
    <?php endforeach; ?>
  </div>

  <!-- Tabel -->
  <div class="section-title">Tabel Lengkap</div>
  <div class="tbl-wrap">
    <table>
      <thead>
        <tr>
          <th>No</th>
          <?php foreach (array_keys($piket) as $h): ?><th><?= $h ?></th><?php endforeach; ?>
        </tr>
      </thead>
      <tbody>
        <?php
        $max = max(array_map('count', $piket));
        $haris = array_keys($piket);
        for ($i = 0; $i < $max; $i++): ?>
        <tr>
          <td class="no-cell"><?= $i+1 ?></td>
          <?php foreach ($haris as $h):
            $nm = $piket[$h][$i] ?? '—'; ?>
          <td class="<?= ($nm === $nama_sendiri) ? 'me-cell' : '' ?>">
            <?= ($nm === $nama_sendiri) ? '★ '.$nm : $nm ?>
          </td>
          <?php endforeach; ?>
        </tr>
        <?php endfor; ?>
      </tbody>
    </table>
  </div>

</div>
</body>
</html>
