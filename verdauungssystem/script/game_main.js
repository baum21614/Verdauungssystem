let ohrspdrs = document.getElementById('ohrspdrs'),
untzngspdrs =  document.getElementById('untzngspdrs'),
untkfspdrs = document.getElementById('untkfspdrs'),
znge = document.getElementById('znge'),
lebr = document.getElementById('lebr'),
zwfngrdm = document.getElementById('d12fnd'),
leerdm = document.getElementById('dlernd'),
uvula = document.getElementById('uvula'),
krrmdrm = document.getElementById('dkrmnd'),
hptgllngng = document.getElementById('hptgllngng'),
gmn = document.getElementById('gmn'),
zhne = document.getElementById('zhne'),
spsroehr = document.getElementById('sprhr'),
rchn = document.getElementById('rchn'),
magen = document.getElementById('mgn'),
bspdrse = document.getElementById('bspdrse'),
bspdrsegng = document.getElementById('bspdrsegng'),
blnddnm = document.getElementById('blnddnm'),
quercolon = document.getElementById('qqkln'),
enddarm = document.getElementById('enndm'),
apndx = document.getElementById('apndx'),
gallenblase = document.getElementById('gllnbls'),
absteigndcln = document.getElementById('abstcln'),
aufsteigndcln = document.getElementById('afstcln');
let checkbtn = document.getElementById('checkansw');

