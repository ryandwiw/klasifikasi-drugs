@extends('layouts.AuthLayouts')

@section('isi')
    <div class="container mt-5 mb-2">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2 class="text-center">Tentang Kami</h2>
                <p class="mt-3" style="text-align: justify;">
                    Kami adalah tim pengembang yang membuat aplikasi untuk melakukan prediksi jenis obat berdasarkan
                    beberapa atribut menggunakan metode Machine Learning Naive Bayes.
                </p>
                <p style="text-align: justify;">
                    Aplikasi ini memungkinkan pengguna untuk memasukkan beberapa atribut seperti usia, jenis kelamin,
                    tekanan darah, kolesterol, dan rasio Na ke K dalam darah. Kemudian, berdasarkan atribut-atribut ini,
                    aplikasi akan memprediksi jenis obat yang sesuai menggunakan model Naive Bayes yang telah kami latih
                    sebelumnya.
                </p>
                <p style="text-align: justify;">
                    Ada 5 Label atau Kelas dalam Klasifikasi Drugs, yaitu Drug X, Drug Y , Drug A, Drug B, dan Drug C
                </p>
                <p style="text-align: justify;">
                    DrugX adalah jenis obat yang diresepkan untuk kondisi-kondisi tertentu. Misalnya, analgesik adalah obat
                    yang sering digunakan untuk meredakan nyeri, sementara antipyretic membantu menurunkan demam. Di sisi
                    lain, DrugY memiliki penggunaan klinis yang berbeda. Contohnya, diuretik membantu tubuh mengeluarkan
                    kelebihan cairan, sementara antiemetik berguna untuk mengurangi mual dan muntah.
                </p>
                <p style="text-align: justify;">
                    Berikut adalah beberapa contoh spesifik dari kedua jenis obat ini. DrugA, yang termasuk dalam kategori
                    analgesik, adalah solusi untuk meredakan nyeri, termasuk obat-obatan seperti Ibuprofen dan
                    Acetaminophen. DrugB, di sisi lain, termasuk dalam kelompok antibiotik dan digunakan untuk mengobati
                    infeksi bakteri seperti Amoxicillin dan Doxycycline. Sedangkan DrugC, yang termasuk dalam
                    antihipertensi, membantu menurunkan tekanan darah, dengan contoh obat seperti Lisinopril dan Amlodipine.
                </p>
                <p style="text-align: justify;">
                    Dengan menggunakan aplikasi ini, pengguna dapat dengan cepat mengetahui jenis obat yang sesuai
                    berdasarkan kondisi kesehatan mereka.
                </p>
            </div>
        </div>
    </div>
@endsection
