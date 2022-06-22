# Kuafor-Randevu-Sistemi
## PHP, MySQL, Html, CSS ve BootStrap Kullanılarak Hazırlanmış Web Tabanlı Uygulama 
### http://kuaforkayit.eu5.org/

### WEb Sitesinin Kullanımı:
İlk olarak anasayfanın sağ üst köşesinde bulunan **Kaydol** butonuna tıklanmalıdır.   
Kaydol butonuna tıklandıktan sonra açılan sayfada gerekli bilgiler doldurulup sayfanın alt kısmında bulunan **Kayıt** butonuna tıklanmalıdır.   
Eğer bütün bilgiler girildiyse sayfanın altında başarıyla kaydolunduğuna dair bir mesaj çıkacaktır.   
Kaydolunduktan sonra sayfanın üst kısmında bulunan **Üye Girişi** butonuna  tıklanıp açılan sayfada eposta ve şifre bilgilerini girerek oturum başlatılmalıdır.   
Kullanıcı Üye Girişi butonuna tıkladıktan sonra  **Hesabım** sayfasına yönlendirilicektir.   
Sayfanın üst kısmında bulunan **Saç**, **Tırnak**, **Makyaj** bölümlerine tıklandığı zaman randevu sayfasına yönlendirilecektir.   
Randevu sayfasında bulunan **Hemen Randevu Al** butonuna tıklayarak randevu almış olunmaktadır.   
Anasayfada ise kullanıcının yorum göndermesi için bir alan bulunmaktadır. Bu alandaki bütün bölümler doldurulup **Gönder** butonuna tıklanınca ekrana yorumun gönderildiğine dair mesaj çıkmaktadır.   
Hesabım sayfasında bulunan **Kisisel Bilgiler** butonuna tıklanınca sayfadaki Kişisel Bilgiler tablosunda kullanıcının kaydolurken girmiş bulunduğu bilgileri göstermektedir.Eğer kullanıcı kişisel bilgilerini düzenlemek isterse düzenlemek istediği bilgiyi ve yeni değerini tabloda bulunan textboxa örneğin **İsim : Yeni_isim** olacak şekilde yazıp **Düzenle** butonuna tıklamalıdır. Tekrardan Kişisel Bilgiler butonuna tıklanınca İsim bilgisinin değiştiği görülecektir.   
**Randevularım** butonuna tıklanınca Randevular adlı tabloda kullanıcının neye randevu aldığı bilgisi görülecektir. Randevu iptal edilmek istenirse randevu ismi tablonun altındaki textboxa örneğin **saç kesimi** şeklinde yazılmalıdır ve sonrasında **Randevu Sil** butonuna tıklanmalıdır. Tekradan randevularım butonuna tıklanıca var olan randevular gözükecektir.   
**Yorumlarım** butonuna tıklanınca da anasayfada kullanıcının oturum açmış olduğu epostayı girerek gönderdiği yorumlar Yorumlar adlı tabloda gözükecektir.   
Son olarak **Çıkış** butonuna tıklanarak oturum sonlandırılmaktadır ve kullanıcı oturum açma sayfasına yönlendirilmektedir.   


<img width="930" alt="kaydol" src="https://user-images.githubusercontent.com/75726319/174908246-2a4615b5-01b2-44b6-8eb9-4f75ef45036b.PNG">   
<img width="960" alt="uyeGirisi" src="https://user-images.githubusercontent.com/75726319/174908485-a72484ae-723b-455e-8789-fbca2bea2e9f.PNG">   
<img width="957" alt="Hesabım" src="https://user-images.githubusercontent.com/75726319/174908635-0b7553bc-029e-4627-9df1-615dceb9f31f.PNG">    
<img width="946" alt="randevu" src="https://user-images.githubusercontent.com/75726319/174908762-fde95a5c-a20d-47e4-99b0-8f2489301a8f.PNG">     
<img width="946" alt="anaSayfa" src="https://user-images.githubusercontent.com/75726319/174908841-50cf7872-0fe8-4d63-9936-30baed2f9cdc.PNG">   

### Proje Kurulumu: 

İlk olarak XAMPP kurulumu yapıp xampp klasöründen xampp-control.exe tıklayarak Apache ve Mysql'i  start butonuyla çalıştırıyoruz.    
Web tarayıcısına girip localhost:8080/phpmyadmin yazdıktan sonra açılan sayfanın sol kısımda databaselerin bulunduğu sütunun üstünde bulunan yeni yazan yere tıklıyoruz ve Veri Tabanı Adı yazan kısma 389469 yazdıktan sonra oluştur butonuna tıklıyoruz ve oluşturulan database için üst kısımda bulunan importa tıklıyoruz.     
Dosya Seç butonuna tıkladıktan sonra .sql uzantılı dosyayı seçiyoruz ve gite tıklıyoruz. Bu şekilde veri tabanı oluşturulmuş olacaktır.      
xampp klasörünün içindeki htdocs adlı klasöre .php uzantılı dosyaları ve .jpg ve .png uzantılı resimleri ekliyoruz.    
Tarayıcıda localhost:8080/index.php yazarak web sitemizin anasayfayasına giriyoruz.    

![11](https://user-images.githubusercontent.com/75726319/174917232-0b0c53b8-8668-4ff0-ae6d-ce348ff1319b.png)








