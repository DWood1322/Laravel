let listSiswa=document .getElementsByTagName("ol");
listSiswa[0].addEventListener("click",tampilkan);

function tampilkan(event){
    alert("cek data siswa"+ event.target.innerHTML);
}