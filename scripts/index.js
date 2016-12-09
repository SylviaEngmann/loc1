
	
	function find(str) {
		
		var find = document.getElementsByName('sel')[0].value;
		
		if(find=="restaurant"){
    window.location.href="res.html";
		}
		
		else if(find=="atm"){
			window.location.href="atm.html"
		}
		
		else if(find=="lodging"){
			window.location.href="hotel.html"
		}
}

function regComplete(xhr,status){
				if(status!="success"){
					divStatus.innerHTML="error while adding user";
					return;
				}
				
			}

function reg(){
	var name =document.getElementsByName('name')[0].value;
	var mail =document.getElementsByName('mail')[0].value;
	var num =document.getElementsByName('num')[0].value;
	var org =document.getElementsByName('org')[0].value;
	var pword =document.getElementsByName('pass')[0].value;
	
	var ajaxPageUrl= "http://52.89.116.249/~gifty.mate-kole/loc1/pageAjax.php?cmd=1&name="+name+"&pword="+pword+"&email="+mail+"&num="+num+"&org="+org;
	$.ajax(ajaxPageUrl,
				{async:true,complete:regComplete}	
				);	
}

function logComplete(xhr,status){
				
			}
			
			
function log(){
				var email = document.getElementByName("email")[0].value;
				var pword = document.getElementsByName("pword")[0].value;
				
				
				
				var PageUrl='http://52.89.116.249/~gifty.mate-kole/loc1/login.php?email='+email+"&pword="+pword;
				
				$.ajax(PageUrl,
				{async:true,complete:logComplete}	
				);
				
			}
	


function admin(str) {
		
		
    window.location.href="add.html";
		
}



			

	  

 