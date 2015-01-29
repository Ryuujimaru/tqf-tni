function switchTo(sec_id) {
		for(var i=1;i<=7;i++){
			var f = document.getElementById('sectBt'+i);
       			f.disabled = false;
		}
		if(sec_id!=0){
       		for(var i=1;i<=7;i++){
       			var e = document.getElementById('section'+i);
       			e.style.display = 'none';
      	 	}
                  document.getElementById('comfirmDiv').style.display = 'none';
      	 	document.getElementById('section'+sec_id).style.display = 'block';
       		document.getElementById('sectBt'+sec_id).disabled = true;
      	 }
      	 else{
      	 	for(var i=1;i<=7;i++){
       			var e = document.getElementById('section'+i);
       			e.style.display = 'block';
      	 	}
                  document.getElementById('comfirmDiv').style.display = 'block';
      	 	document.getElementById('overallBt').disabled = true;
      	 }       	
}