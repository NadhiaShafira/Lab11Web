# Lab11Web

**Nama                     : Nadhia Shafira**

**NIM                      : 312410498**

**Matkul                   : Pemograman Web 1**

**Dosen Pengampu           : Agung Nugroho, S.Kom., M.Kom.**

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

![foto](https://github.com/NadhiaShafira/Lab11Web/blob/85a1fce469100475c647b78874013d349481ec43/ss_prak11/9_form_ubah_artikel.png)

✅Hasil Setelah Diubah :

![foto](https://github.com/NadhiaShafira/Lab11Web/blob/e6829d82036a23d908846c22ac42fd8ea3fd94b6/ss_prak11/10_hasil_ubah_artikel.png)

**🍦Tampilan Akhir + CSS**

```Tampilan aplikasi dipercantik menggunakan CSS dengan warna abu muda (silver)
dan biru muda. Selain itu ditambahkan emoji agar tampilan terlihat lebih menarik
dan tidak monoton.
```

✅Hasil :

![foto](https://github.com/NadhiaShafira/Lab11Web/blob/4c30c228abed5255cdfee5c8d3787218b134b900/ss_prak11/11_file_css_style.png)

**8🍪 Kesimpulan**

```Dari hasil praktikum ini dapat disimpulkan bahwa framework PHP OOP sederhana
dapat dibangun dengan konsep routing dan modularisasi. Penggunaan OOP membuat
kode lebih terstruktur, mudah dibaca, dan mudah dikembangkan.
```


## 📌 Praktikum 12 – Pengembangan Fitur User & Profil ##

**(Lanjutan dari Praktikum 11 – Framework PHP OOP Sederhana)*

Pada Praktikum 11, telah dibuat sebuah framework PHP sederhana berbasis Object Oriented Programming (OOP) dengan fitur utama manajemen artikel (CRUD) serta routing menggunakan file index.php sebagai router utama.

Pada Praktikum 12, aplikasi tersebut dikembangkan lebih lanjut dengan menambahkan fitur autentikasi user dan pengelolaan profil, sehingga sistem menjadi lebih lengkap dan aman untuk digunakan.

**🎨 Perubahan Tampilan (Styling CSS)**

- Selain penambahan fitur, dilakukan juga pembaruan tampilan antarmuka:

- Menggunakan gradasi warna biru dan pink untuk tampilan yang lebih modern dan menarik.

- Struktur tampilan dibuat full width dengan penggunaan card agar konten lebih rapi.

- Halaman login, artikel, dan profil menggunakan style yang konsisten.

- Penambahan ikon emoji 🎀✨🍰 untuk meningkatkan user experience.

**1️⃣ TABEL users DI phpMyAdmin**

```Tabel users digunakan untuk menyimpan data user aplikasi.
Password disimpan dalam bentuk hash untuk menjaga keamanan data.
```

✅Hasil :![foto](https://github.com/NadhiaShafira/Lab11Web/blob/b972a466f6b40dba1de2b9686567608e9d014f3b/ss_prak12/01-database-users.png)

**2️⃣ HALAMAN LOGIN**

```Halaman login digunakan untuk autentikasi user sebelum mengakses aplikasi.
```

✅Hasil :![foto](https://github.com/NadhiaShafira/Lab11Web/blob/ed14554b91e275cf207686f7ae1ec6f04fdde397/ss_prak12/02-halaman-login.png)

**4️⃣ HALAMAN DATA ARTIKEL**

```Halaman Data Artikel menampilkan data artikel menggunakan konsep CRUD berbasis OOP.
```

✅Hasil :![foto](https://github.com/NadhiaShafira/Lab11Web/blob/0f09501581c3487ca5fc76e76042c6edff4cfb5f/ss_prak12/03-login-berhasil.png) 

**5️⃣ HALAMAN PROFIL USER**

```Halaman profil menampilkan data user yang sedang login serta menyediakan fitur ubah password.
```

✅Hasil :![foto](https://github.com/NadhiaShafira/Lab11Web/blob/a5ebe72ee573cb6ee41982d033e1ffea224b5981/ss_prak12/04-halaman-profil.png)

**6️⃣ PROSES UBAH PASSWORD SEBELUM & BERHASIL**

*Sebelum*

✅Hasil :![foto](https://github.com/NadhiaShafira/Lab11Web/blob/1baaf435912f1767cc31c97e09301d2a5e94a947/ss_prak12/05-ubah-password(sebelum).png)

*Sesudah(berhasil)*

✅Hasil :![foto](https://github.com/NadhiaShafira/Lab11Web/blob/56157f47b1089801d0658ce0195473174249b4d7/ss_prak12/05-ubah-password(sesudah).png)

```Password berhasil diubah dan dienkripsi menggunakan fungsi password_hash().
```

**7️⃣ TABEL users SETELAH UBAH PASSWORD**

```Password user berhasil diperbarui dan tersimpan dalam bentuk hash di database.
```

✅Hasil :![foto](https://github.com/NadhiaShafira/Lab11Web/blob/a775c4e05d7ad454a9be21520a6d653cdb6f66af/ss_prak12/06-password-hash-users.png)

**8️⃣ LOGOUT**

```Logout menghapus session dan mengarahkan user kembali ke halaman login.
```

✅Hasil :![foto](https://github.com/NadhiaShafira/Lab11Web/blob/bc83ac917f1a8c93cbf49bcdcc44568f36256572/ss_prak12/07-logout.png)

Pada praktikum ini dilakukan perubahan tampilan antarmuka dengan mengubah style CSS.
Tampilan menggunakan gradasi warna biru dan pink, layout full width, card modern,
serta penambahan ikon emoji untuk meningkatkan tampilan visual aplikasi.
