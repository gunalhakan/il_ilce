# il_ilce
php ajax il ilce uygulaması
İl ilce sql dosyasında il ve ilçelerin ayrı ayrı bulunduğu tablolar bulunur.
Öncelikle iller bir sorgu ile select elemanı içine getirildi.
Devamında istenen ile ait ilçelerin getirilmesi işlemi için jquery ve ajax dan yararlanıldı.
ajax.php dosyasına ajax ile il id si post edildi. 
ajax.php dosyasında gelen veriye göre uygun ilçeler yine sql sorgusu ile alındı ve ekrana basıldı.
ajax.php de ekrana basılan veriler anasayfa.php içinde html metodu ile select içinde alındı ve görüntülendi