$(checkbtn).click(function check(){
    checkbtn.classList.add('inact'); 
    if($(ohrspdrs).val()=='Ohrspeicheldrüße'){
        $(ohrspdrs).toggleClass('corr');
        $(ohrspdrs).toggleClass('corrohr');
    }else{
        $(ohrspdrs).toggleClass('wrng');
    }
    if($(untzngspdrs).val()=='Unterzungenspeicheldrüße'){
        $(untzngspdrs).toggleClass('corr');
        $(untzngspdrs).toggleClass('corruntzn');
    }else{
        $(untzngspdrs).toggleClass('wrng');
    }
    if($(untkfspdrs).val()=='Unterkieferspeicheldrüße'){
        $(untkfspdrs).toggleClass('corr');
        $(untkfspdrs).toggleClass('corruntkf');
    }else{
        $(untkfspdrs).toggleClass('wrng');
    }
    if($(znge).val()=='Zunge'){
        $(znge).toggleClass('corr');
        $(znge).toggleClass('corrznge');
    }else{
        $(znge).toggleClass('wrng');
    }
    if($(lebr).val()=='Leber'){
        $(lebr).toggleClass('corr');
        $(lebr).toggleClass('corrlebr');
    }else{
        $(lebr).toggleClass('wrng');
    }
    if($(zwfngrdm).val()=='Zwölffingerdarm'){
        $(zwfngrdm).toggleClass('corr');
        $(zwfngrdm).toggleClass('corrzlffngr');
    }else{
        $(zwfngrdm).toggleClass('wrng');
    }
    if($(leerdm).val()=='Leerdarm'){
        $(leerdm).toggleClass('corr');
        $(leerdm).toggleClass('corrleer');
    }else{
        $(leerdm).toggleClass('wrng');
    }
    if($(uvula).val()=='Uvula'){
        $(uvula).toggleClass('corr');
        $(uvula).toggleClass('corruvula');
    }else{
        $(uvula).toggleClass('wrng');
    }
    if($(krrmdrm).val()=='Krummdarm'){
        $(krrmdrm).toggleClass('corr');
        $(krrmdrm).toggleClass('corrkrumm');
    }else{
        $(krrmdrm).toggleClass('wrng');
    }
    if($(hptgllngng).val()=='Hauptgallengang'){
        $(hptgllngng).toggleClass('corr');
        $(hptgllngng).toggleClass('hptgll');
    }else{
        $(hptgllngng).toggleClass('wrng');
    }
    if($(gmn).val()=='Gaumen'){
        $(gmn).toggleClass('corr');
        $(gmn).toggleClass('corrgmn');
    }else{
        $(gmn).toggleClass('wrng');
    }
    if($(zhne).val()=='Zähne'){
        $(zhne).toggleClass('corr');
        $(zhne).toggleClass('corrzhne');
    }else{
        $(zhne).toggleClass('wrng');
    }
    if($(spsroehr).val()=='Speiseröhre'){
        $(spsroehr).toggleClass('corr');
        $(spsroehr).toggleClass('corrspsr');
    }else{
        $(spsroehr).toggleClass('wrng');
    }
    if($(rchn).val()=='Rachen'){
        $(rchn).toggleClass('corr');
        $(rchn).toggleClass('corrrchn');
    }else{
        $(rchn).toggleClass('wrng');
    }
    if($(magen).val()=='Magen'){
        $(magen).toggleClass('corr');
        $(magen).toggleClass('corrmgn');
    }else{
        $(magen).toggleClass('wrng');
    }
    if($(bspdrse).val()=='Bauchspeicheldrüße'){
        $(bspdrse).toggleClass('corr');
        $(bspdrse).toggleClass('corrbspdr');
    }else{
        $(bspdrse).toggleClass('wrng');
    }
    if($(bspdrsegng).val()=='Bauchspeicheldrüßengang'){
        $(bspdrsegng).toggleClass('corr');
        $(bspdrsegng).toggleClass('corrbspdrgng');
    }else{
        $(bspdrsegng).toggleClass('wrng');
    }
    if($(blnddnm).val()=='Blinddarm'){
        $(blnddnm).toggleClass('corr');
        $(blnddnm).toggleClass('corrblndm');
    }else{
        $(blnddnm).toggleClass('wrng');
    }
    if($(quercolon).val()=='Quercolon'){
        $(quercolon).toggleClass('corr');
        $(quercolon).toggleClass('corrqq');
    }else{
        $(quercolon).toggleClass('wrng');
    }
    if($(enddarm).val()=='Enddarm'){
        $(enddarm).toggleClass('corr');
        $(enddarm).toggleClass('corrend');
    }else{
        $(enddarm).toggleClass('wrng');
    }
    if($(apndx).val()=='Appendix'){
        $(apndx).toggleClass('corr');
        $(apndx).toggleClass('corrapx');
    }else{
        $(apndx).toggleClass('wrng');
    }
    if($(gallenblase).val()=='Gallenblase'){
        $(gallenblase).toggleClass('corr');
        $(gallenblase).toggleClass('corrgllnbl');
    }else{
        $(gallenblase).toggleClass('wrng');
    }
    if($(absteigndcln).val()=='Absteigendes Colon'){
        $(absteigndcln).toggleClass('corr');
        $(absteigndcln).toggleClass('corrabcl');
    }else{
        $(absteigndcln).toggleClass('wrng');
    }
    if($(aufsteigndcln).val()=='Aufsteigendes Colon'){
        $(aufsteigndcln).toggleClass('corr');
        $(aufsteigndcln).toggleClass('corrafcl');
    }else{
        $(aufsteigndcln).toggleClass('wrng');
    }
    var e = document.getElementById("checkansw");
    e.style.display='none';
    document.getElementById('checkgoon').style.display="block"
});
$('#checkgoon').click(function message(){
    document.getElementById('checkgoon').style.display="none"
    if($(aufsteigndcln).hasClass("corrafcl") && $(absteigndcln).hasClass("corrabcl") && $(gallenblase).hasClass("corrgllnbl") && $(apndx).hasClass("corrapx") && $(enddarm).hasClass("corrend") && $(quercolon).hasClass("corrqq") && $(blnddnm).hasClass("corrblndm") && $(bspdrsegng).hasClass("corrbspdrgng") && $(bspdrse).hasClass("corrbspdr") && $(magen).hasClass("corrmgn") && $(rchn).hasClass("corrrchn") && $(spsroehr).hasClass("corrspsr") && $(zhne).hasClass("corrzhne") && $(gmn).hasClass("corrgmn") && $(hptgllngng).hasClass("hptgll") && $(krrmdrm).hasClass("corrkrumm") && $(uvula).hasClass("corruvula") && $(leerdm).hasClass("corrleer") && $(zwfngrdm).hasClass("corrzlffngr") && $(lebr).hasClass("corrlebr") && $(znge).hasClass("corrznge") && $(untkfspdrs).hasClass("corruntkf") && $(untzngspdrs).hasClass("corruntzn") && $(ohrspdrs).hasClass("corrohr")) {
        document.getElementById("grt1").style.display = "initial";
    }else{
        document.getElementById("grt2").style.display = "initial";
    }
});
