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

    window.location.href = 'profile';
     
    
}

function toggleDataVisibility(bookId) {
    var checkbox = document.getElementById('ShowDataCheckBox_' + bookId);
    var dataContainer = document.getElementById('dataContainer_' + bookId);

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
        }
    });
}

function fetchDataAndDisplay(bookId) {
    fetch('/api/books/' + bookId)
        .then(response => response.json())
        .then(book => {
            var dataContainer = document.getElementById('dataContainer_' + bookId);
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

            dataContainer.style.display = 'block';
        })
        .catch(error => {
            console.error('Error:', error);
        });
}


function submitRating(bookId){
    const form = document.getElementById('ratingForm')
    const getform = new FormData(form)
    const rating = getform.get('rating')



    if(!rating){
        Swal.fire('Error', 'pilih ratting', 'error')
        return
    }


    fetch(`/rating/${bookId}` ,{
        method: 'POST',
        headers : {
            'Content-Type' : 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name= "csrf-token"]').getAttribute('content')
        },
        body: JSON.stringify({rating:rating})
        
    })

    .then(response => {
        if(!response.ok){
            throw new Error('Network response was not ok')
        }
        return response.json()
    })

    .then(data => {
        if(data.success){
            window.location.href = '/layout/peminjam'
        }else{
            Swal.fire('error', 'rating error coba lagi nanti', 'error')
        }

    })

    .catch(error => {
        Swal.fire('error', 'an error occurred', 'error')
    })

}



function editPetugas(bookID){
    window.location.href = `/layout/home/petugas/${bookID}/edit`
}

function createPinjam(bookId){
    window.location.href =`/home/${bookId}/buku/createPinjam`
}

function baca(button){
    const bookId = button.getAttribute('data-book-id')
    window.location.href = `/home/${bookId}/buku/BacaBuku`
}


function bacas(){
    window.location.href = `/layout/home/${Book}/buku/editBaca`
}

function EditBukuPengaturan(button){
    const bookId = button.getAttribute('data-book-id')
    window.location.href = `/layout/home/${bookId}/buku/editBaca`;
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
