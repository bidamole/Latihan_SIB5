let frm = document.getElementById('online');
let produkPilihan = ["TV","AC","Kulkas"];
let pilihproduk = `<option value =""> Pilihan Produk ---<option>`;
for (let p in produkPilihan){
    pilihproduk += `<option value="${produkPilihan[p]}">${produkPilihan[p]}</option>`;
}

frm.produk.innerHTML = pilihproduk;

function transaksi(){
    let nama = frm.nama.value;
    let produk = frm.produk.value;
    let jumblah = frm.jumblah.value;

    let harga;

switch(produk){
    case 'TV' : harga = 2000000; break;
    case 'AC' : harga = 3000000; break;
    case 'Kulkas' : harga = 4000000; break;
    default: harga = 0;
    }

    // harga kotor
    let hargakotor = harga * jumblah;
    // diskon
    let diskon;
    if(produk == 'Kulkas' && jumblah >= 3) diskon = 0.3 * hargakotor;
    else if(produk == 'AC' && jumblah >= 3) diskon = 0.2 * hargakotor;
    else diskon = 0.1 * hargakotor;

    let ppn = (0.1 * hargakotor) - diskon;
    let hargaBayar = (hargakotor - diskon) + ppn;

    swal (`
    Nama Pelanggan : ${nama}
    Produk yang dibeli : ${produk}
    Harga Produk : ${harga}
    Jumblah Produk yang dibeli : ${jumblah}
    `);
}