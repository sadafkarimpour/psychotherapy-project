<style>
.pic1{
	background-image: url("assets/images/wellness-practices-self-care-world-health-day.jpg");
	min-height: 400px;
}
.pic2{
	background-image: url("assets/images/zen-stones-balanced-beach-with-copy-space-sunrise-light-meditation-relaxation-ai-generative.jpg");
	min-height: 400px;
}
.pic3{
	background-image: url("assets/images/photorealistic-view-tree-nature-with-branches-trunk.jpg");
	min-height: 400px;
}

.sec1{
	background-color: white;
	text-align: center;
	justify-content: center;
	justify-items: center;
	color: black;
	padding: 20px;
}

.sec2{
	background-color:lightblue;
	text-align: center;
	justify-content: center;
	justify-items: center;
	color: black;
	padding: 20px;
}

.sec3{
	background-color:darksalmon;
	text-align: center;
	justify-content: center;
	justify-items: center;
	color: black;
	padding: 20px;
}

.pic1, .pic2, .pic3{
position: relative;
opacity: 0.70;
background-position: center;
background-size: cover;
background-repeat: no-repeat;
background-attachment: fixed;
}

.pictext{
	position: absolute;
	top:50%;
	width: 100%;
	text-align: center;
	color: white;
	font-size: 27px;
	letter-spacing: 8px;
	text-transform: uppercase;
	
}

</style>



<div id="App">

    <div v-if="start" style="min-height:100%;position:relative;background-position: center;background-size: cover;background-repeat: no-repeat;background-attachment: fixed;" class="container-fluid m-2" >
			<!-- The video -->
		<video autoplay muted loop playsinline id="myVideo" class="w-100 h-100">
		<source src="assets/images/4954802_Coll_halloween_Realistic_6144x3456.mp4" type="video/mp4" >
	
		
		</video>
				
		<!-- Optional: some overlay text to describe the video -->
		<div style="position:absolute;top:350px;left:400px;width:700px;opacity:0.5" >
			<h1 class="text-light p-3 m-3 d-flex justify-content-center" >همان تغییری باشید که می خواهید در جهان ببینید</h1>
		<!-- Use a button to pause/play the video with JavaScript -->
			<button class="btn text-light w-100 p-3" style="font-size:25px;background-color:rgba(52, 74, 57, 0.86)" @click="show()">شروع درمان</button>
		</div>
				
		

	</div>

	<div v-else class="container-fluid bg-white d-inline-block justify-content-center m-3" style="background-image:url('assets/images/stair-shadow-clean-green-textured-wall.jpg');background-size:cover;font-family:'font-family:'Times New Roman', Times, serif';height:800px;opacity:0.5;">
		
		<div class="row w-100 h-50 d-flex justify-content-center p-3">
			<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 bg-light m-3">
				1
			</div>
			<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 bg-light m-3">
				2
			</div>
		</div>
		<div class="row w-100 h-50  d-flex justify-content-center p-3">
			<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 bg-light m-3">
				3
			</div>
			<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 bg-light m-3">
				4
			</div>
		</div>
	</div>


<div class="pic1">
	<div class="pictext">
		<span class="text1">
		Life
		</span>
	</div>
</div>

<section class="sec1">
<h3>“Life doesn’t make any sense without interdependence. We need each other, and the sooner we learn that, the better for us all.” –Erik Erikson</h3>
</section>


<div class="pic2">
	<div class="pictext">
		<span class="text2">
		Effort
		</span>
	</div>
</div>

<section class="sec2">
	<h3>“Once you start making the effort to ‘wake yourself up’—that is, be more mindful in your activities—you suddenly start appreciating life a lot more.” –Robert Biswas-Diener</h3>
</section>



<div class="pic3">
	<div class="pictext">
		<span class="text3">
			What?
		</span>
	</div>
</div>

<section class="sec3">
	<h3>“We are what we are because we have been what we have been, and what is needed for solving the problems of human life and motives is not moral estimates but more knowledge.” –Sigmund Freud</h3>
</section>


</div>




<script>
Vue.createApp({
	data(){
    return{
			start:true
		}
	},

  methods:{
	show(){
		this.start=false
	}
	
  },

}).mount('#App');

</script>


