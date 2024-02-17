function sum(){
    var a = document.getElementById('lokasi').value;
    var b = document.getElementById('harga').value;
    var hasil = parseInt(a) + parseInt(b);

    if(!isNaN(hasil)){
        document.getElementById('akhir').value=hasil;
    }

}