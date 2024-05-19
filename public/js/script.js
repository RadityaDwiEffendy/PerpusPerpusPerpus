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

function akun(){
    {{ route('admin.akun') }}
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


function link(){
    window.location.href = 'https://www.youtube.com/'
}

const url =  "{{ $book->url }}"

function setting(url){
    window.location.href = url
}
