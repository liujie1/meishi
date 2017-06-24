<template>
  <div id="app">
    	<mt-header style='background-image: url(src/img/header.png);background-size:100% 100%'>
			  <router-link to="/" slot="left" v-if='show' @click.native="tap">
			    <mt-button icon="back">返回</mt-button>
			  </router-link>
			 
			</mt-header>
			<div @click='tap2' style='position: absolute;top: 0.1rem;right: 0.2rem;background: #f8a500;width: .45rem;height: .45rem;font-size: .2rem;line-height: .45rem;text-align: center;color:#fff;z-index: 10000;border-radius: .1rem;'>登录</div>

			<router-view @to-parent="getdata"></router-view>	
			
			<div id="yfoot">
            <router-link to="/jingxuan">
                <div class="addcolor"><img style="display: inline-block;" src="src/img/logo.gif"/>精选</div>
                
            </router-link>
            <router-link to="/video	">
               <div><img class="active" src="src/img/logo.gif"/>视频</div>
               
            </router-link>
            <router-link to="/duanzi">
                <div><img class="active" src="src/img/logo.gif"/>段子</div>
                
            </router-link>
            <router-link to="/search1">
                <div><img class="active" src="src/img/logo.gif"/>发现</div>
               
            </router-link>
        </div>

			
			
  </div>
</template>

<script>
export default {
  name: 'app',
  data () {
    return {
      show:false
    }
  },
  methods:{
  	tap2:function(){
  		this.$router.push("/grgl");
  	},
  	getdata:function(){
  		this.show=true
  	},
  	tap:function(){
  		this.show=false
  	}
  },
  mounted:function(){
	    var yfoot=document.getElementById("yfoot")
	    var div=yfoot.getElementsByTagName("div")
	    var img=yfoot.getElementsByTagName("img")
	    for(var i=0;i<div.length;i++){
	        div[i].index=i;
	        div[i].onclick=function(){
	            for(var j=0;j<div.length;j++){
	                div[j].className='';
	                img[j].style.display='none'
	            }
	            div[this.index].className="addcolor";
	            img[this.index].style.display="inline-block"
	        }
	    }
	}
}
</script>

<style>
	
	#yfoot{
        position: fixed;
        width:100%;
        bottom: 0;
        background-color: #f79100;
        height: .6rem;
        line-height: .6rem;
        font-size: .25rem;
        font-weight: bolder;
    }
     #yfoot div{
        float: left;
        width:25%;
        text-align: center;
        color: #000;
    }
    #yfoot .addcolor{
        color: #ffef3c;
        background: #a76200;
        
    }
    #right{
    	width: .35rem;height: .35rem;background: #f79100;
    	font-size: .35rem;
    }
    #yfoot img{
    	display: none;
    }
</style>
