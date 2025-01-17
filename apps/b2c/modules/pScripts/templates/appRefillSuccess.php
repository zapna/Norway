<?php use_helper('I18N') ?>
<?php use_helper('Number') ?>

<?php
$customer_form = new CustomerForm($customer);
$customer_form->unsetAllExcept(array('auto_refill_amount', 'auto_refill_min_balance'));

$is_auto_refill_activated = $customer_form->getObject()->getAutoRefillAmount()!=null;
?>
<style>

@charset "utf-8";
/* CSS Document */
* {margin:0px;padding:0px;}
body {font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#000}
#wrap {width:780px;margin:0px auto;}
#header {width:780px;height:119px;}
#logo {width:168px; height:79px; float:left;}
#logo h1 {width:168px; height:79px;float:left;padding-top:25px;}
#logo h1 a{width:168px; height:79px;float:left;display:block; background-image:url(../images/logo.jpg); background-repeat:no-repeat; overflow:hidden; text-indent:9000em; white-space:nowrap;}
#nav {width:515px; float:right; padding-top:68px; padding-bottom:39px; position:relative;}
#nav ul{ display:inline; list-style:none; float:right; width:100%; position:absolute; right:-60px;}
#nav ul li{display:inline; list-style:none; margin-right:0px; background-image:url(../images/nav-divider.jpg); background-repeat:no-repeat; padding-right:19px; background-position:right center}
#nav ul li.last{ padding-right:0px; background:none;}
/*#nav ul li a{ color:#414141; text-decoration:none;}
#nav ul li a:hover{ color:#005cac; text-decoration:none;}
#nav ul li a.selected{ color:#005cac; text-decoration:none;}
#nav ul li a.selected:hover{ color:#005cac; text-decoration: none;}*/
.homepage{ width:780px; height:267px; float:left; background-color:#d86327; position: relative;}
#price-calculator{ width:205px; height:172px; position: absolute; right:33px; top:28px; background-image: url(../images/price-cal-bg.png); background-repeat:no-repeat; padding:20px; z-index:2}
#price-calculator ul{ list-style:none;}
#price-calculator ul li{ list-style:none; width:205px;}
#price-calculator ul li select{ font-size:24px; width:205px; margin-bottom:30px;}
#price-calculator ul li.price{ font-size:18px; color:#fff; padding-bottom:10px;}
#price-calculator ul li.price .fl{ float:left;}
#price-calculator ul li.price .fr{ float:right;}
.homepage-aux{ position: relative; width:780px; float:left; clear:both; margin-top:; background-image: url(../images/hp-aux.png); background-repeat:no-repeat; height:124px; margin-top:20px;}
.bliv-kunde-white{ background-image:url(../images/bliv-kunde.png); width:132px; height:50px; background-repeat:no-repeat; position:absolute; right:13px; top:38px;overflow:hidden; text-indent:9000em; white-space:nowrap;}
#homepage-box-row{ width:780px; float:left; clear:both; overflow:hidden; margin-top:20px; margin-bottom:20px;}
#homepage-box-row .box{ width:232px; height:106px; padding:10px; float:left; margin-right:11px;}
#homepage-box-row .box-a{background-image:url(../images/bg-box-a.png); background-repeat:no-repeat;}
#homepage-box-row .box-b{background-image:url(../images/bg-box-b.png); background-repeat:no-repeat;}
#homepage-box-row .box-c{background-image:url(../images/bg-box-c.png); background-repeat:no-repeat;}
#homepage-box-row .box h3{ color:#d86327; font-size:18px;}
#homepage-box-row .box h3 span{ color:#000;}
#homepage-box-row .box small{ font-size:11px;}
#homepage-box-row .box p{ margin-top:5px; margin-bottom:20px; font-size:11px;}
#homepage-box-row .box a{ background-image:url(../images/bg-greenbutton-.png); background-position:0px 0px; color:#fff; font-size:10px; background-repeat:no-repeat; display:block; text-decoration:none; padding-left:5px;width:75px;}
#homepage-box-row .box a span{ background-image:url(../images/bg-greenbutton-.png); background-position:right top; background-repeat:no-repeat; display:block; padding:3px 5px 3px; width:75px;}
#homepage-box-row .box-last{ margin:0px;}
#footer{ width:100%; background-image: url(../images/bg-footer.png); padding-top:26px; padding-bottom:26px; float:left;}
.fl{ float:left;}
.fr{ float:right;}
.cb{ clear:both;}
.footer{ width:780px; margin:0px auto;}
.footer ul{ margin:0px; list-style:none;}
.footer ul li{ margin-bottom:7px;color:#000;}
.footer a{ text-decoration:none; font-size:10px; color:#000;}
.footer a:hover{ text-decoration:underline;}
.cite{width:780px;margin:10px auto; top:10px; position:relative;}
/*jcarousel skin don't modify or you'll be sorry*/
.jcarousel-skin-tango .jcarousel-container {position:absolute;z-index:0;}
.jcarousel-skin-tango .jcarousel-container-horizontal {width: 780px;padding: 0px;}
.jcarousel-skin-tango .jcarousel-container-vertical {width: 75px;height: 245px;padding: 0px;}
.jcarousel-skin-tango .jcarousel-clip-horizontal {width:  780px;height: 268px;}
.jcarousel-skin-tango .jcarousel-clip-vertical {width:  75px;height: 245px;}
.jcarousel-skin-tango .jcarousel-item {width: 780px;height: 268px;}
.jcarousel-skin-tango .jcarousel-item-horizontal {margin-right: 10px;}
.jcarousel-skin-tango .jcarousel-item-vertical {margin-bottom: 10px;}
.jcarousel-skin-tango .jcarousel-item-placeholder {background: #fff;color: #000;}
.jcarousel-control {position: absolute;z-index:100;bottom:2px;left:0px;border-right:1px solid #999999;padding-top:5px;padding-bottom:5px;}
.jcarousel-control a {font-family:Georgia, "Times New Roman", Times, serif;color:#fff;font-size:18px;padding:5px;border-top:1px solid #999999;border-right:0px;border-bottom:1px solid #999999;	border-left:1px solid #999999;margin:0px;text-decoration:none;outline:none}

#login-modal{ background-image:url(../images/bg-login.jpg); background-repeat:no-repeat; width:381px; height:200px; padding:20px;}
#login-modal h4{ margin-bottom:20px; font-size:14px;}
.input{ width:140px; font-size:12px; padding:3px; border:1px solid #999999; margin-bottom:10px;}
#login-modal label{ font-size:12px;}
.loginbuttun{ background-image:url(../images/bg-login-btn.jpg); width:77px; height:28px;  font-size:13px; border:0px; color:#fff; padding-bottom:7px; padding-top:5px;}
#login-modal button{ background-image:url(../images/bg-login-btn.jpg); width:77px; height:28px;  font-size:13px; border:0px; color:#fff; padding-bottom:7px; padding-top:5px;}
#login-modal p{ margin-bottom:18px;}
.login-left{ float:left; width:152px;}
.login-right{ float:left; width:200px; padding-left:20px;}
.luk{ font-size:12px; color:#999999; cursor:pointer;}

#nav ul li a.logout{ color:#d86327}
#inner-page{ width:780px; height:119px; background-image:url(../images/sub-page-bg.jpg); background-repeat:no-repeat; position:relative;}
#inner-page h2{ font-size:26px; color:#FFF; position:absolute; bottom:5px; left:5px}
#inner-page h2 span{ font-size:20px;}
.left-col{ width:300px; padding-right:5px; float:left; padding-top:10px;}
.right-col{ width:0px; float:left; padding-top:10px}
/*.right-col .box{ width:232px; height:106px; padding:10px; float:left; margin-right:11px;}*/
.right-col .box  {
float:left;
height:156px;
margin-right:8px;
padding:30px 10px 20px;
width:232px;
}
.right-col .box-a{background-image:url(../images/bg-box-a.png); background-repeat:no-repeat;}
.right-col .box-b{background-image:url(../images/bg-box-b.png); background-repeat:no-repeat;}.right-col .box-c{background-image:url(../images/bg-box-c.png); background-repeat:no-repeat;}
/*.right-col .box h3{ color:#d86327; font-size:18px;}
.right-col .box h3 span{ color:#000;}*/
.right-col .box small{ font-size:11px;}
.right-col .box p{ margin-top:5px; margin-bottom:20px; font-size:11px;}
.right-col .box a{ background-image:url(../images/bg-greenbutton-.png); background-position:0px 0px; color:#fff; font-size:10px; background-repeat:no-repeat; display:block; text-decoration:none; padding-left:5px;width:75px;}
.right-col .box a span{ background-image:url(../images/bg-greenbutton-.png); background-position:right top; background-repeat:no-repeat; display:block; padding:3px 5px 3px; width:75px;}
.right-col .box-last{ margin:0px;}
.dash-nav{ width:520px; float:left;}
.dash-nav a{ width:78px; height:58px; float:left; overflow:hidden; display:block; text-indent:9000em; white-space:nowrap; background-image:url(../images/dash-nav-sprite.gif); background-repeat:no-repeat; margin-right:7px;}
.dash-nav a.dashboard{ background-position:0px 0px}
.dash-nav a.dashboard:hover{ background-position:-85px 0px}
.dash-nav a.dashboard-s{ background-position:-85px 0px}

.dash-nav a.refil{ background-position:0px -57px}
.dash-nav a.refil:hover{ background-position:-85px -57px}
.dash-nav a.refil-s{ background-position:-85px -57px}

.dash-nav a.callhistory{ background-position:0px -115px}
.dash-nav a.callhistory:hover{ background-position:-85px -115px}
.dash-nav a.callhistory-s{ background-position:-85px -115px}

.dash-nav a.paymenthistory{ background-position:0px -172px}
.dash-nav a.paymenthistory:hover{ background-position:-85px -172px}
.dash-nav a.paymenthistory-s{ background-position:-85px -172px}

.dash-nav a.settings{ background-position:0px -229px}
.dash-nav a.settings:hover{ background-position:-85px -229px}
.dash-nav a.settings-s{ background-position:-85px -229px}

.dash-nav a.websms{ background-position:0px -287px}
.dash-nav a.websms:hover{ background-position:-85px -287px}
.dash-nav a.websms-s{ background-position:-85px -287px}

.split-form{padding-top:20px; float:left; clear:both; width:280px; padding-bottom:30px;}
.col{width:250px; float: left; position: relative}
.split-form ul{list-style:none;}
.split-form ul li{list-style:none; margin-bottom:10px; float:left; clear:both;width:250px; white-space:nowrap; z-index:100; position:relative; }
.split-form ul li label{width:120px; float:left; padding-top:3px; font-weight:normal; }
.split-form ul li input{width:120px; border:1px solid #999999; font-size:11px; padding:3px;}
.split-form ul li select{width:110px; border:1px solid #999999;font-size:11px; padding:3px; }
.split-form ul li select.strselect{width:35px;font-size:11px; padding:3px; }
.split-form ul li select.quater{width:55px; border:1px solid #999999;font-size:11px; padding:3px; margin-right:3px; }
.split-form ul li input.chkbx{width:20px; padding:0px; border:0px}
.split-form ul li.fr {float:right;width:250px; text-align:right;}
.buton{ background-image:url(../images/btn-dashboard.jpg);border:0px;color:#FFFFFF;font-size:22px;width:133px; height:36px; margin-top:20px;float:left;}
.butonsignin{  background-image:url("../images/button-orange-big.png");border:0 none;color:#FFFFFF;font-size:22px;height:48px;width:132px;float:right;margin-right:40px;}
.settingbutton{ background-image:url(../images/btn-dashboard.jpg);border:0 none;color:#FFFFFF;font-size:22px;width:133px; height:36px; margin-top:20px;float:right;}
.dashboard-info{min-height:400px; float:left; width:100%;}
.dashboard-info-text{ width:100%; padding-top:20px; font-size:30px;}
.dashboard-info-text span{ padding-right:20px;}
.dashboard-info button{ background-image:url(../images/btn-dashboard.jpg);border:0 none;color:#FFFFFF;font-size:22px;padding-bottom:7px;padding-top:5px;width:132px; float:right; height:36px; margin-top:10px;}
.callhistory{ width:515px;}
.callhistory tr{ border-bottom:1px solid #999999;}
.callhistory td.title{ font-size:18px;}
.callhistory td{ padding:10px;border-bottom:1px solid #999999; font-size:12px;}
.callhistory td small{ font-size:11px;}

a.receipt{ background-image:url(../images/green-bullet.jpg); background-repeat:no-repeat; padding-left:15px; float:left; display:block; text-decoration:none; color:#000;}

.split-form-sign-up{padding-top:20px; float:left; clear:both; width:750px; padding-bottom:30px; min-height:382px; background-image:url(../images/bg-map-sign-up.jpg); background-repeat:no-repeat; background-color:#d86327; padding-top:20px; padding-left:30px; margin-bottom:10px;}
.split-form-sign-up .col{width:314px; float: left; position: relative}
.split-form-sign-up ul{list-style:none;}
.split-form-sign-up ul li{list-style:none; margin-bottom:10px; float:left; clear:both;width:350px; white-space:nowrap; z-index:100; position:relative; color:#fff;}
.split-form-sign-up ul li label{width:130px; float:left; padding-top:3px; font-weight:bold; color:#fff; }
.split-form-sign-up ul li input{width:130px; border:1px solid #999999; font-size:11px; padding:3px;}
.split-form-sign-up ul li select{width:137px; border:1px solid #999999;font-size:11px; padding:3px; }

.split-form-sign-up ul li select.quater{width:55px; border:1px solid #999999;font-size:11px; padding:3px; margin-right:3px; }
.split-form-sign-up ul li input.chkbx{width:20px; padding:0px; border:0px; float:left;}
.split-form-sign-up ul li input.radbx{width:20px; padding:0px; border:0px; float:left;}
.split-form-sign-up ul li.fr {width:285px; text-align:right;}
.split-form-sign-up ul li.buttonplacement{ position: relative; right:14px;}
.loginbuttun{ background-image:url(../images/bg-login-btn.jpg); width:77px; height:28px;  font-size:13px; border:0px; color:#fff; padding-bottom:7px; padding-top:5px;}
.loginbuttun{ width:77:!important; }
.split-form-sign-up ul li button{ background-image:url("../images/button-orange-big.png");border:0 none;bottom:-70px;color:#FFFFFF;font-size:22px;height:48px;margin-top:20px;padding-bottom:7px;padding-top:5px;width:132px;}

.step-details{ width:100%; float:left; clear:both; padding-bottom:20px;}
.step-details strong{ color:#fff; font-size:18px;}
.step-details span.active{ color:#fff;}
.step-details span.inactive{ color:#686868}

.signup-steps{float:left; clear:both; width:780px; overflow:hidden;}
.signup-steps small{ font-size:12px; display:block; padding-bottom:10px; float:left; width:100%;}
.signup-steps span{ font-size:16px; font-weight:bold; display:block; padding-bottom:10px; float:left; width:100%;}
.signup-steps p{ font-size:10px; display:block;float:left; width:100%;}
.step1, .step2, .step3, .support{ margin-right:16px;background-image:url(../images/sign-up-step-bg.jpg); background-repeat:no-repeat; float:left;width:142px; height:121px;padding:20px;}
.support{ margin-right:0px;}
.signup-steps div.inactive{ opacity:0.5;}
.signup-steps div.acive{ opacity:1.0;}
.signup-steps div.support{ opacity:1.0;}
.split-form-sign-up ul li label.ac{ text-align:center; padding-bottom:5px; border-bottom:1px solid #fff; text-align: right;}
.split-form-sign-up ul li.bdr{border-bottom:1px solid #fff;}
.split-form-sign-up .buttonplacement2 button{ background-image:url("../images/button-orange-big.png");border:0px;color:#FFFFFF;font-size:22px;height:48px;width:132px;float:right;}

/*.split-form-sign-up ul li.error{ background-color:#fff899; float:left; width:270px; padding:3px; color:#000000; white-space: normal;}*/
.split-form-sign-up ul li.error {
background:#D88256 url(http://zerocall.com/b2c/images/../zerocall/images/decl.png) no-repeat scroll 4px 50%;
border:1px solid #D84A00;
clear:both;
color:#FFFFFF;
display:block;
margin-bottom:5px;
margin-top:5px;
padding:5px 5px 5px 30px;
white-space:normal;
width:270px;
}
.split-form-sign-up ul li.error label{ color:#000000;}
.split-form-sign-up ul li.error input.error{ color:#FF0000}

.split-form-sign-up ul li.error ul.error_list li{ color:#000000;}

.split-form ul li.error{ background-color:#fff899; float:left; width:245px; padding:3px; color:#000000}
.split-form ul li.error label{ color:#000000;}
.split-form ul li.error input.error{ color:#FF0000}

/* symfony related changes by sadi */

ul.paging {
	float: left;
	width:100%;

	text-align: center;
}

ul.paging li {
	float: float;
	padding: 3px;
	border:1px solid #CC441A;
	margin:0 5px;
	background:#E88937;
	width: 15px;
	clear: none;
	-moz-border-radius: 2px;
}

ul.paging li a {
	color:	#CD481D;
	text-align: center;
	display:block;
	width: 100%;
	height: 100%;
}

ul.paging li.selected a {
	color:	#fff;
	text-decoration: none;
}

ul.paging li.selected{
	background: #CD481D;
	color: white;
}

div.footer ul li {
	display: block;
}
.split-form-sign-up ul li ul.radio_list{
	display: inline;
}
.split-form-sign-up ul li ul.radio_list li{
	float:left;
	width:50px;
	display:inline;
	clear:none!important;
	padding-top:4px;
}

.split-form-sign-up ul li ul.radio_list li label{
	float:none;
}

.right-col .box-1 {
background-image:url("../images/bg-box-b.png");
background-repeat:no-repeat;
}

.right-col .box-0 {
background-image:url("../images/bg-box-a.png");
background-repeat:no-repeat;
}

.right-col .box h3 {
color:#FFFFFF;
font-size:24px;
margin-bottom:20px;
}

.right-col .box p {
clear:both;
color:#7E7E7E;
float:left;
font-size:11px;
margin-bottom:10px;
margin-top:5px;
width:135px;
}

.right-col .box a {
background-image:url("../images/bg-greenbutton-.png");
background-position:0 0;
background-repeat:no-repeat;
clear:both;
color:#FFFFFF;
display:block;
float:left;
font-size:10px;
padding-left:5px;
text-decoration:none;
width:75px;
}

#sidebar {
float:right;
margin-top:15px;
overflow:hidden;
width:252px;
}

.alert{
	position: relative;
	top: 3px;

	display: none;
}

.alert img {
	width: 14px;
	height: 14px;
}
.alertstep1{
	position: relative;
	top: 3px;


}

.alertstep1 img {
	width: 14px;
	height: 14px;
}

.ok {
	padding-top: 2px;
	background-image:url("../images/ok.png");
	background-position:0 0;
	background-repeat:no-repeat;
	width:16px;
	height:16px;
}

.decl {
	padding-top: 2px;
	background-image:url("../images/decline.jpeg");
	background-position:0 0;
	background-repeat:no-repeat;
	width:16px;
	height:16px;
}

.inline-error{
	color:#FFFFFF;
	float:right;
	margin-right:83px;
	text-align:right;
	white-space:normal;
}

.split-form-sign-up ul li select.shrinked_select_box {
	width: 40px!important;
	padding: 2px;
}

#customer_date_of_birth_year
{
	width: 51px!important;
}

.alert_bar {
	border: 1px solid #FFCD02;
	-moz-border-radius: 0 0 5px 5px;
	line-height: 31px;
	background:#FFFFCC url(../../images/alert.png) 5px 5px no-repeat;
	padding-left: 28px;
}

/*footer changes */

#homepage-box-row-footer {
	margin:0 auto;
	width:780px;
}

.footer-inner {
float:left;
width:252px;
}

.footer-inner ul {
list-style:none outside none;
margin:0;
}

.footer-inner ul li {
color:#000000;
margin-bottom:7px;
}


/*end footer */

.callhistory td {
	white-space: normal;
}

button {
	cursor: pointer;
}

ul li.error
{
	whitespace: normal;
}

.cite #sec
{
	margin-left: 10px;
}

#nav2, #nav2 ul {
	display:blocl; list-style:none; float:left;
}
#nav2 li {
	float: left;
	list-style:none;
	background-image:url(images/nav-divider.jpg); background-repeat:no-repeat; padding-right:19px; background-position:right center;
}
#nav2 li ul li {
	float: left;
	list-style:none;
	padding-right:19px;
	background-image:none;
}
#nav2 li.last{ padding-right:0px; background:none;}
#nav2 a,#nav2 a:visited {
	color:#414141;
	display:block;
	text-decoration:none;
}
#nav2 a:active {
	text-decoration:none;
}
#nav2 a:hover {
	text-decoration:none;
}

#nav2 li ul {
	padding-top:15px;
	height: auto;
	position: absolute;
	left:0px;
	width: 515px;
	display:none;
}

#nav2 li li {
	width: auto;
}

#nav2 li li a, #nav2 li li a:visited{
	color:#414141;
	display:block;
	text-decoration:none;
}

#nav2 li li a:hover,#nav2 li li a:active  {
	color:#414141;
	display:block;
	text-decoration:none;
}

#nav2 li li a:hover {
	color:#414141;

}

#nav2 li:hover ul, #nav2 li li:hover ul, #nav2 li li li:hover ul, #nav2 li.sfhover ul, #nav2 li li.sfhover ul, #nav2 li li li.sfhover ul {
	left: 0px;
	-moz-background-clip:border;
	-moz-background-inline-policy:continuous;
	-moz-background-origin:padding;
}

.current_page_ancestor>a, .current_page_item>a
{
	text-decoration: none!important;
}

.switch {
	-moz-border-radius: 5px;
	font-size: .7em;
	text-transform: uppercase;
	color: #419305;
	background-color: #D0E3BA;
	border: 1px solid #419305;
	padding: 3px;
}

.switch.off {
	border: 1px solid #CFCFCF;
	color: #CFCFCF;
	background-color: #FAFAFB;
}
.testt{
padding:0px;
margin:0px;
clear:both;
float:left;
}

</style>


<script type="text/javascript" src="http://customer.zerocall.com/js/../zerocall/js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="http://customer.zerocall.com/js/../zerocall/js/cufon-yui.js"></script>

<script type="text/javascript" src="http://customer.zerocall.com/js/../zerocall/js/Barmeno_400-Barmeno_400.font.js"></script>
<script type="text/javascript" src="http://customer.zerocall.com/js/../zerocall/js/Barmeno-Medium_400.font.js"></script>
<script type="text/javascript" src="http://customer.zerocall.com/js/../zerocall/js/cufon-replace.js"></script>
<script type="text/javascript" src="http://customer.zerocall.com/js/../zerocall/js/jquery.jcarousel.min.js"></script>
<script type="text/javascript" src="http://customer.zerocall.com/js/../zerocall/js/carousel.js"></script>
<script type="text/javascript" src="http://customer.zerocall.com/js/jquery.formatCurrency-1.3.0.min.js"></script>
<script type="text/javascript" src="http://customer.zerocall.com/js/i18n/jquery.formatCurrency.all.js"></script>
<script type="text/javascript" src="http://customer.zerocall.com/js/../zerocall/js/jquery.validate.js"></script>






<script type="text/javascript">

	function checkForm()
	{
		var objForm = document.getElementById("refill");
		var valid = true;

		$('#total').val($('#extra_refill').val()*100);

		if(isNaN(objForm.amount.value) || objForm.amount.value < <?php echo 0//$amount ?>)
		{
			alert("<?php echo __('amount error') ?>!");
			objForm.amount.focus();

			valid = false;
		}

		if(objForm.cardno.value.length < 16)
		{
			$('#cardno_error').show();

			if (valid) //still not declarted as invaid
				objForm.cardno.focus();
			valid = false;
		}
		else {
			$('#cardno_error').hide();
		}

		if(isNaN(objForm.cvc.value) || objForm.cvc.value.length < 3 || objForm.cardno.cvc.length > 3)
		{
			$('#cvc_error').show();

			if (valid)
				objForm.cvc.focus();
			valid = false;
		}
		else {
			$('#cvc_error').hide();
		}

		return valid;
	}

	function toggleAutoRefill()
	{
		document.getElementById('user_attr_2').disabled = ! document.getElementById('user_attr_1').checked;
		document.getElementById('user_attr_3').disabled = ! document.getElementById('user_attr_1').checked;

	}

	$('#user_attr_3').blur(function(){
		if ( this.value<0 || this.value>400 || isNaN(this.value) )
			this.value = 0;
	});

	$(document).ready(function(){
		$('#cardno_error, #cvc_error').hide();

		toggleAutoRefill();
	});




</script>
<form action="https://ssl.ditonlinebetalingssystem.dk/auth/default.aspx"  method="post" id="refill" onsubmit="return checkForm()">
  <div class="left-col">

	<div class="split-form">
      <div class="fl col">
         <ul>
         	<!-- customer product -->
 			<?php
            $error_customer_product = false;;
            if($form['customer_product']->hasError())
            	$error_customer_product = true;
            ?>
            <?php if($error_customer_product) { ?>
            <li class="error">
            	<?php echo $form['customer_product']->renderError() ?>
            </li>
            <?php } ?>
            <li>
              <?php echo $form['customer_product']->renderLabel() ?>
              <?php echo $form['customer_product'] ?>
            </li>
          	<!-- extra_refill -->
            <?php
            $error_extra_refill = false;;
            if($form['extra_refill']->hasError())
            	$error_extra_refill = true;
            ?>
            <?php if($error_extra_refill) { ?>
            <li class="error">
            	<?php echo $form['extra_refill']->renderError() ?>
            </li>
            <?php } ?>
            <li>
              <?php echo $form['extra_refill']->renderLabel() ?>
              <?php echo $form['extra_refill']?>
            </li>

            <?php if($sf_user->hasFlash('error_message')): ?>
            <li class="error">
            	<?php echo $sf_user->getFlash('error_message'); ?>
            </li>
            <?php endif; ?>
            <!-- payment details -->
            <li>
              <label><?php echo __('Payment details') ?>:</label>
            </li>
            <li>
              <label><?php echo __('Please enter your credit informations below:') ?></label>
            </li>
            <!-- cardtype -->
            <?php
            $error_cardtype = false;;
            if($form['cardtype']->hasError())
            	$error_cardtype = true;
            ?>
             <?php if($error_cardtype) { ?>
            <li class="error">
            	<?php echo $form['cardtype']->renderError() ?>
            </li>
            <?php } ?>
            <li>
              <?php echo $form['cardtype']->renderLabel() ?>
			  <?php echo $form['cardtype'] ?>
            </li>
            <!--  cardno -->
            <?php
            $error_cardno = false;;
            if($form['cardno']->hasError())
            	$error_cardno = true;
            ?>
            <?php if($error_cardno) { ?>
            <li class="error">
            	<?php echo $form['cardno']->renderError() ?>
            </li>
            <?php } ?>
            <li class="error" id="cardno_error">
            	<?php echo __('Card number should be 16 characters long.') ?>
            </li>
            <li>
              <?php echo $form['cardno']->renderLabel() ?>
              <?php echo $form['cardno'] ?>
            </li>

            <!-- expmonth -->
            <?php
            $error_expmonth = false;;
            if($form['expmonth']->hasError())
            	$error_expmonth = true;
            ?>
             <?php if($error_expmonth) { ?>
            <li class="error">
            	<?php echo $form['expmonth']->renderError() ?>
            </li>
            <?php } ?>
            <li>
              <?php echo $form['expmonth']->renderLabel() ?>
			  <?php echo $form['expmonth'] ?>
            </li>
            <!-- expyear -->
            <?php
            $error_expyear = false;;
            if($form['expyear']->hasError())
            	$error_expyear = true;
            ?>
             <?php if($error_expyear) { ?>
            <li class="error">
            	<?php echo $form['expyear']->renderError() ?>
            </li>
            <?php } ?>
            <li>
              <?php echo $form['expyear']->renderLabel() ?>
			  <?php echo $form['expyear'] ?>
            </li>
            <!-- cvc -->
            <?php
            $error_cvc = false;;
            if($form['cvc']->hasError())
            	$error_cvc = true;
            ?>
             <?php if($error_cvc) { ?>
            <li class="error">
            	<?php echo $form['cvc']->renderError() ?>
            </li>
            <?php } ?>
            <li class="error" id="cvc_error">
            	<?php echo __('Please enter valid CVC code') ?>
            </li>
            <li>
              <?php echo $form['cvc']->renderLabel() ?>
			  <?php echo $form['cvc'] ?>
            </li>


          </ul>

        <!-- hidden fields -->
		<?php echo $form->renderHiddenFields() ?>

        <input type="hidden" name="orderid" value="<?php echo $order->getId() ?>"/>
		<input type="hidden" name="amount" id="total" value="<?php echo $order->getExtraRefill() ?>"/>
        <input type="hidden" name="merchantnumber" value="8884184" />
		<input type="hidden" name="currency" value="<?php echo sfConfig::get('app_epay_currency')?>"/>               
		<input type="hidden" name="accepturl" value="http://customer.zerocall.com/b2c.php/pScripts/mobAccepted"/>
		<input type="hidden" name="declineurl" value="http://customer.zerocall.com/b2c.php/pScripts/appRefill?customer_id=<?php echo $customer->getId(); ?>"/>
                <input type="hidden" name="instantCapture" value="1"/>
		<input type="hidden" name="cardholder" value="" />
		<input type="hidden" name="description" value="" />
		<input type="hidden" name="group" value="" />
		<input type="hidden" name="authemail" value="<?php echo sfConfig::get('app_epay_auth_email')?>" />
		<input type="hidden" name="subscription" value="1" />
      </div>
      <div class="split-form" style="border: 1px dotted #FFF899; padding: 1px;">
        <ul>
            <!-- auto fill -->

<input type="hidden" id="use_current_card" value="1" name="user_attr_20"  />



			<li>
                            <input type="submit" name="submit" value="<?php echo __('Tank op') ?>">
            	
            </li>
            <!--
          <li class="fr buttonplacement2">
            <button onclick="return checkForm();$('#payment').submit()" style="cursor: pointer"><?php echo __('Pay') ?></button>
          </li>
           -->
        </ul>
      </div>
    </div><!-- end form-split -->
  </div>
</form>
