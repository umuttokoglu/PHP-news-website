function test(yazi){

    if(yazi.value==""){
        alert("Formda boş alan bırakamazsınız!");

    }
}

function sonuc(kayiit){

    var kullanici=document.forms["kayiit"]["kullanici"].value;

    if (kullanici=="" || kullanici==null){
        alert("İsim Alanını Boş Bıraktınız!");
        document.forms["kayiit"]["kullanici"].focus();
        return false;
    }

    var email=document.forms["kayiit"]["email"].value;

    if (email=="" || email==null){
        alert("E-Posta Alanını Boş Bıraktınız!");
        document.forms["kayiit"]["email"].focus();
        return false;
    }
   
    var sifre=document.forms["kayiit"]["sifre"].value;

    if (sifre=="" || sifre==null){
        alert("Telefon Numarası Alanını Boş Bıraktınız!");
        document.forms["kayiit"]["sifre"].focus();
        return false;
    }


    else{
         alert("Formuda Boş Alanınız Kalmadı. Gönderiliyor...");}
}

        





     /*  <html>
           function isValid(kayiit)
            {
                var kullanici = kayiit.kullanici.value;
				var sifre = kayiit.sifre.value;
                var email = kayiit.email.value;
                var atpos=email.indexOf("@");
                var dotpos=email.lastIndexOf(".");

                if ( kullanici==null || kullanici=="" || kullanici.length <4 )
                {
                    alert("Kullanıcı adı 4 karakterden az olamaz.");
                    return false;
                }
				
                if ( kullanici==null || kullanici=="")
                {
                    alert("Kullanıcı adını boş bırakmayınız.");
                    return false;
                }
				
				
                if ( sifre == null || sifre == "")
                {
                    alert("Şifreyi boş bırakmayınız.");
                    return false;
                }
               
                if ( atpos<1 || dotpos<atpos+2 || dotpos+2>=email.length )
                {
                    alert("Geçerli bir e-mail adresi giriniz.");
                    return false;
                }      
                return true;
            } 
        </script>  */