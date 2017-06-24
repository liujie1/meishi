<template id="video">
	<div>
		<div class="list" v-for="(item,i) in arr">
			<div class="title">
				<img src="src/img/q-v-a.jpg"/>
				<p>奇趣视频</p>
			</div>
			<div class="con">
				{{item.title}}
			</div>
			<div class="wrap">
				<img :src="item.img" width="" height="" class="img"></img>
				<video :src="item.video" controls="controls">
					
				</video>
			</div>
	
			
			<div id="vfot">
				<div class="jiathis_style fen">
					<a class="jiathis_button_qzone"></a>
					<a class="jiathis_button_tsina"></a>
					<a class="jiathis_button_tqq"></a>
					<a class="jiathis_button_weixin"></a>
					<a class="jiathis_button_renren"></a>
					<a href="http://www.jiathis.com/share" class="jiathis jiathis_txt jtico jtico_jiathis" target="_blank"></a>
					<a class="jiathis_counter_style"></a>
				</div>
			</div>
		</div>
	</div>
</template>

<script>
	export default {
		name:"video",
		data(){
			return {
				arr:[],
				src:''
				
			}
		},
		mounted(){
			var _this=this;
				axios.post('./src/js/video.php')
	           .then(function (response){
	           		 

	               _this.arr=response.data;
	               console.log(_this.arr)
	              
	           })
	           .catch(function (error) {
	               console.log(error);
	               console.log("2")
	           });
	           
	           
	           
	           
			
		},
		updated(){
			$('.wrap').on('tap',function () {
				for(var i=0;i<$('.wrap').not(this).length;i++){
					$('.wrap').not($(this)).find('video')[i].pause()
				}
				$(this).find('video')[0].play()
			})
			
			$('.wrap').on('tap',function () {
				$(this).find('img').css("display","none")
				$(this).find('video').css('display',"block")
				$('.wrap').not(this).find('img').css("display","block")
				$('.wrap').not(this).find('video').css("display","none")
			})
		}
	}
</script>

<style scoped>
	.list { height:7.6rem; width:6.0rem; margin:0.2rem; background: #fff;}
	.title { height: 1.25rem;}
	.title img { height:0.6rem; width:0.6rem; border-radius: 0.3rem; float: left; margin-top: 0.32rem; margin-left: 0.36rem;}
	.title p { float: left; font-size:0.26rem; color: #888888; line-height:1.25rem; margin-left: 0.2rem; }
	.con { height: .95rem;font-size: .26rem; text-indent: 0.36rem; line-height: 0.95rem;width: 100%; white-space: nowrap; text-overflow: ellipsis; overflow: hidden;}
	video { width: 100%; height:4.4rem; display: none;}
	.img { width: 100%; height: 4.4rem;}
	.wrap {width: 100%; height: 4.4rem;}
	.fen { float: right; margin-top:0.35rem; margin-right: 0.2rem;}
</style>