# Lab11Web

**Nama                     : Nadhia Shafira**

**NIM                      : 312410498**

**Matkul                   : Pemograman Web 1**

**Dosen Pengampu           : 

---

**📖 Pendahuluan**

Praktikum ini bertujuan untuk memahami konsep Object Oriented Programming (OOP) pada PHP serta penerapan routing sederhana menggunakan .htaccess dan index.php sebagai router utama.
Aplikasi yang dibuat berupa manajemen artikel dengan fitur tampil data, tambah artikel, dan ubah artikel, serta menggunakan struktur folder modular.

---

**🧩 Konsep yang Digunakan**

- PHP Object Oriented Programming (OOP)

- Routing menggunakan .htaccess

- Modularisasi folder

- Koneksi database MySQL

- Template Header & Footer

- CSS sederhana untuk tampilan

---

**🍔Konfigurasi Apache (AllowOverride)**

```Agar file .htaccess dapat berfungsi, dilakukan pengaturan pada file httpd.conf.
Pada bagian konfigurasi directory, nilai AllowOverride diubah dari None menjadi All
supaya Apache mengizinkan penggunaan file .htaccess.
```

✅Hasil :

![foto](https://github.com/NadhiaShafira/Lab11Web/blob/352fe3d07d7e5f912415c487029bff660e96db2b/ss_prak11/1_konfigurasi-apache-allowoverride.png)

**🍕Pembuatan File .htaccess**

```File .htaccess dibuat untuk mengaktifkan fitur mod_rewrite.
Routing digunakan agar URL aplikasi menjadi lebih rapi dan tidak
menggunakan ekstensi .php.
```

✅Hasil :

![foto](https://github.com/NadhiaShafira/Lab11Web/blob/89cc339aa4714e0ae3757ae7984c6c956c7906e1/ss_prak11/2_htaccess_routing.png)

**🍟Pengujian Routing**

```Untuk memastikan routing berjalan dengan baik, dilakukan pengujian dengan
mengakses URL tertentu. Jika berhasil, halaman akan menampilkan tulisan
"ROUTING OK".
```

✅Hasil :

![foto](https://github.com/NadhiaShafira/Lab11Web/blob/27d2fd52719b29f2ffb4253b82bc0d0455ac5b2d/ss_prak11/3-routing-ok.png)

**🍜Struktur Folder Framework**

```Untuk memastikan routing berjalan dengan baik, dilakukan pengujian dengan
mengakses URL tertentu. Jika berhasil, halaman akan menampilkan tulisan
"ROUTING OK".
```

✅Hasil :

![foto](https://github.com/NadhiaShafira/Lab11Web/blob/f08ee770804a5300bf0bb5481a977e69f99703b0/ss_prak11/4_struktur_folder_project.png)

**🍱Konfigurasi Database & Class Database**

```Class Database dibuat untuk mengelola koneksi ke MySQL menggunakan konsep
Object Oriented Programming. Class ini digunakan untuk menjalankan query
seperti SELECT, INSERT, dan UPDATE.
```

✅Hasil :

![foto](https://github.com/NadhiaShafira/Lab11Web/blob/6073e3e8fe06466919b7419ec1a0e11523d3015e/ss_prak11/5_class-database.png)

**🍩Menampilkan Data Artikel**

```Modul artikel digunakan untuk menampilkan data artikel yang tersimpan
di database ke dalam bentuk tabel. Data ditampilkan menggunakan query SELECT.
```

✅Hasil :

![foto](https://github.com/NadhiaShafira/Lab11Web/blob/395d9b99d37dd1197f5ecc5e45770490cc0e461b/ss_prak11/6_halaman_data_artikel.png)

**🧁Form Tambah Artikel**

```Fitur tambah artikel dibuat menggunakan form berbasis OOP.
Data yang diinput melalui form akan disimpan ke database menggunakan
method insert pada class Database.
```

✅Hasil :

![foto](https://github.com/NadhiaShafira/Lab11Web/blob/94f9980df46c8ed3b338679d249ec8949d08926e/ss_prak11/7_form_tambah_artikel.png)

✅Hasil Setelah Disimpan :

![foto](https://github.com/NadhiaShafira/Lab11Web/blob/aa9018896ac587754d0cf85e99d26e987f97d2bb/ss_prak11/8_hasil_tambah_artikel.png)

**🍙Form Ubah Artikel**

```Fitur ubah artikel digunakan untuk mengedit data artikel yang sudah ada.
Data yang diperbarui akan disimpan kembali ke database menggunakan query UPDATE.
```

✅Hasil :

![foto]()

✅Hasil Setelah Diubah :

![foto]()

**🍦Tampilan Akhir + CSS**

```Tampilan aplikasi dipercantik menggunakan CSS dengan warna abu muda (silver)
dan biru muda. Selain itu ditambahkan emoji agar tampilan terlihat lebih menarik
dan tidak monoton.
```

✅Hasil :

![foto]()
