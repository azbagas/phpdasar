const keyword = document.getElementById('keyword');
const tombolCari = document.getElementById('tombol-cari');
const container = document.getElementById('container');

keyword.addEventListener('keyup', () => {
    // Buat object ajax
    let xhr = new XMLHttpRequest();

    // Cek kesiapan ajax
    xhr.onreadystatechange = () => {
        if (xhr.readyState == 4 && xhr.status == 200) {
            container.innerHTML = xhr.responseText;
        }
    }

    // Eksekusi ajax (request ke sana setiap kali keyup)
    xhr.open('GET', 'ajax/students.php?keyword=' + keyword.value, true);
    xhr.send();
});