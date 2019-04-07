</body>

<footer class="page-footer font-small sticky-bottom" style="background-color: rgb(120, 160, 165) !important;">
	<div class="footer-copyright text-center py-3 text-white">© 2018 Copyright:
		<a href="https://mdbootstrap.com/education/bootstrap/" style="color: black;"> SMK BINA UTAMA KENDAL</a>
	</div>
</footer>

<script type="text/javascript">
	$(".form-orangtua").hide();
	$(".form-wali").hide();

	$(document).ready(function(){
		$(".btn-orangtua").click(function(){
			$(".form-orangtua").show();
			$(".form-wali").hide();
		});
	});
	$(document).ready(function(){
		$(".btn-wali").click(function(){
			$(".form-wali").show();
			$(".form-orangtua").hide();
		});
	});
</script>

</html>