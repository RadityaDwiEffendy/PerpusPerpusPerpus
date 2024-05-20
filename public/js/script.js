function profile(){
    window.location.href = 'profile'
}

function logout() {
    Swal.fire({
        title: "Konfirmasi Logout",
        text: "Anda yakin ingin keluar?",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Ya, Keluar",
        cancelButtonText: "Batal"
    }).then((result) => {
        if (result.isConfirmed) {
            
            window.location.href = '/';
        }else{
            window.location.href = 'profile';
        }
    });
}



function BuatAKun(){
    window.location.href = 'buatakun/buata'
}


function adminprof(){

    Swal.fire({
        title: "Masukkan password Admin",
        input: "password",
        inputAttributes: {
            autocapitalize: "off"
        },
        showCancelButton: true,
        confirmButtonText: "Konfirmasi",
        showLoaderOnConfirm: true,
        preConfirm: async (password) => {
            if (password === "admin") {
                window.location.href = 'profile';
            } else {
                Swal.fire({
                    icon: "error",
                    title: "Kata sandi salah!",
                    text: "Anda bukan seorang admin.",
                    showConfirmButton: false,
                    timer: 2000
                }).then(() => {
                    window.location.href = '/';
                });
            }
        }
    });
     
    
}

function toggleDataVisibility(bookId) {
    var checkbox = document.getElementById('ShowDataCheckBox_' + bookId);
    var dataContainer = document.getElementById('dataContainer');

    localStorage.setItem('DataVisibility_' + bookId, checkbox.checked);

    if (checkbox.checked) {
        fetchDataAndDisplay(bookId); 
    } else {
        dataContainer.style.display = 'none'; 
    }
}

window.onload = function() {
    var checkboxes = document.querySelectorAll('[id^="ShowDataCheckBox_"]');
    checkboxes.forEach(function(checkbox) {
        var bookId = checkbox.value;
        var DataVisibility = localStorage.getItem('DataVisibility_' + bookId);

        if (DataVisibility === 'true') {
            checkbox.checked = true;
            fetchDataAndDisplay(bookId);
        } else {
            checkbox.checked = false;
            var dataContainer = document.getElementById('dataContainer_' + bookId);
            if (dataContainer) {
                dataContainer.style.display = 'none';
            }
        }
    });
}



function fetchDataAndDisplay(bookId) {
    fetch('/api/books/' + bookId)
        .then(response => response.json())
        .then(book => {
            var dataContainer = document.getElementById('dataContainer');
            dataContainer.innerHTML = '';

            var html = `
        <div onclick="Buku('${book.id}')" class="bukunya">
            <img src="${book.image_url}" alt="">
            <div class="judull">
                <h2>${book.judul}</h2>
            </div>
            <div class="desc">
                <p>${book.deskripsi}</p>
            </div>
        </div>`;
            dataContainer.innerHTML += html;

        })
        .catch(error => {
            console.error('error', error);
        });
}




function editBuku(bookID) {
    window.location.href = `/layout/home/${bookID}/buku`;
}
function Buku(bookID) {
    window.location.href = `/home/${bookID}$/buku`;
}

function editawal(){
    window.location.href = ''
}

function editB(){
    window.location.href = 'buku/pengaturan'
}


function link(){
    window.location.href = 'https://www.youtube.com/'
}

const url =  "{{ $book->url }}"

function setting(url){
    window.location.href = url
}
