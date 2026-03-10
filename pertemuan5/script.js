function cekNilai() {
    const nim = document.getElementById('nim').value.trim();
    const nilai = document.getElementById('nilai').value;

    if (nim === '') {
        document.getElementById('hasil').innerHTML = '<span class="error">⚠️ NIM tidak boleh kosong!</span>';
        return;
    }
    if (nilai === '') {
        document.getElementById('hasil').innerHTML = '<span class="error">⚠️ Nilai tidak boleh kosong!</span>';
        return;
    }

    const angka = Number(nilai);

    if (isNaN(angka) || angka < 0 || angka > 100) {
        document.getElementById('hasil').innerHTML = '<span class="error">❌ Nilai tidak valid!</span>';
        return;
    }

    let hurufMutu = '';
    if (angka >= 80 && angka <= 100) hurufMutu = 'A';
    else if (angka >= 70) hurufMutu = 'B';
    else if (angka >= 60) hurufMutu = 'C';
    else if (angka >= 50) hurufMutu = 'D';
    else hurufMutu = 'E';

    document.getElementById('hasil').innerHTML = `
        <div class="grade">
            <div><span>NIM</span> : ${nim}</div>
            <div><span>Nilai</span> : ${angka}</div>
            <div><span>Huruf Mutu</span> : <strong>${hurufMutu}</strong></div>
        </div>
    `;
}