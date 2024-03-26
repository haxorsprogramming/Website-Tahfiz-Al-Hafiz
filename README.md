<p align="center">
<a href="https://laravel.com" target="_blank">
<img src="https://nos.jkt-1.neo.id/aditiastorage/asset/logo/logo-tahfiz-al-haziq.png" width="400">
</a>
</p>
<div style="text-align: center;">

## Sistem Informasi Manajemen Tahfiz Qur'an


</div>

<h4>Deksripsi</h4>

Sistem manajemen tahfiz qur'an ini dapat digunakan untuk memanajemen proses administrasi & pendataan santri 
yang dalam dalam lingkungan tahfiz qur'an, beberapa modul dasar seperti pendaftaran, pendataan, serta pengelolaan keuangan dapat digunakan pada aplikasi ini.

<h4>Fitur</h4>

<li> Pendaftaran santri</li>
<li> Manajemen data santri</li>
<li> Manajemen absensi</li>
<li> Manajemen pengurus</li>
<li> Manajemen pembayaran SPP</li>
<li> Manajemen penggajian pengurus</li>
<li> Manajemen data donasi</li>
<li> Manajemen data pengeluaran</li>
<li> Rekap cashflow (keuangan)</li>
<li> Rekap absensi</li>


<h4>Screenshoot</h4>

- Home


- Form pendaftaran


- Bukti Pendaftaran


- Dashboard 


- Form pembayaran SPP 


- Bukti pembayaran SPP


<h4>Instalasi</h4>

- Aplikasi dibuat dengan menggunakan laravel versi 8, untuk itu harap gunakan sistem kebutuhan sesuai dengan standar kebutuhan laravel 8

- Untuk database menggunakan MySql

- Pastikan sudah menginstall git (untuk clone repository) & composer

- Silahkan clone repository ini dengan perintah <pre>git clone https://github.com/haxorsprogramming/Website-Tahfiz-Al-Hafiz </pre>

- Lakukan instalasi dependency dengan perintah <pre>composer install</pre>

- Copy file <code>.env.exampe</code> menjadi <code>.env</code>, dan ubah pengaturan database pada file tersebut

- Lakukan migrasi database & seeder dengan perintah <pre>php artisan migrate:refresh --seed</pre>

- Silahkan akses browser sesuai path alamat aplikasi di server untuk mengakses aplikasi

- Untuk mengakses alamat administrator, dapat mengakses <code>'url_aplikasi'/auth/login</code>

- Username & password default adalah <code>admin</code>

- Pada saat migrate & seeder, data santri akan di generate secara dummy sebanyak 20 records, jika tidak ingin melakukan proses dummy generate silahkan komentar/disable code di file
<code>database/seeders/DatabaseSeeder.php</code> pada baris ke 40

<h4>Instalasi dengan docker</h4>

- Jika tidak ingin melakukan konfigurasi secara manual, anda dapat menggunakan docker untuk mendeploy aplikasi ini. File Dockerfile sudah disediakan
<pre>
sudo chgrp -R www-data /var/www/html/nama_project/
sudo chmod -R 775 /var/www/html/nama_project/storage
sudo chmod o+w ./storage/ -R
</pre>

<h4>Informasi Tambahan</h4>

- Aplikasi ini merupakan hibah dari komunitas Haxorsprogramming untuk salah satu Tahfiz Qur'an di kota medan

- Aplikasi ini bisa digunakan untuk tahfiz qur'an lain & bebas untuk dikembangkan kembali

- Jika ada pertanyaan seputar aplikasi ini, atau ingin memberikan donasi dapat mengirimkan email ke <code>alditha.forum@gmail.com</code>
