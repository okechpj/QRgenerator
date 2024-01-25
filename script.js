let qrbox = document.getElementById("qrbox");
let qrtext = document.getElementById("qrtext");
let qrimage = document.getElementById("qrimage");


function generate(){
    //let encodedText = encodeURIComponent(qrtext.value);
    qrimage.src = "https://api.qrserver.com/v1/create-qr-code/?size=150x150&data="+qrtext.value;
}
