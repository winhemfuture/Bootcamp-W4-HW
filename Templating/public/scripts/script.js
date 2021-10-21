alert("!!!!!");

var liste=["kagit.png","makas.png","tas.png"];
var kagit=document.getElementById("kagit");
var makas=document.getElementById("makas");
var tas=document.getElementById("tas");
var pcSecim=document.getElementById("pc-secim");
var sonucYazdir=document.getElementById("sonuc");
 
 
kagit.onclick=secimYap;
makas.onclick=secimYap;
tas.onclick=secimYap;
 
 
function secimYap(){
var pc= RasgeleKagit();
 
var secim= this.dataset.id;
if(pc==0 && secim==0)
{
sonuc="ikinizde aynı seçimi yaptınız";
}
else if(pc==0 && secim==1)
{
sonuc="Kazandın, makas kağıdı keser";
}
else if(pc==0 && secim==2)
{
sonuc="Kaybettin, kağıt taşı sarar";
}
else if(pc==1 && secim==0)
{
sonuc="Kaybettin, makas kağıdı keser";
}
else if(pc==1 && secim==1)
{
sonuc="ikinizde aynı seçimi yaptınız";
}
else if(pc==1 && secim==2)
{
sonuc="Kazandın, Taş makası kırar";
}
else if(pc==2 && secim==0)
{
sonuc="Kazandın, kağıt taşı sarar";
}
else if(pc==2 && secim==1)
{
sonuc="Kaybettin, Taş makası kırar";
}
else if(pc==2 && secim==2)
{
sonuc="ikinizde aynı seçimi yaptınız";
}
 
sonucYazdir.innerHTML=sonuc;
}
 
function RasgeleKagit(){
var sayi= Math.round(Math.random()*2);
pcSecim.src=liste[sayi]; 
 
return sayi;
}