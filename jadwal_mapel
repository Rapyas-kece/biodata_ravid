<?php
$nama_panggilan = "Ravid";
$tahun_sekarang = (int)date('Y');

$jam_label = [
  1  => "07.00–07.45",
  2  => "07.45–08.30",
  3  => "08.30–09.15",
  4  => "09.15–10.00",
  5  => "10.15–11.00",
  6  => "11.00–11.45",
  7  => "12.30–13.15",
  8  => "13.15–14.00",
  9  => "14.00–14.45",
  10 => "14.45–15.30",
];

$jadwal = [
  "Senin"  => ["MTK","MTK","SJR","SJR","PABP","PABP","BNG","BNG","BIN","BIN"],
  "Selasa" => ["IPAS","IPAS","IPAS","IPAS","PPS","PPS","BJW","BJW","SNM","SNM"],
  "Rabu"   => ["INF","INF","INF","INF","PGD","PGD","KKA","KKA","GIM","GIM"],
  "Kamis"  => ["POR","POR","SJR","SJR","BNG","BNG","MTK","MTK","BIN","BIN"],
  "Jumat"  => ["PGD","PGD","IPAS","IPAS","PGD","PGD","","","",""],
];

// warna tiap mapel: [bg, text]
$warna = [
  "MTK"  => ["#1a2e1a","#4ade80"],
  "SJR"  => ["#2e1a1a","#f87171"],
  "PABP" => ["#2a1e10","#fb923c"],
  "BNG"  => ["#1a1f2e","#60a5fa"],
  "BIN"  => ["#1e1a2e","#a78bfa"],
  "IPAS" => ["#1a2a28","#34d399"],
  "PPS"  => ["#2e2a1a","#fbbf24"],
  "BJW"  => ["#2e1a28","#f472b6"],
  "SNM"  => ["#251a2e","#c084fc"],
  "INF"  => ["#1a2230","#38bdf8"],
  "PGD"  => ["#1f2a1a","#86efac"],
  "KKA"  => ["#2e261a","#fcd34d"],
  "GIM"  => ["#2e1a20","#fb7185"],
  "POR"  => ["#1a2e2a","#2dd4bf"],
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Jadwal Mapel – <?= $nama_panggilan ?></title>
<link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;700&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
<style>
* { margin:0; padding:0; box-sizing:border-box; }
body { background:#111; color:#ddd; font-family:'Inter',sans-serif; font-size:14px; line-height:1.6; }
.page { max-width: 900px; margin:0 auto; padding:40px 20px 60px; }

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

.tbl-wrap { overflow-x:auto; border:1px solid #1e1e1e; border-radius:6px; }
table { width:100%; border-collapse:collapse; font-size:12px; min-width:640px; }
thead { background:#151515; }
th {
  padding:9px 10px; font-family:'JetBrains Mono',monospace; font-size:10px;
  color:#555; text-align:center; border-bottom:1px solid #1e1e1e; letter-spacing:.08em;
}
th:first-child { text-align:left; min-width:120px; }
td { padding:7px 8px; border-bottom:1px solid #181818; text-align:center; vertical-align:middle; }
td:first-child { text-align:left; color:#444; font-family:'JetBrains Mono',monospace; font-size:10px; }
tr:last-child td { border-bottom:none; }
tr:hover td { background:rgba(255,255,255,.015); }

.chip {
  display:inline-block; padding:3px 8px; border-radius:3px;
  font-family:'JetBrains Mono',monospace; font-size:11px; font-weight:700;
}
.empty { color:#2a2a2a; font-family:'JetBrains Mono',monospace; font-size:11px; }
</style>
</head>
<body>
<div class="page">

  <nav class="nav">
    <a href="index.php">Biodata</a>
    <a href="jadwal_mapel.php" class="active">Jadwal Mapel</a>
    <a href="jadwal_piket.php">Jadwal Piket</a>
  </nav>

  <h1>Jadwal Pelajaran</h1>
  <div class="sub">X PPLG 2 &nbsp;·&nbsp; Senin – Jumat &nbsp;·&nbsp; Jam 1–10</div>

  <div class="section-title">Tabel Jadwal</div>
  <div class="tbl-wrap">
    <table>
      <thead>
        <tr>
          <th>Jam</th>
          <?php foreach (array_keys($jadwal) as $h): ?><th><?= $h ?></th><?php endforeach; ?>
        </tr>
      </thead>
      <tbody>
        <?php for ($j = 1; $j <= 10; $j++): ?>
        <tr>
          <td>
            Jam <?= $j ?><br>
            <span style="color:#333"><?= $jam_label[$j] ?></span>
          </td>
          <?php foreach ($jadwal as $mapels):
            $m = $mapels[$j-1] ?? '';
            $bg = '#1a1a1a'; $fg = '#444';
            if (isset($warna[$m])) [$bg, $fg] = $warna[$m];
          ?>
          <td>
            <?php if ($m): ?>
              <span class="chip" style="background:<?= $bg ?>;color:<?= $fg ?>"><?= $m ?></span>
            <?php else: ?>
              <span class="empty">–</span>
            <?php endif; ?>
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
