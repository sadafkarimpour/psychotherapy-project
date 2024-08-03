<style>
	:root {
  --home-bg-color: #f2f3ee;
  --menu-bg-color: #cbcbc2;
  --silde-btn-border: #808080;
  --slide-btn-bg: #ddf2db;
  --slide-btn-hoverbg: #f1fff1;
  --alpha-green: rgba(33, 96, 47, 0.51);
  --icon-hover-color: #344a39;
  --icon-hover-bg: #709680;
  --text-color: #616161;
  --border-color: #709680;
  --heading-color: #344a39;
  --box-shadow-color: #b5b5ac;
  --lightest-green: #86a58d;
  --light-green: #9ab09a;
  --dark-green: rgba(52, 74, 57, 0.86);
  --box-shadow: 0px 0px 3px 5px var(--box-shadow-color);
  --border-radius: 60px 5px;
  --fade-green: rgba(57, 87, 64, 0.55);
}
*,
*::before,
*::after {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  list-style: none;
}


#ham-menu {
  display:none;
}


html {
  width: 100%;
  font-size: 10px;
  color: var(--text-color);
  font-weight: normal;
  font-family:Arial, Helvetica, sans-serif;
  background-color:black;

}
body{
  background-color:black;
	
}

.img{
	display:block;
	position: fixed;
  top: 50px;
  right: 40px;
  z-index: 999;
	opacity: 0.5;
	border-radius: 10px;
}
label[for="ham-menu"] {
  display:block;
	position: fixed;
  top: 50px;
  left: 40px;
  z-index: 999;
  width: 60px;
  height: 60px;
  background-color: var(--home-bg-color);
  border-radius: 15px;
  border: 2px solid var(--border-color);
	opacity:0.5
}
.ham-menu {
  width: 50vw;
  height: 100%;
  position: fixed;
  top: 0;
  visibility: hidden;
  transform: translate(-110%);
  z-index: 998;
  background-color: var(--lightest-green);
  transition: 1s;
  display: flex;
  justify-content: center;
  align-items: center;
}
.ham-menu > ul {
  display: flex;
  flex-flow: column nowrap;
  justify-content: space-around;
  padding: 20px;
  height: 50%;
}
.ham-menu > ul > li {
  font-size: 3rem;
  cursor: pointer;
  color: rgb(97, 97, 97);
}
.ham-menu > ul > li:hover {
  font-size: 4rem;
  cursor: pointer;
  color: white;
	transition: all 800ms;
}
#ham-menu:checked + label {
  background-color: transparent;
  border-color: var(--dark-green);
}
#ham-menu:checked ~ div.ham-menu {
  transform: translate(0px);
  visibility: visible;
}
.full-page-green {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: var(--dark-green);
  z-index: 997;
  opacity: 0;
  visibility: hidden;
  display: none;
  transition: 500ms;
  position: fixed;
  top: 0;
  left: 0;
}
#ham-menu:checked ~ div.full-page-green {
  display: block;
  opacity: 1;
  visibility: visible;
}
[for="ham-menu"] > div {
  width: 100%;
  height: 100%;
  display: flex;
  flex-flow: column wrap;
  align-content: center;
  align-items: center;
}
.menu-line {
  display: block;
  width: 17px;
  height: 2px;
  margin: 10px 0 5px;
  border-top-left-radius: 2px;
  border-bottom-left-radius: 2px;
  background-color: var(--border-color);
  transition: 500ms;
  transform-origin: right center;
}
[for="ham-menu"] > div > span:nth-child(4),
[for="ham-menu"] > div > span:nth-child(5),
[for="ham-menu"] > div > span:nth-child(6) {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
  border-top-right-radius: 2px;
  border-bottom-right-radius: 2px;
  transform-origin: left center;
}
#ham-menu:checked + label span {
  background-color: var(--dark-green);
}
#ham-menu:checked + label span:nth-child(2),
#ham-menu:checked + label span:nth-child(5) {
  transform: scale(0);
}
#ham-menu:checked + label span:nth-child(1) {
  transform: translateY(17px) rotate(45deg);
}
#ham-menu:checked + label span:nth-child(4) {
  transform: translateY(17px) rotate(-45deg);
}
#ham-menu:checked + label span:nth-child(3) {
  transform: translateY(-17px) rotate(-45deg);
}
#ham-menu:checked + label span:nth-child(6) {
  transform: translateY(-17px) rotate(45deg);
}


.centre-text {
  text-align: center;
	font-size:20px ;
}
.bold-text {
  font-weight: bold;
}
</style>


<div class="container-fluid d-flex align-items-center">

	<div class="row">
		<div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
		  
			<input type="checkbox" id="ham-menu">
			<label for="ham-menu">
				<div class="hide-des">
					<span class="menu-line"></span>
					<span class="menu-line"></span>
					<span class="menu-line"></span>
					<span class="menu-line"></span>
					<span class="menu-line"></span>
					<span class="menu-line"></span>
				</div>

			</label>
			<div class="full-page-green"></div>
			<div class="ham-menu">
				<ul class="centre-text">
					<li><a href="<?php echo $urlhome?>" style="text-decoration: none;color: rgb(97, 97, 97);">صفحه نخست</a></li>
					<li>درباره</li>
					<li>همکاران</li>
					<li>مقالات</li>
					<li>تماس با ما</li>
					<li>ثبت نام</li>

				</ul>
			</div>
		</div>


		<div class="col-lg-10 col-md-8 col-sm-12 col-xs-12 d-flex justify-content-end">
				
            <img class="img" src="assets/images/pea.png" alt="" width="100px" height="100px" alt="">
       
		</div>

	</div>

</div>
