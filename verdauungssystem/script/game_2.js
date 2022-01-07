let ques1 = document.getElementById("qs1aw"),
snd1 = document.getElementById("sendqs1");
// un weil jquery

function checkForInput(){
    if($(ques1).val() != "" || $("#year").val() != null){
        $(".contentques input[type='submit']").css("opacity", "1");
        $(".contentques input[type='submit']").css("pointer-events", "all");
    }
}
$(ques1).each(function() {
    checkForInput(this);
});
$(ques1).on('change keyup', function() {
    checkForInput(this);  
});

$("#dicescel").click(function(){
    $(this).css("opacity", "0.5");
    $(this).css("pointer-events", "none");
    $("#path20716").addClass("completedzm");
});

function checkForInput2(){
    if($("#schrf").checked || $("#sar").checked || $("#slzg").checked || $("#suss").checked){
        $(".contentques input[type='submit']").css("opacity", "1");
        $(".contentques input[type='submit']").css("pointer-events", "all");
    }
}
$("#chbx").each(function() {
    checkForInput2(this);
});
$("#chbx").on('change keyup', function() {
    checkForInput2(this);  
});


$(snd1).click(function(){
    if($(ques1).val()=='32'){
        $("#qs1aw").addClass("corr");
        $(snd1).css("opacity", "0.5");
        $(snd1).css("pointer-events", "none");
        $(snd1).css("border", "1px solid #5ac77b");
        $(snd1).css("color", "#5ac77b");
        $("#dicescel").css("opacity", "1");
        $("#dicescel").css("pointer-events", "all");
    }
    else{
        $("#qs1aw").addClass("wrng");
        $(snd1).css("opacity", "0.5");
        $(snd1).css("pointer-events", "none");
        $(snd1).css("border", "1px solid #f56353");
        $(snd1).css("color", "#f56353");
        $("#dicescel").css("opacity", "1");
        $("#dicescel").css("pointer-events", "all");
    }
    $("#dicescel").css("transform","scale(0)");
    $("#dicescel1").css("transform","scale(1)");
});

$("#dicescel1").click(function(){
    alert("BT2.press");
    $(this).css("opacity", "0.5");
    $(this).css("pointer-events", "none");
    $("#path20716").removeClass("completedzm");
    $("#md11q1").removeClass("degga");
    $("#path19072").addClass("completedzm");
    $("#md22q1").addClass("degga");
});