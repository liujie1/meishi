<template id="grgl">
	<div>
		<div class="gr-header">
			<div @click="taps"></div>
		</div>
		<div class='gr-section'>
			<div class="gs-header">
				<div>
					<router-link to="/dlzc">
						<img src="src/img/gr-section1.jpg"/>
					</router-link>
				</div>
				<p>点击头像登录</p>
			</div>
			<div class="gs-section">
				<div class="gs-list1">
					<img src="src/img/gs-section1.jpg"/>
					<p>我的消息</p>
					<span>&gt;</span>
				</div>
				<div class="gs-list1">
					<img src="src/img/gs-section2.jpg"/>
					<p>我的投稿</p>
					<span>&gt;</span>
				</div>
				<div class="gs-list1">
					<img src="src/img/gs-section3.jpg"/>
					<p>我的评论</p>
					<span>&gt;</span>
				</div>
				<div class="gs-list1">
					<img src="src/img/gs-section4.jpg"/>
					<p>意见反馈</p>
					<span>&gt;</span>
				</div>
			
			</div>
		</div>
		<div class="gr-footer">温馨提示:账号管理请前往浏览器个人中心</div>
		<div class="gr-link">
			<span @click="taps1">&lt;</span>
			<img src="src/img/gr-link2.jpg" class="gl2"/>
			<img src="src/img/gr-link1.jpg" class="gl1"/>
		</div>
	</div>
</template>

<script>



export default {
	name:"grgl",
	methods:{
		taps:function(){
			window.history.back(-1)
		},
		taps1:function(){
			window.history.back(-1)
		}
	}
}
</script>

<style>

html,body{width:100%;height:100%;}
body{background:#e1e1e1}
.gr-header{ height:0.88rem;width:100%;background: url(../img/gr-header1.jpg) no-repeat top center;background-size:100% 0.88rem;position:relative}
.gr-header div{width:0.5rem;height:0.5rem; background:#fff;position:absolute;top:0.18rem;left:0.18rem;opacity:0.1}
.gr-section{height:7.05rem;width:90%;margin-left:5%;background:#fff;margin-top:0.17rem;}
.gs-header{height:1.96rem;width:100%;padding-top:0.54rem;}
.gs-header div{width:100%;height:0.98rem;text-align:center;}
.gs-header img{width:0.98rem;height:0.98rem;}
.gs-header p{width:100%;height:0.98rem;text-align:center;font-size:0.24rem;color:#ffb219;line-height:0.98rem;}
.gs-section{height:4.3rem;width:100%;}
.gs-list1{border-top:1px solid #ececec;width:100%;height:0.9rem;font-size:0.24rem;padding-top:0.23rem;padding-left:0.14rem;}
.gs-list1 img{width:0.67rem;height:0.67rem;float:left;line-height:1.13rem;}
.gs-list1 p{float:left;margin-top:0.2rem;margin-left:0.3rem}
.gs-list1 span{float:right;color:#e6e6e6;font-size:0.48rem;margin-right:0.3rem;font-weight:900;}
.gr-footer{font-size:0.2rem;text-align:center;margin-top:0.5rem;}
.gr-link{width:100%;height:0.86rem;background:#fff;position:absolute;bottom:0rem;}
.gr-link span{font-size:0.36rem;line-height:0.86rem;margin-left:0.4rem;float:left}
.gl1{float:right;width:0.46rem;height:0.46rem;margin-top:0.24rem;margin-right:0.54rem}
.gl2{float:right;width:0.37rem;height:0.37rem;margin-top:0.24rem;margin-right:0.42rem}
</style>