<template>
<div>
    <header :style="{background:bgc} ">
        <span class="goHome">首页</span>
        电影
    </header>
    </div>

</template>
<script>
export default {
    props:["bgc"]
    
}
</script>
<style scoped>
 header{
     height: 1rem;
     background: #ff0036;
     text-align: center;
     position: fixed;
     top: 0px;
     left:0px;
     width:100%;
     line-height: 1rem;
     color: aliceblue;
 }
 .goHome{
     position: absolute;
     top: 50%;
     left: 0.1rem;
     transform: translateY(-50%);
 }
</style>


