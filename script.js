$(document).ready(function() {
  $(".modal").modal();
});

$(document).ready(function() {
  $("select").formSelect();
});

function Sil(id,sekil) {
  swal({
    title: "Əminsinizmi?",
    text: "Silinən informasiyalar geri qaytarılmır!",
    icon: "warning",
    buttons: true,
    dangerMode: true
  }).then(willDelete => {
    if (willDelete) {
     location.href = `index.php?sil=ok&id=${id}&sekil=${sekil}`;
    } else {
      swal("Əməliyyatdan imtina edildi!");
    }
  });
}


function Bax(AdSoyad,haqqinda){
  document.getElementById("bax_ad").innerHTML = AdSoyad;
  document.getElementById("bax_haq").innerHTML = haqqinda;
}



function Gotur(i,id){

  let cls = document.getElementsByClassName("isciler");
  let isci = document.getElementsByClassName("isci");
  let sekil = cls[i].getElementsByTagName("td")[1].getElementsByTagName("img")[0].src;
  let AdSoyad = cls[i].getElementsByTagName("td")[2].textContent;
  let Vezife = cls[i].getElementsByTagName("td")[3].textContent;
  let maas = cls[i].getElementsByTagName("td")[4].textContent;
  let email = cls[i].getElementsByTagName("td")[5].textContent;
  let av = cls[i].getElementsByTagName("td")[6].textContent;
  let haqqinda = document.getElementsByClassName("haqqinda")[i].textContent;


  let regexp = /\d/g;

 isci[0].src = sekil;
 isci[1].value = AdSoyad;
 isci[2].value = Vezife;
 isci[3].value = maas.match(regexp).join('');
 isci[4].value = email;
 
 console.log(av);
 if(av == "Evli"){
  console.log("Yes");
   isci[5].getElementsByTagName("option")[1].selected = true;
 }
 else{
  isci[5].getElementsByTagName("option")[2].selected = true;
 }
 
 isci[6].textContent = haqqinda;


 document.getElementById("id").value = id;
 document.getElementById("k_sekil").value = sekil;

}