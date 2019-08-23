-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 01 May 2017, 17:03:18
-- Sunucu sürümü: 10.1.9-MariaDB
-- PHP Sürümü: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `colormag`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ayar`
--

CREATE TABLE `ayar` (
  `ayar_id` int(1) NOT NULL DEFAULT '0',
  `ayar_logo` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_siteurl` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_title` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_aciklama` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_anahtarkelime` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_yazar` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_facebook` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_twitter` varchar(100) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `ayar`
--

INSERT INTO `ayar` (`ayar_id`, `ayar_logo`, `ayar_siteurl`, `ayar_title`, `ayar_aciklama`, `ayar_anahtarkelime`, `ayar_yazar`, `ayar_facebook`, `ayar_twitter`) VALUES
(0, '', '', 'Haber İstanbul', 'Sakarya Üniversitesi Bilgisayar Mühendisliği', 'sakarya, bilgisayar, mühendislik,web, teknolojileri', 'Umut Tokoğlu', 'https://www.facebook.com/', 'https://twitter.com/?lang=tr');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `icerik`
--

CREATE TABLE `icerik` (
  `icerik_id` int(11) NOT NULL,
  `icerik_zaman` datetime NOT NULL,
  `icerik_resimyol` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `icerik_ad` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `icerik_detay` text COLLATE utf8_turkish_ci NOT NULL,
  `icerik_keyword` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `icerik_durum` varchar(1) COLLATE utf8_turkish_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `icerik`
--

INSERT INTO `icerik` (`icerik_id`, `icerik_zaman`, `icerik_resimyol`, `icerik_ad`, `icerik_detay`, `icerik_keyword`, `icerik_durum`) VALUES
(3, '2017-04-14 00:00:00', 'images/Icerik/277553130424871263721.jpg', 'deneme', 'asdasdasdasdasd', 'asdasd', '1'),
(4, '2017-04-08 00:00:00', 'images/Icerik/204162021929267267283.jpg', 'denem2', 'asdasdasdasd', 'asdasdsad', '1'),
(5, '2017-04-14 00:00:00', 'images/Icerik/272312199421783301445.jpg', 'deneme3', 'asdasdas', 'asdasd', '1'),
(6, '2017-04-23 00:00:00', 'images/Icerik/278332536824249266156.jpg', 'deneme4', 'asdasdasd', 'asdasd', '1'),
(7, '2017-04-09 00:00:00', 'images/Icerik/225812370827095256008.jpg', 'Deneme5', 'asdfasdfsdfsadf', 'asdasd', '1'),
(10, '2017-04-29 03:21:42', 'images/Icerik/2756220579280452706514.jpg', 'deneme7', 'asdasdasdasd', 'asdfasdf', '1'),
(16, '2017-04-29 02:50:40', 'images/Icerik/2543631152216183085269.jpg', 'Deneme8', 'asfasdfsdfasdfasdf', '', '1'),
(17, '2017-04-29 03:27:13', 'images/Icerik/2251520273254242116931.jpg', 'deneme9', 'asdfsdfasdf', '', '1'),
(18, '2017-04-30 22:12:42', 'images/Icerik/24042291472519230442ist.jpg', 'Deneme66', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed orci at quam finibus semper ut non quam. Nunc id eros eget orci sollicitudin cursus. Nunc tortor dolor, sollicitudin vel lacinia ac, interdum a diam. Duis dapibus, risus in bibendum laoreet, libero ante viverra nisi, sit amet vestibulum felis nunc ac erat. Nam at sagittis velit. Nullam id erat interdum, varius dui in, aliquet orci. Morbi sit amet elementum lacus, nec malesuada dui. Praesent lobortis nibh sit amet velit eleifend facilisis. Nulla fringilla varius risus in egestas. Nulla facilisi. Morbi sed mi id ligula ultricies condimentum. Morbi iaculis dignissim eleifend.\r\n\r\nSed consequat sollicitudin tempus. Donec auctor lacinia sollicitudin. Cras euismod est quis diam dignissim congue. Aliquam vel feugiat felis, et dapibus diam. Sed in sapien nulla. Quisque egestas massa sapien, quis vehicula mauris ornare in. Integer laoreet facilisis lectus nec blandit. Integer aliquet sagittis orci at pharetra. Nam auctor commodo mauris, eu interdum elit gravida et. Pellentesque elementum finibus sem. Mauris ultrices placerat tempus. Curabitur auctor maximus eros, eget molestie justo maximus et.\r\n\r\nSed luctus porttitor dapibus. Nunc nec vehicula magna. Vivamus et quam sit amet odio blandit congue. Integer et ligula tellus. Phasellus et risus ac elit fermentum tempor eu eu felis. Nulla egestas nunc eu neque elementum consectetur. Duis maximus tempus porta. Morbi aliquam facilisis tortor id dignissim.\r\n\r\nInteger id mattis lorem. Pellentesque eu nulla ipsum. Donec vitae nunc eget sapien pulvinar lobortis. Ut sagittis dolor egestas justo tempor facilisis. Nulla dictum scelerisque turpis, et commodo urna mattis nec. Proin ut gravida odio. Curabitur dapibus, erat lobortis egestas egestas, odio diam imperdiet elit, a ultricies lectus nisi sit amet massa. Morbi imperdiet orci ante, ut volutpat mauris elementum at. Proin velit mi, ultricies quis mi eget, ultricies pellentesque sem. Aliquam erat volutpat. Maecenas lacinia lorem sed bibendum cursus. Etiam congue vel tortor eu hendrerit. Nam suscipit, ante quis ullamcorper ultricies, tortor justo bibendum diam, quis auctor ligula nisi eu libero. Ut nec nisi eu dolor semper pharetra. Praesent finibus euismod magna in consectetur. Fusce nec lorem mi.\r\n\r\nSed condimentum facilisis laoreet. Sed sit amet porttitor leo. Nulla luctus feugiat mauris maximus efficitur. Fusce eleifend tortor at sodales cursus. Morbi lobortis massa sit amet lacus tempus, sed aliquam leo tempus. Etiam iaculis malesuada tempor. Aenean ultrices dui at imperdiet ultricies. Proin pretium nibh erat, at tincidunt sem blandit mattis.', '', '1'),
(19, '2017-05-01 02:43:25', 'images/Icerik/20456296332314523078teror.jpg', '1 Mayıs Emek ve Dayanışma Günü kutlamalarını provoke edeceği öne sürülen terör örgütü DHKP/C üyesi 2 kişi gözaltına alındı.', 'İstanbul''da 1 Mayıs Emek ve Dayanışma Günü kutlamalarını provoke edeceği iddia edilen terör örgütü DHKP/C üyesi 2 kişi gözaltına alındı.\r\n\r\nAlınan bilgiye göre, Terörle Mücadele Şube Müdürlüğü ekipleri, DHKP/C üyelerinin 1 Mayıs Emek ve Dayanışma Gününde kutlama ve tören için toplanan grupların arasına girip güvenlik görevlilerine saldırıda bulunarak provokasyon gerçekleştireceklerini belirledi.\r\n\r\nSöz konusu soruşturma kapsamında, Okmeydanı''nda bir derneğe operasyon düzenleyen polis, 2 kişiyi gözaltına aldı.\r\n\r\nŞüphelilerin emniyetteki işlemleri sürüyor.', 'terör, istanbul, gözaltı', '1'),
(20, '2017-05-01 02:56:15', 'images/Icerik/21585244862698230999bogaz.jpg', 'İstanbul Boğazı''nda gemi geçişlerinin, kısıtlı görüş nedeniyle çift yönlü askıya alındığı bildirildi', 'İstanbul Boğazı''nda gemi geçişlerinin, kısıtlı görüş nedeniyle çift yönlü olarak askıya alındığı duyuruldu.\r\nİstanbul Liman Başkanlığı''ndan yapılan açıklamada, İstanbul \r\n Boğazı''nda kısıtlı görüş nedeniyle gemi geçişlerinin saat 17.12 itibariyle çift yönlü askıya alındığı bildirildi.', 'istanbul boğazı', '1'),
(21, '2017-05-01 02:57:51', 'images/Icerik/27661303802207522020metro.jpg', '5 yeni metro hattı önümüzdeki Mayıs ayında ihaleye çıkmaya hazırlanıyor', 'Kirazlı Halkalı metro hattı kontrollük, mühendislik ve danışmanlık hizmet alımı ihalesi 18 Mayıs Perşembe günü saat 10:00''da yapılacak. 9.7 kilometre hat üzerinde 9 adet istasyondan oluşan Kirazlı Halkalı metro hattının ana hat tünelleri ve 9 adet istasyon ile depo sahası bulunan raylı toplu taşıma sisteminin inşaat ve elektromekanik sistem yapım işlerine ait proje, yapım kontrollüğü ve danışmanlık işlerinin yapılacak. Tüm bu çalışmaların bin 200 günde tamamlanması planlanıyor.', '', '1'),
(22, '2017-05-01 03:04:39', 'images/Icerik/26293204542887122765spor.jpg', 'TEM Otoyolu''nda kaza: 1 yaralı', ' TEM Otoyolu Gaziosmanpaşa mevkiinde sürücüsünün kontrolünden çıkan otomobil, önce seyir halindeki TIR''a ardından da bariyerlere çarptı. Kazada otomobil sürücüsü yaralandı.\r\nKaza sabah saat 06.00 sıralarında TEM Otoyolu, Gaziosmanpaşa mevkii, Edirne istikametinde meydana geldi.  İddiaya göre Yıldırım Süleyman Cangöz (45) yönetimindeki 34 GE 1397 plakalı otomobil sürücüsünün kontrolünden çıkarak önce seyir halindeki TIR''a arkadan çarptı ardından savrulan otomobil bariyerlere girdi. Kaza sonucu yaralanan sürücü Cangöz ise, otomobil içerisinde sıkıştı. İhbar üzerine olay yerine sağlık,polis ve itfaiye ekipleri sevk edildi. Olay yerine gelen itfaiye ekiplerinin müdahalesiyle sıkıştığı yerden çıkartılan sürücü ambulansla Gaziosmanpaşa Taksim Eğitim ve Araştırma Hastanesi''ne kaldırılarak tedavi altına alındı. Kaza sonrası ise TEM otoyolu Edirne istikametinde trafik yoğunluğu yaşandı. Kaza yapan otomobilin çekici yardımıyla kaldırılmasının ardından trafik yeniden normale döndü.', '', '1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `iletisim`
--

CREATE TABLE `iletisim` (
  `iletisim_id` int(11) NOT NULL,
  `iletisim_ad` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `iletisim_mail` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `iletisim_detay` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `slider`
--

CREATE TABLE `slider` (
  `slider_id` int(11) NOT NULL,
  `slider_ad` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `slider_resimyol` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `slider_link` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `slider_sira` int(2) NOT NULL,
  `slider_durum` varchar(1) COLLATE utf8_turkish_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `slider`
--

INSERT INTO `slider` (`slider_id`, `slider_ad`, `slider_resimyol`, `slider_link`, `slider_sira`, `slider_durum`) VALUES
(30, 'deneme3', 'images/Slider/280842642125800314544.jpg', '', 2, '1'),
(31, 'deneme4', 'images/Slider/227142398828342212275.jpg', '', 3, '1'),
(33, 'jhfjgf', 'images/Slider/24282236853189425615ist.jpg', '', 0, '1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tarih`
--

CREATE TABLE `tarih` (
  `tarih_id` int(11) NOT NULL DEFAULT '0',
  `tarih_baslik` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `tarih_resimyol` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `tarih_detay` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `uyeler`
--

CREATE TABLE `uyeler` (
  `id` int(11) NOT NULL,
  `email` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `sifre` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `statu` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `uyeler`
--

INSERT INTO `uyeler` (`id`, `email`, `kullanici`, `sifre`, `statu`) VALUES
(1, 'umuttokoglu@gmail.com', 'admin', '21232f297a57a5a743894a0e4a801fc3', 0),
(5, 'aghsd', 'ad', '21232f297a57a5a743894a0e4a801fc3', 1),
(6, 'aghsd', 'ad', '21232f297a57a5a743894a0e4a801fc3', 1),
(7, 'admin', 'esra', '6cd426881f93b6e9a669125ce21e38e0', 1),
(8, 'admin', 'esra', '6cd426881f93b6e9a669125ce21e38e0', 1),
(9, 'admin', 'esra', '21232f297a57a5a743894a0e4a801fc3', 1),
(10, 'esoşxhsh', 'esra', 'ec85d40e9fc5713598806f8e9ffdb7bc', 1),
(11, 'esoşxhsh', 'esra', 'ec85d40e9fc5713598806f8e9ffdb7bc', 1),
(12, 'esoşxhsh', 'esra', 'ec85d40e9fc5713598806f8e9ffdb7bc', 1),
(13, 'esrahjsd', 'esra', '39cec6d4d21b5dade7544dab6881423e', 1),
(14, 'esrahjsd', 'esra', '39cec6d4d21b5dade7544dab6881423e', 1),
(15, 'admin', 'as', '21232f297a57a5a743894a0e4a801fc3', 1),
(16, 'admin', 'as', '21232f297a57a5a743894a0e4a801fc3', 1),
(17, 'admin', 'as', '21232f297a57a5a743894a0e4a801fc3', 1),
(18, 'admin', 'ad', '21232f297a57a5a743894a0e4a801fc3', 1),
(19, 'admin', 'ad', '21232f297a57a5a743894a0e4a801fc3', 1),
(20, 'admin', 'ad', '21232f297a57a5a743894a0e4a801fc3', 1),
(21, 'admin', 'ad', '21232f297a57a5a743894a0e4a801fc3', 1),
(22, 'aeghg', 'ad', '4157b73812d8506df90272cb70c0c64f', 1),
(23, 'uhgctz', 'ad', '6c91bea8a4c08b726971ef7558e445e8', 1),
(25, 'rehgfj', 'es', 'f04e6cf2f4a38697a4d99952f2d73c2e', 1),
(26, 'fgszjgsgh', 'er', '54abb6de6c653ced92f3650d56b28632', 1),
(27, 'syık', 'aa', '46a0a77cf3902b57d59fe041c3db4bb0', 1),
(28, 'asdgsh', 'ww', '48b082a7c0809936cbcb7a512dbf8dbf', 1),
(29, 'esrasimsar@gmail.com', 'esra', '81dc9bdb52d04dc20036dbd8313ed055', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yorum`
--

CREATE TABLE `yorum` (
  `yorum_id` int(11) NOT NULL,
  `yorumicerik_id` int(11) NOT NULL,
  `yorum_yazan` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `yorum_zaman` datetime(6) NOT NULL,
  `yorum_detay` text COLLATE utf8_turkish_ci NOT NULL,
  `yorum_durum` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `yorum`
--

INSERT INTO `yorum` (`yorum_id`, `yorumicerik_id`, `yorum_yazan`, `yorum_zaman`, `yorum_detay`, `yorum_durum`) VALUES
(5, 17, 'asdfsdfasdf', '2017-04-29 04:07:31.000000', 'asdfasdfasdfsadfasdfsadf', 1),
(6, 10, 'asfdasdf', '2017-04-29 04:07:46.000000', 'asdfasdfsdafasdfasdfasdf', 1),
(7, 18, 'asdfasfasfdsaf', '2017-04-29 15:29:27.000000', 'asdfasdfsafasfasdf', 1),
(8, 18, 'asfsdfsafd', '2017-04-29 15:30:02.000000', 'asfasdfasdfsadf', 1),
(9, 18, 'yeni', '2017-04-29 17:10:39.000000', 'yeni', 0),
(10, 18, 'şuan ekledimmmmm', '2017-04-29 17:07:56.000000', 'asdfasdfasdf', 0),
(11, 18, 'ajklsdhkasjhd', '2017-04-30 18:56:18.000000', 'lzıasdhjlashjdflajsdjk', 1),
(12, 18, 'fhtf', '2017-04-30 20:39:05.000000', 'jfjg', 0),
(13, 0, 'jh', '2017-04-30 20:46:08.000000', 'gkh', 0),
(14, 18, 'hjgjhgfh', '2017-04-30 20:46:31.000000', 'jhgjhgh', 0),
(15, 22, 'esra', '2017-05-01 15:54:50.000000', 'tebrikleeeeerrr :))))', 1);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `ayar`
--
ALTER TABLE `ayar`
  ADD PRIMARY KEY (`ayar_id`);

--
-- Tablo için indeksler `icerik`
--
ALTER TABLE `icerik`
  ADD PRIMARY KEY (`icerik_id`);

--
-- Tablo için indeksler `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Tablo için indeksler `tarih`
--
ALTER TABLE `tarih`
  ADD PRIMARY KEY (`tarih_id`);

--
-- Tablo için indeksler `uyeler`
--
ALTER TABLE `uyeler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `yorum`
--
ALTER TABLE `yorum`
  ADD PRIMARY KEY (`yorum_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `icerik`
--
ALTER TABLE `icerik`
  MODIFY `icerik_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- Tablo için AUTO_INCREMENT değeri `slider`
--
ALTER TABLE `slider`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- Tablo için AUTO_INCREMENT değeri `uyeler`
--
ALTER TABLE `uyeler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- Tablo için AUTO_INCREMENT değeri `yorum`
--
ALTER TABLE `yorum`
  MODIFY `yorum_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
