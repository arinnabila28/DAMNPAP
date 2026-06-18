<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: Arial, sans-serif; font-size: 11px; background: #f0f0f0; padding: 15px; }
        .tombol-cetak { text-align: center; margin-bottom: 15px; }
        .tombol-cetak button { background-color: #dc3545; color: white; border: none; padding: 10px 30px; font-size: 14px; border-radius: 4px; cursor: pointer; margin: 0 5px; }
        .tombol-cetak button.btn-kembali { background-color: #6c757d; }
        .judul-halaman { text-align: center; margin-bottom: 15px; font-size: 14px; font-weight: bold; }
        
        .grid-label { display: grid; grid-template-columns: repeat(2, 1fr); gap: 10px; max-width: 19cm; margin: 0 auto; }
        
        /* Desain Kartu Member */
        .label-member { background: white; border: 2px solid #1a3a5c; border-radius: 6px; padding: 0; min-height: 4.5cm; page-break-inside: avoid; overflow: hidden; display: flex; flex-direction: column;}
        .label-header { background-color: #1a3a5c; color: white; text-align: center; padding: 8px; font-size: 12px; font-weight: bold; letter-spacing: 1px; }
        .label-body { padding: 12px; flex-grow: 1;}
        .label-nama { font-size: 16px; font-weight: bold; color: #1a3a5c; margin-bottom: 8px; text-transform: uppercase; border-bottom: 1px solid #ccc; padding-bottom: 5px;}
        .label-row { display: flex; margin-bottom: 4px; line-height: 1.4; }
        .label-key { font-weight: bold; min-width: 60px; color: #555; flex-shrink: 0; }
        .label-sep { margin: 0 4px; flex-shrink: 0; }
        .label-val { color: #111; word-break: break-word; }
        .label-footer { background-color: #f8f8f8; text-align: center; padding: 5px; font-size: 9px; color: #666; border-top: 1px solid #ddd;}

        @media print {
            body { background: white; padding: 5mm; }
            .tombol-cetak, .judul-halaman { display: none; }
            .grid-label { gap: 6mm; max-width: 100%; }
            .label-member { border: 1.5pt solid #1a3a5c; break-inside: avoid; }
            .label-header { background-color: #1a3a5c !important; color: white !important; -webkit-print-color-adjust: exact; print-color-adjust: exact; }
            .label-footer { background-color: #f8f8f8 !important; -webkit-print-color-adjust: exact; print-color-adjust: exact; }
        }
    </style>
</head>
<body>

    <div class="tombol-cetak">
        <button onclick="window.print()">&#128438; Cetak / Simpan PDF</button>
        <button class="btn-kembali" onclick="window.close()">&#10006; Tutup</button>
    </div>

    <div class="judul-halaman">
        Kartu Member &mdash; Dicetak: <?= date('d F Y, H:i') ?> WIB
    </div>

    <div class="grid-label">
        <?php foreach($members as $member): ?>
        <div class="label-member">
            <div class="label-header">
                &#128179; KARTU ANGGOTA PERPUSTAKAAN
            </div>
            <div class="label-body">
                <div class="label-nama">
                    <?= $member['name_member'] ?? 'Tanpa Nama' ?>
                </div>
                <div class="label-row">
                    <span class="label-key">Email</span><span class="label-sep">:</span>
                    <span class="label-val"><?= $member['email_member'] ?? '-' ?></span>
                </div>
                <div class="label-row">
                    <span class="label-key">Kontak</span><span class="label-sep">:</span>
                    <span class="label-val"><?= $member['contact_member'] ?? '-' ?></span>
                </div>
                <div class="label-row">
                    <span class="label-key">Status</span><span class="label-sep">:</span>
                    <span class="label-val"><strong><?= strtoupper($member['status_member'] ?? '-') ?></strong></span>
                </div>
            </div>
            <div class="label-footer">
                LIBRARY INFORMATION SYSTEM &mdash; Berlaku selama menjadi anggota aktif
            </div>
        </div>
        <?php endforeach; ?>
    </div>

</body>
</html>