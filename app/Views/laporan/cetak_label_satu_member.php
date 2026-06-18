<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Kartu — <?= $member['name_member'] ?? 'Member' ?></title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: Arial, sans-serif; background: #f0f0f0; display: flex; flex-direction: column; align-items: center; padding: 20px; }
        
        .tombol-cetak { display: flex; gap: 10px; margin-bottom: 20px; }
        .tombol-cetak button { padding: 10px 25px; font-size: 13px; border: none; border-radius: 4px; cursor: pointer; color: white; }
        .btn-print  { background-color: #dc3545; }
        .btn-close  { background-color: #6c757d; }
        
        .info-cetak { font-size: 11px; color: #666; margin-bottom: 20px; text-align: center; }

        /* Desain Kartu Tunggal (Lebih Besar) */
        .label-member { background: white; border: 2px solid #1a3a5c; border-radius: 8px; width: 10cm; min-height: 6cm; padding: 0; box-shadow: 0 4px 10px rgba(0,0,0,0.15); overflow: hidden; display: flex; flex-direction: column;}
        .label-header { background-color: #1a3a5c; color: white; text-align: center; padding: 10px; font-size: 14px; font-weight: bold; letter-spacing: 1px; }
        .label-body { padding: 20px; flex-grow: 1; }
        .label-nama { font-size: 20px; font-weight: bold; color: #1a3a5c; margin-bottom: 12px; text-transform: uppercase; border-bottom: 2px solid #ccc; padding-bottom: 8px; text-align: center;}
        .label-row { display: flex; margin-bottom: 6px; font-size: 13px; line-height: 1.5; }
        .label-key { font-weight: bold; min-width: 70px; color: #555; flex-shrink: 0; }
        .label-sep { margin: 0 6px; flex-shrink: 0; }
        .label-val { color: #111; }
        .label-footer { background-color: #f8f8f8; text-align: center; padding: 8px; font-size: 10px; color: #666; border-top: 1px solid #ddd;}

        @media print {
            body { background: white; padding: 10mm; justify-content: flex-start; }
            .tombol-cetak, .info-cetak { display: none; }
            .label-member { box-shadow: none; border: 2pt solid #1a3a5c; width: 9cm;}
            .label-header { background-color: #1a3a5c !important; color: white !important; -webkit-print-color-adjust: exact; print-color-adjust: exact; }
            .label-footer { background-color: #f8f8f8 !important; -webkit-print-color-adjust: exact; print-color-adjust: exact; }
        }
    </style>
</head>
<body>

    <div class="tombol-cetak">
        <button class="btn-print" onclick="window.print()">&#128438; Cetak / Simpan PDF</button>
        <button class="btn-close" onclick="window.close()">&#10006; Tutup</button>
    </div>

    <div class="info-cetak">
        Kartu Anggota &mdash; Dicetak: <?= date('d F Y, H:i') ?> WIB
    </div>

    <div class="label-member">
        <div class="label-header">
            &#128179; KARTU ANGGOTA PERPUSTAKAAN
        </div>
        
        <div class="label-body">
            <div class="label-nama">
                <?= $member['name_member'] ?? 'Tanpa Nama' ?>
            </div>
            <div class="label-row">
                <span class="label-key">Email</span>
                <span class="label-sep">:</span>
                <span class="label-val"><?= $member['email_member'] ?? '-' ?></span>
            </div>
            <div class="label-row">
                <span class="label-key">Kontak</span>
                <span class="label-sep">:</span>
                <span class="label-val"><?= $member['contact_member'] ?? '-' ?></span>
            </div>
            <div class="label-row">
                <span class="label-key">Status</span>
                <span class="label-sep">:</span>
                <span class="label-val"><strong><?= strtoupper($member['status_member'] ?? '-') ?></strong></span>
            </div>
        </div>

        <div class="label-footer">
            LIBRARY INFORMATION SYSTEM &mdash; Berlaku selama menjadi anggota aktif
        </div>
    </div>
</body>
</html>