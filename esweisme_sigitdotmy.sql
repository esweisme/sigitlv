-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 25 Feb 2022 pada 01.52
-- Versi server: 10.4.21-MariaDB-log
-- Versi PHP: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `esweisme_sigitdotmy`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id`, `name`) VALUES
(1, 'Blog'),
(2, 'Refleksi'),
(3, 'Catatan'),
(4, 'Tutorial');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan`
--

CREATE TABLE `pesan` (
  `id` int(11) NOT NULL,
  `pengirim` varchar(150) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `pesan` varchar(250) NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pesan`
--

INSERT INTO `pesan` (`id`, `pengirim`, `alamat`, `pesan`, `tanggal`) VALUES
(1, 'tes online', 'wahyudi.sigit@gmail.com', 'ASDAS AD ASD', '2021-06-15 09:27:42'),
(2, 'samsul nih', '0983646727', 'tolong balas wa saya yaa', '2021-11-18 13:32:23'),
(3, 'Les Jacobs', 'https://www.no-site.com', 'Hello Beloved \r\n \r\nCan you devote your time to run a humanitarian charity project in helping the needy and less privileged people around your community ? please reply to Mr Les:   Lesscaddingl@gmail.com', '2021-12-09 18:49:52'),
(4, 'Mike Brickman', 'https://sigitw.my.id', 'Negative SEO attack Services. Deindex bad competitors from Google. It works with any Website, video, blog, product or service. \r\nhttps://www.seo-treff.de/product/derank-seo-service/', '2022-01-26 15:49:38'),
(5, 'Mike Harrison', 'https://sigitw.my.id', 'Negative SEO attack Services. Deindex bad competitors from Google. It works with any Website, video, blog, product or service. \r\nhttps://www.seo-treff.de/product/derank-seo-service/', '2022-02-24 19:40:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `kategori_id` int(11) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `url_seo` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `posts`
--

INSERT INTO `posts` (`id`, `title`, `kategori_id`, `content`, `url_seo`, `created`, `modified`) VALUES
(4, 'waktu yang nggak akan ada', 2, '<p>Tidak perlu menunggu waktu yang tidak akan pernah datang.</p>\r\n<p>Waktu kita merasa <strong>suci</strong> untuk mengajak kebaikan.</p>\r\n<p>Waktu kita merasa sangat <strong>pandai</strong> untuk mulai berbagi.</p>\r\n<p>Waktu dimana kita merasa <strong>hebat</strong> untuk membuat suatu yang besar.</p>\r\n<p>Mulailah, lakukan sekarang. Jangan menunggu waktu yang tidak akan pernah datang.</p>', 'waktu-yang-nggak-akan-ada', '2019-11-06 00:00:00', NULL),
(17, 'Belum berhasil itu pertanda baik', 2, '<p>Yang bisa membuat tendangan penalti meleset.\r\n<strong>Hanyalah</strong> orang yang mempunyai keberanian untuk melakukan tendangan penalti.</span></p>\r\n<p>Bukan masalah jika kamu belum berhasil. itu menandakan kamu sudah berani mencoba. Selalu ada ilmu baru di setiap percobaan. ilmu baru berarti, peningkatan.</p>\r\n<p>Selamat buat kamu yang sudah mencoba. karena tidak semua orang berani dan mempunyai kesempatan yang sama</p>', 'belum-berhasil-itu-pertanda-baik', '2019-11-08 00:00:00', NULL),
(18, 'Jangan Cemburu dengan dia', 2, '<p>Jangan cemburu dengan dia yang sudah lebih dulu bisa, lebih dulu berhasil.</p>\r\n<p>Karena kita tidak tau proses yang sudah dilewatinya. Bisa jadi dia memulai lebih dulu. Mengurangi istirahatnya untuk bisa di posisi sekarang.</p>\r\n<p>Untuk kita, tidak perlu terburu buru. berjalanlah perlahan. Tidak perlu segera bisa semuanya. Maafkan dirimu yang sedang belajar perlahan ini. Nikmati dan pahami prosesnya.&nbsp;</p>\r\n<p>Ingat, tidak ada skill yang didapat semalam. kita tidak sedang berlomba.&nbsp;</p>\r\n<p>Dan, jangan cepat puas. Selalu tingkatkan level. Masih banyak orang yang membutuhkanmu teruslah berkembang.</p>', 'jangan-cemburu-dengan-dia', '2019-11-12 00:00:00', NULL),
(20, 'follback', 1, '<p>sosial media saya yakin punya banyak manfaat.</p>\r\n<p>namun, saya harus memilih informasi yang akan saya terima.</p>\r\n<p>ketika saya tidak mengikuti kamu. bukan berarti saya benci dengan kamu. ataupun saya tidak mengenal kamu. saya hanya sedang membatasi informasi.</p>\r\n<p>di unfollow atau di unfriend bukan berarti putus silaturahmi. kita sama-sama tau harus menemui dimana jika ada keperluan. ataupun jika saya tidak tau. saya akan mencari tau.</p>\r\n<p>tak perlu minta follback. kalo kamu menarik dan bermanfaat akan banyak yang mengikutimu.</p>', 'follback', '2019-11-18 00:00:00', NULL),
(21, 'sekarang itu sudah baik', 1, '<p>jangan membuat kondisi yang membuatmu lupa akan keluasan pemberian Allah.</p>\r\n<p>setelah setahun lebih menikah. berpikir seharusnya sudah punya anak.</p>\r\n<p>kata <em>seharusnya</em> inilah yang membuat kondisi sekarang jadi tidak ada bahagianya.</p>', 'sekarang-itu-sudah-baik', '2019-11-22 00:00:00', NULL),
(24, 'Membangun semua dari awal', 1, '<p>Dalam mengerjakan proyek atau pekerjaan kita sering dihadapkan untuk membuat semuanya sendiri atau menggunakan tool yang sudah ada.<br /><br />Jika memang untuk menghemat waktu anda dapat menggunakan tool yang telah ada. namun pastikan anda memahami cara konsep dasarnya. Tentu tool yang ada biasanya mungkin perlu penyesuaian agar lebih klop dengan proyek dan pekerjaan kita<br /><br />jika memang waktu masih panjang dan anda merasa perlu membuat sendiri tool nya. Maka akan lebih baik anda membangun semuanya sendiri. karena akan mendapat pengalaman juga ilmu baru dalam pembuatannya. yang menjadikan anda semakin naik level.</p>\r\n<p>Proyek di sini saya asumsikan saya sebagai programmer yang di minta untuk membuat sebuah website portal berita. tentu anda dapat menggunakan tool yang sudah ada, CMS yang banyak bertebaran. Atau, perlukah kita memulai semuanya dari nol.</p>\r\n<p>Keduanya baik, yang penting. kita bisa membantu dan bermanfaat. <strong>Pilih tool yang disukai dan mulai berkarya.</strong></p>', 'membangun-semua-dari-awal', '2019-12-08 00:00:00', NULL),
(26, 'Orang Tua Kejam', 2, '<p>Anak kecil menangis dalam genggaman seorang pria, mencoba meronta namun tak mampu karena usaha bayi berusia 8 bulan tak akan mampu menandingi tenaga orang dewasa. Dihadapannya seorang wanita mencoba memasukkan cairan pahit pekat ke mulutnya. Tak hanya itu di buka paksa mulut mungil yang mencoba menutup mulut karena tau apa yang akan masuk ke mulutnya akan terasa pahit.</p>\r\n<p>Pemandangan tadi tampak kejam bagi sang bayi karena tak tau yang akan dimasukkan ketubuhnya adalah obat demam yang bermafaat menurunkan panas tubuhnya yang tinggi. Yang dia tau itu pait dan tidak enak, akan sangat menggangu baginya.</p>\r\n<p>Orang tuanya juga pasti akan kasihan dengan rontahan anaknya. Namun menjadi tega karena yang dilakukannya adalah baik untuk anaknya. Walaupun tampak kejam namun maksud sang orang tua adalah baik.</p>\r\n<p>Begitupun kita ketika sedang tertimpa kesakitan, kesulitan, kepayahan kita tidak akan pernah tau ada proses apa dibalik kesulitan kita.</p>\r\n<p>Bagi yang tidak sabar maka akan muncul alasan mengeluh, ngedumel, dan menganggap hidup ini tak adil bahkan sampai sampai marah kepada ketentuanNya.</p>', 'orang-tua-kejam', '2019-02-06 00:00:00', NULL),
(27, 'Tingkatkan Budaya Membaca, Hentikan Sebar Hoax', 1, '<p>akhir akhir ini budaya membaca terasa kian menurun. Hal itu pun dirasakan oleh saya. Ketika bertemu artikel sedikit lebih panjang apalagi tanpa gambar yang menarik seperti enggan untuk membaca utuh hingga selesai.</p>\r\n<p>Hal ini tentu kurang baik sehingga sering mengambi kesimpulan dari judul ataupun hanya pada awal paragraph. Akhirnya informasi yang didapat sering keliru.</p>\r\n<p>Media membaca sekarang semakin berkembang, tidak hanya buku, majalah, koran dan media menggunakan kertas lainnya. Kita dapat mendapat informasi melalui media-media digital.</p>\r\n<p>Sehingga semakin mudah untuk mengakses informasi yang kita butuhkan, pun dengan membuat informasi dan menyebarkannya. sering kita dapati judul sebuah artikel baik berita ataupun blog, di tujukan untuk menarik perhatian yang jika&nbsp; dibaca utuh isi artikel tidak seperti maksud yang di sampaikan di judul. Teknik itu ada clickbait. Membesar-besarkan judul agar menarik jumlah pengunjung atau klik pada artikel tersebut.</p>\r\n<p>Namun masalahnya tidak semua adalah pembaca yang cerdas. Sering kali artikel yang dibaca hanya sebatas judulnya atau taglinenya saja. Langsung meyakini itu adalah sebuah kebenaran yang otentik dan bisa dipertanggung jawabkan padahal BELUM TENTU.</p>\r\n<p>Ditambah lagi kesenangan untuk menyebarkan berita-berita yang belum tentu kebenarannya (HOAX). Tak sedikit berisi tentang kebencian, kekerasan, kejahatan, fitnah dan kebohongan. Demi untuk mendapat “predikat” orang yang paling tau, paling pertama tau, dan kebahagiaan ketika hasil berbaginya berbuah beberapa jumlah “like” atau komentar.</p>\r\n<p>Meningkatkan budaya membaca itu penting, namun pilihlah bacaan yang baik, benar, bermanfaat, solusi dan dapat meningkatkan kualitas diri.</p>\r\n<p>TIPS dan SOLUSI :</p>\r\n<ol>\r\n<li>Baca artikel sampai selesai.</li>\r\n<li>Jika kebenaran berita belum dapat dipastikan, tidak perlu disebarkan apalagi yang berisi fitnah, hoax, penipuan, kekerasan dll.</li>\r\n<li>Pastikan sumber berita bisa dipertanggung jawabkan. Pilih sumber berita yang terpercaya. Hindari blog atau portal berita abal-abal. Apalagi yang menyebarkan fitnah, kebencian, penipuan dll.</li>\r\n</ol>', 'tingkatkan-budaya-membaca-hentikan-sebar-hoax', '2019-01-05 00:00:00', '2021-11-19 05:57:52'),
(28, 'Sayangi dirimu', 2, '<p>Jangan kesal dengan dirimu. Sayangi dirimu apa adanya. Bagaimanapun kondisimu saat ini. Cintailah dirimu.&nbsp;</p>\r\n<p>Terimalah dirimu saat ini dengan segala keadaannya. sadari bahwa kamu juga manusia yang butuh kasih sayang oleh dirimu sendiri. Peluk dirimu. katakan gak papa kamu seperti ini. aku sayang kamu apa adanya.</p>\r\n<p>Dengan sayang pada dirimu sendiri. kamu akan menjaganya sepenuh hati.</p>', 'sayangi-dirimu', '2020-01-26 12:59:56', NULL),
(29, 'Xiaomi Note 5a tidak mau cas', 3, '<p>Berbagi pengalaman ketika mendapati handphone android xiaomi note 5a kehabisan sumber daya. Dan mati. Lama tidak cas karena lagi ada dijalan. Setelah pulang. Mau ngecas tidak bisa. Daya tidak mau masuk. Sempat panik.</p>\r\n<p>Entah kenapa akhirnya coba dikoneksikan ke laptop. Eh dia mau. Akhirnya setelah dapat sedikit daya. Langsung dicas dengan charger.</p>\r\n<p>Jadi, kalau mengalami masalah yang sama. Maka coba dulu cas menggunakan laptop/pc.</p>\r\n<p>Atau anda dapat menggunakan cas type c atau cas original dari xiaomi.</p>\r\n<p>note : diambil dari blog catatan di blogger</p>', 'xiaomi-note-5a-tidak-mau-cas', '2018-09-29 16:20:49', '2020-01-29 16:22:33'),
(30, 'Please insert disk saat install Adobe Photoshop', 3, '<p>Saat ingin install Adobe Photoshop menggunakan Flash Disk ternyata muncul peringatan \" Please Insert Disk \". Padahal sebelumya tidak ada masalah dalam instalasi dengan file installer yang sama.</p>\r\n<p>Solusinya dengan memindahkan file installernya ke hard disk lokal dahulu dan lakukan instalasi kembali.</p>', 'please-insert-disk-saat-install-adobe-photoshop', '2020-01-29 16:24:13', NULL),
(32, 'Driverpack tidak jalan saat di flashdisk', 3, '<p>Saat ingin menjalankan Aplikasi Driverpack. Yang kebetulan saat itu filenya ada di flashdisk. Namun, tidak dapat berjalan (running)</p>\r\n<p>Setelah dicek ternyata solusinya adalah mematikan Smadav anti virus karena terdapat fitur untuk menolak aplikasi atau perintah yang dijalankan berada di USB Drive.atau dengan mematikan fitur tersebut.</p>', 'driverpack-tidak-jalan-saat-di-flashdisk', '2019-05-17 16:26:38', NULL),
(33, 'Saat update dan install plugin pada wordpress minta akun FTP', 3, '<p>Pernahkah kalian saat ingin update ataupun install tema maupun plugin di wordpress namun muncul permintaan akun FTP ? Padahal, kita tidak pernah tau ataupun men-setting akun FTP pada wordpress.</p>\r\n<p>Biasanya ini terjadi pada web yang menggunakan CMS wordpress dan hosting sendiri</p>\r\n<p>Anda Hanya perlu membahkan baris berikut</p>\r\n<p>/* Sets up direct update and install. */<br />define(\'FS_METHOD\', \'direct\');</p>\r\n<p>pada file wp-config.php yang ada di folder utama aplikasi web wordpress.</p>', 'Saat-update-dan-install-plugin-pada-wordpress-minta-akun-FTP', '2018-11-21 16:28:54', '2021-04-27 11:56:37'),
(34, 'Cara hapus segurazo', 3, '<p>Permasalahan komputer lelet dan lemot biasanya ada dua.</p>\r\n<ol>\r\n<li>Spesifikasi komputernya rendah sehingga untuk menjalankan banyak aplikasi membutuhkan waktu.</li>\r\n<li>Virus atau walmare yang menyebabkan resource dalam komputer dipakai berlebihan sehingga komputer berjalan lambat.</li>\r\n</ol>\r\n<p>Untuk permasalahan point 1. bisa di atasi dengan meng upgrade spek komputer biasanya kita dapat menambah RAM. Sedangkan, untuk point kedua. Saya pernah mengalami komputer lelet karena malware yaitu aplikasi yang tidak diinginkan. Biasanya ikut terinstall ketika kita menginstall aplikasi dan mendownload dari internet.</p>\r\n<p>Namanya segurazo sangat menggangu. namun pegalaman saya dapat diatasi dengan malwarebytes</p>', 'cara-hapus-segurazo', '2020-01-08 16:31:21', NULL),
(35, 'Jangan lupakan required', 3, '<p>Setelah menyelesaikan tampilan form pada sebuah halaman web.</p>\r\n<p>Jangan lupa untuk me validasi apa saja yang dapat di input oleh user termasuk required</p>', 'jangan-lupakan-required', '2020-02-11 18:28:37', NULL),
(36, 'Agar LAMPP autostart saat booting centOS 7 Linux', 3, '<p>berikut cara agar XAMPP untuk linux atau LAMPP otomatis dijalankan pada saat booting server atau PC anda. yang saya gunakana adalah OS centOS 7 (linux) kemungkinan tidak jauh berbeda dengan OS linux lainnya.</p>\r\n<ol>\r\n<li>Buka file /etc/rc.d/rc.local</li>\r\n<li>Tambahkan /opt/lampp/lampp start pada akhir file.</li>\r\n<li>buka console terminal</li>\r\n<li>jalankan perintah chmod +x /etc/rc.d/rc.local untuk mengubah hak ases file.</li>\r\n<li>uji coba dengan me-restart sistem.</li>\r\n</ol>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>', 'agar-lampp-autostart-saat-booting-centos-7-linux', '2020-02-19 10:47:26', '2021-11-19 09:27:39'),
(40, 'Mengatasi XAMPP di linux gagal start. Line 22: Netstat: Command Not Found', 3, '<p>/opt/lampp/lampp start</p>\r\n<p>Starting XAMPP for Linux 5.6.40-1&hellip;</p>\r\n<p>XAMPP: Starting Apache&hellip;/opt/lampp/share/xampp/xampplib: line 22: netstat: command not found</p>\r\n<p>/opt/lampp/share/xampp/xampplib: line 22: netstat: command not found ok.</p>\r\n<p>XAMPP: Starting MySQL&hellip;/opt/lampp/share/xampp/xampplib: line 22: netstat: command not found ok.</p>\r\n<p>XAMPP: Starting ProFTPD&hellip;/opt/lampp/share/xampp/xampplib: line 22: netstat: command not found ok.</p>\r\n<p>mengatasinya cukup mudah bisa dengan install net-tools</p>\r\n<p>&nbsp;</p>\r\n<pre>yum install net-tools</pre>\r\n<p>atau untuk ubuntu</p>\r\n<pre>sudo apt install net-tools</pre>\r\n<pre>&nbsp;</pre>\r\n<p>&nbsp;</p>\r\n<pre>&nbsp;</pre>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>', 'mengatasi-xampp-di-linux-gagal-start-line-22-netstat-command-not-found', '2021-09-10 09:43:09', '2021-11-19 09:28:35'),
(41, 'Install Webmin di Server Ubuntu 20.04', 3, '<p>saya menggunakan ubuntu server 20.04</p>\r\n<p>tambah repo webmin di /etc/apt/sources.list bisa menggunakan nano</p>\r\n<p>&nbsp;</p>\r\n<blockquote>\r\n<pre>sudo nano /etc/apt/sources.list</pre>\r\n</blockquote>\r\n<p>&nbsp;</p>\r\n<p>tambahkan baris pada file sources.list</p>\r\n<p>. . .<br />deb http://download.webmin.com/download/repository sarge contrib</p>\r\n<p>&nbsp;</p>\r\n<p>jika Anda menggunakan nano, lakukan hal itu dengan menekan&nbsp;CTRL + X,&nbsp;Y, lalu&nbsp;ENTER.</p>\r\n<p>&nbsp;</p>\r\n<p>unduh kunci PGP dari Webmin dengan&nbsp;wget&nbsp;dan tambahkan itu ke daftar kunci dari sistem Anda</p>\r\n<blockquote>\r\n<p>wget -q -O- http://www.webmin.com/jcameron-key.asc | sudo apt-key add</p>\r\n</blockquote>\r\n<p>&nbsp;</p>\r\n<blockquote>\r\n<p>sudo apt update</p>\r\n</blockquote>\r\n<p>&nbsp;</p>\r\n<blockquote>\r\n<p>sudo apt install webmin</p>\r\n</blockquote>\r\n<p>&nbsp;</p>\r\n<p>Output jika sukses</p>\r\n<p>. . . Webmin install complete. You can now login to https://your_server:10000 as root with your root password, or as any user who can use sudo.</p>\r\n<p>izinkan akses firewall untuk port 10000</p>\r\n<blockquote>\r\n<p>sudo ufw allow 10000</p>\r\n</blockquote>\r\n<p>&nbsp;</p>\r\n<p>semoga berhasil dan bermanfaat</p>', 'install-webmin-di-server-ubuntu-2004', '2021-09-13 11:27:38', '2021-11-23 14:25:43'),
(42, 'Install Webmin di Server Centos 7', 3, '<p>tambahkan file webmin.repo</p>\r\n<blockquote>\r\n<p>sudo nano /etc/yum.repos.d/webmin.repo</p>\r\n</blockquote>\r\n<p>&nbsp;</p>\r\n<p>isi file webmin.repo dengan</p>\r\n<blockquote>\r\n<p>[Webmin]<br />name=Webmin Distribution Neutral<br />#baseurl=https://download.webmin.com/download/yum<br />mirrorlist=https://download.webmin.com/download/yum/mirrorlist<br />enabled=1</p>\r\n</blockquote>\r\n<p>&nbsp;</p>\r\n<p>import file GPG key webmin</p>\r\n<blockquote>\r\n<p>sudo rpm &ndash;import http://www.webmin.com/jcameron-key.asc</p>\r\n</blockquote>\r\n<p>&nbsp;</p>\r\n<p>install webmin</p>\r\n<blockquote>\r\n<p>sudo yum install webmin</p>\r\n</blockquote>\r\n<p>&nbsp;</p>\r\n<p>coba akses jika belum bisa di akses pastikan portnya telah terbuka. port default 10000</p>\r\n<p>caranya bisa dilihat&nbsp;<a href=\"../../catatan/buka-port-di-centos-7\" target=\"_blank\" rel=\"noopener\">http://sigitw.my.id/catatan/buka-port-di-centos-7</a></p>', 'install-webmin-di-server-centos-7', '2021-09-13 11:28:57', '2021-11-19 09:27:06'),
(43, 'Buka Port di CentOS 7', 3, '<p><img title=\"Gonz\" src=\"../../storage/uploads/pngwing.com.png\" alt=\"Gonz\" width=\"196\" height=\"199\" /></p>\r\n<p>setelah install webmin. masih belum bisa diakses melalui browser. Ternyata port di servernya belum dibuka. dengan asumsi port default webmin adalah 10000, cara membukanya adalah dengan mengetik perintah</p>\r\n<p><span style=\"font-family: \'courier new\', courier, monospace;\">firewall-cmd &ndash;add-port=10000/tcp</span></p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>', 'buka-port-di-centos-7', '2021-09-13 11:30:21', '2021-11-23 14:27:09'),
(44, 'Install XAMPP linux di centOS 7', 3, '<p>download file xampp for linux di apachefriends.org</p>\r\n<p>lalu letakkan pada direktori server bisa dengan webmin ( cara install webmin )</p>\r\n<blockquote>jalankan perintah berikut agar file dapat di eksekusi</blockquote>\r\n<blockquote>\r\n<p>chmod +x xampp-linux-x64-5.6.40-1-installer.run</p>\r\n<pre>dan</pre>\r\n</blockquote>\r\n<blockquote>./xampp-linux-x64-5.6.40-1-installer.run</blockquote>\r\n<blockquote>hanya itu perintahnya pilih y jika ada pertanyaan untuk instalasi.</blockquote>\r\n<blockquote>jangan lupa untuk buka port 80</blockquote>', 'install-xampp-linux-di-centos-7', '2021-09-13 11:31:08', '2021-11-19 09:25:57'),
(45, 'Install webmin di server centos 8', 3, '<p>Pada kali ini menggunakan centOS 8 Stream.</p>\r\n<ul>\r\n<li>jika belum ada wget silahkan installl wget</li>\r\n</ul>\r\n<pre style=\"margin-left: 50px;\">sudo dnf install wget -y</pre>\r\n<p style=\"margin-left: 50px;\">&nbsp;</p>\r\n<ul>\r\n<li>silahkan download script installer webminnya</li>\r\n</ul>\r\n<pre style=\"margin-left: 50px;\">wget http://software.virtualmin.com/gpl/scripts/install.sh -O /download/virtualmin-install.sh</pre>\r\n<p>&nbsp;</p>\r\n<ul>\r\n<li>ubah script menjadi file executable</li>\r\n</ul>\r\n<pre style=\"margin-left: 50px;\">chmod +x /download/virtualmin-install.sh</pre>\r\n<p>&nbsp;</p>\r\n<ul>\r\n<li>jalankan scriptnya dengan perintah</li>\r\n</ul>\r\n<pre style=\"margin-left: 50px;\">sh /download/virtualmin-install.sh</pre>\r\n<p>&nbsp;</p>\r\n<ul>\r\n<li>jika ada konfirmasi silahkan pilih ya</li>\r\n</ul>\r\n<p>jika sudah selesi dapat di akses di port 10000</p>\r\n<p>jangan lupa buka portnya</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>', 'install-webmin-di-server-centos-8', '2021-09-13 14:38:29', '2021-11-19 09:32:17'),
(46, 'Catatan position pada css html', 3, '<p>defaultnya adalah <strong>static</strong></p>\r\n<p>jika non static dia punya akses memakai top, bottom, left dan right</p>\r\n<p>&nbsp;</p>\r\n<p><strong>relative</strong></p>\r\n<p>dia akan maju satu dimensi</p>\r\n<p>ruang yang ditempati semula MASIH ADA</p>\r\n<p>akan bergerak terhadap posisi semula.</p>\r\n<p>jika top 0 left 0 maka tidak akan bergeser kemana2.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Absolute</strong></p>\r\n<p>ruang yang sebelumnya ditempati semula tidak ada oleh element static</p>\r\n<p>akan bergerak terhadap posisi parentnya, SELAMA PARENTNYA JUGA NONSTATIC</p>\r\n<p>jika top 0 dan left 0 maka dia akan berada di ujung windwos jika parentnya static</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Fixed.</strong></p>\r\n<p>bergerak relatif terhadap window browser</p>\r\n<p>jika di scroll maka akan terkunci</p>', 'catatan-position-pada-css-html', '2021-09-28 13:27:19', '2021-12-02 12:50:20'),
(48, 'Dagang itu', 1, '<p>saya menemukan postingan yang menggugah saya untuk mulai berdagang. ini captionnya.<br /><br /><br />Kalau ada sumur di ladang, boleh kita menumpang mandi. Kalau memang mau berdagang, buat apa dipikir lagi?<br /><br />Nabi berbisnis. Berdagang. Jualan.<br /><br />Kata Ustadz Das\'ad, ketika kecil Nabi ditempa dengan jadi penggembala dan ketika muda Nabi ditempa dengan jadi pedagang. Dua fase ini turut membentuk Nabi menjadi pribadi yang jujur dan tangguh.<br /><br />Menurut saya, jualan itu hebat. Menyehatkan, membuka kemungkinan-kemungkinan (karena berjumpa banyak orang), mengundang rezeki tak disangka-sangka, mendistribusi manfaat, dan bagian dari sunnah.<br /><br />Kalau rasa-rasanya nggak bisa jualan, gimana? Yah dilatih. Begitu bisa, maka akan bisa selama-lamanya. Seperti bersepeda dan berenang.<br /><br />Adam Knight, profesor biomekanik menyimpulkan, \"Dari perspektif motorik, saat seseorang sudah mendapatkan satu skill, maka dia tidak akan kehilangan skill tersebut, kecuali terdapat kecelakaan syaraf atau otot.\"<br /><br />Sekali lagi, jualan itu hebat. Teman-teman sepakaaaat?&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>yang saya sangat senang adalah ada kata \"distribusi manfaat\". membuat saya tergugah, dagang itu memang membantu orang lain dalam menyelesaikan masalahnya.</p>', 'dagang-itu', '2021-12-02 12:53:23', NULL),
(49, 'Kerja mencari rizki', 1, '<p>Kita diciptakan untuk ibadah, jadi jangan banyak mainnya.</p>\r\n<p>Sudah siapkan rizki untuk kita, supaya kita gak perlu capek.</p>\r\n<p>Jangan karena kesibukan&nbsp; untuk mencari rizki, jadi melupakan nilai ibadah.</p>\r\n<p>Akan dibuat capek sampai kamu tidak akan mendapat apa-apa kecuali yang hak yang harus diperoleh saja.</p>\r\n<p>tapi kalo kamu ikutin ketentuanya, tidak meninggalkan ibadah.</p>\r\n<p>maka akan dibuat tenang dalam kehidupan dan diberikan rizki sesuai yang kamu butuhkan</p>', 'kerja-mencari-rizki', '2021-12-02 13:19:13', '2021-12-17 19:29:51');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`) VALUES
(1, 'esweisme', '$2y$10$8qWmekcvE49kBdw89LhDLOiti2n4QzfioD8dYSUqZ0twYYjhXDG9y', 'wahyudi.sigit@gmail.com'),
(3, 'sigitwahyudi', '$2y$10$8qWmekcvE49kBdw89LhDLOiti2n4QzfioD8dYSUqZ0twYYjhXDG9y', 'motebi.id@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
