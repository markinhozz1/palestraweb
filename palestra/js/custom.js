function contador(max){
    if (ta.value.length>max) {
        ta.value = ta.value.substr(0,max);
    }else {
        ct.innerText = max - ta.value.length;
    }
}
jQuery(function($){
    $("#fone").mask("(999) 99999-9999");
});
