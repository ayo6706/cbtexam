 </section>
<section class="footeroption">
    <h3>Designed By: OMIDIRAN INIOLUWA DAVID - U/15/CS/208</h3>
	</section>
</div>

<!-- JQuery -->
<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="js/mdb.min.js"></script>


	
<script type="text/javascript">

(function() {
'use strict';
window.addEventListener('load', function() {
// Fetch all the forms we want to apply custom Bootstrap validation styles to
var forms = document.getElementsByClassName('needs-validation');
// Loop over them and prevent submission
var validation = Array.prototype.filter.call(forms, function(form) {
form.addEventListener('submit', function(event) {
if (form.checkValidity() === false) {
event.preventDefault();
event.stopPropagation();
}
form.classList.add('was-validated');
}, false);
});
}, false);
})();

</script>


<script>
	
	
	$(function () {
	var $password = $(".form-control[type='password']");
	var $passwordAlert = $(".password-alert");
	var $requirements = $(".requirements");
	var leng, bigLetter, num, specialChar;
	var $leng = $(".leng");
	var $bigLetter = $(".big-letter");
	var $num = $(".num");
	var $specialChar = $(".special-char");
	var specialChars = "!@#$%^&*()-_=+[{]}\\|;:'\",<.>/?`~";
	var numbers = "0123456789";
	
	$requirements.addClass("wrong");
	$password.on("focus", function(){$passwordAlert.show();});
	
	$password.on("input blur", function (e) {
	var el = $(this);
	var val = el.val();
	$passwordAlert.show();
	
	if (val.length < 8) {
	leng = false;
	}
	else if (val.length > 7) {
	leng=true;
	}
	
	
	if(val.toLowerCase()==val){
	bigLetter = false;
	}
	else{bigLetter=true;}
	
	num = false;
	for(var i=0; i<val.length;i++){
	for(var j=0; j<numbers.length; j++){
	if(val[i]==numbers[j]){
	num = true;
	}
	}
	}
	
	specialChar=false;
	for(var i=0; i<val.length;i++){
	for(var j=0; j<specialChars.length; j++){
	if(val[i]==specialChars[j]){
	specialChar = true;
	}
	}
	}
	
	console.log(leng, bigLetter, num, specialChar);
	
	if(leng==true&&bigLetter==true&&num==true&&specialChar==true){
	$(this).addClass("valid").removeClass("invalid");
	$requirements.removeClass("wrong").addClass("good");
	$passwordAlert.removeClass("alert-warning").addClass("alert-success");
	}
	else
	{
	$(this).addClass("invalid").removeClass("valid");
	$passwordAlert.removeClass("alert-success").addClass("alert-warning");
	
	if(leng==false){$leng.addClass("wrong").removeClass("good");}
	else{$leng.addClass("good").removeClass("wrong");}
	
	if(bigLetter==false){$bigLetter.addClass("wrong").removeClass("good");}
	else{$bigLetter.addClass("good").removeClass("wrong");}
	
	if(num==false){$num.addClass("wrong").removeClass("good");}
	else{$num.addClass("good").removeClass("wrong");}
	
	if(specialChar==false){$specialChar.addClass("wrong").removeClass("good");}
	else{$specialChar.addClass("good").removeClass("wrong");}
	}
	
	
	if(e.type == "blur"){
	$passwordAlert.hide();
	}
	});
	});
	
	
	</script>
	
	<script>
	
	
	$(function () {
	var $password = $(".form-control .fullname");
	var $passwordAlert = $(".password-alert");
	var $requirements = $(".requirements");
	var leng, bigLetter, num, specialChar;
	var $leng = $(".leng");
	var $bigLetter = $(".big-letter");
	var $num = $(".num");
	var $specialChar = $(".special-char");
	var specialChars = "!@#$%^&*()-_=+[{]}\\|;:'\",<.>/?`~";
	var numbers = "0123456789";
	
	$requirements.addClass("wrong");
	$password.on("focus", function(){$passwordAlert.show();});
	

	
	if(num==true){$num.addClass("wrong").removeClass("good");}
	else{$num.addClass("good").removeClass("wrong");}
	
	if(specialChar==true){$specialChar.addClass("wrong").removeClass("good");}
	else{$specialChar.addClass("good").removeClass("wrong");}
	}
	
	
	if(e.type == "blur"){
	$passwordAlert.hide();
	}
	});
	});
	
	
	</script>
</body>
</html>