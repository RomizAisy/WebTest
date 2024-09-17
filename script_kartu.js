const nama = document.getElementById('nama');
const submitBtn = document.getElementById('submitBtn');


function test(){
    outputNama.innerHTML = nama.value;
    localStorage.setItem('Data', nama);
    return ; 
}

window.addEventListener('load', () => {
    const data = localStorage.getItem('Data');

    document.getElementById('namaTExtField').innerHTML = data;
});
