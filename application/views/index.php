<div id="App">

    <div v-if="start" style="height:auto;width:auto;" class="container-fluid m-2" >
			<!-- The video -->
		<video autoplay muted loop playsinline id="myVideo" class="w-100 h-100">
		<source src="assets/images/4954802_Coll_halloween_Realistic_6144x3456.mp4" type="video/mp4" >
	
		
		</video>
				
		<!-- Optional: some overlay text to describe the video -->
		<div style="position:fixed;display:block;top:350px;left:400px;width:700px;opacity:0.5" >
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


