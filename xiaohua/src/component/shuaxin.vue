<template id='shua'>
<div>
	<mt-loadmore :top-method="loadTop" :bottom-method="loadBottom" :bottom-all-loaded="allLoaded" ref="loadmore">
	  <ul>
	    <li v-for="item in list">{{ item }}</li>
	  </ul>
	</mt-loadmore>
</div>
</template>

<script>
	export default{
		name:'shua'
	}
</script>

<style>
</style>