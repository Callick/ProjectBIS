function plusminusCheck() {
    if (document.getElementById('plusCheck').checked) {
        document.getElementById('ifPlus').style.visibility = 'visible';
        document.getElementById('ifMinus').style.visibility = 'hidden';
    }
    else if (document.getElementById('minusCheck').checked){
    	document.getElementById('ifMinus').style.visibility = 'visible';
    	document.getElementById('ifPlus').style.visibility = 'hidden';
    }else{
    	document.getElementById('ifPlus').style.visibility = 'hidden';
    	document.getElementById('ifMinus').style.visibility = 'hidden';
    }

}
