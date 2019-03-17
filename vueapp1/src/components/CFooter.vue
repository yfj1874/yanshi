<template>
<div class="footer" :style="{background:color}">
    <ul>
        <li v-for="(obj,index) in menu" :key="index" >
            <router-link :to="obj.path" @click.native="change(obj)">{{obj.name}}</router-link>
     
            </li>
    </ul>
    </div>

</template>
<script>
export default {
    data(){
        return{
           
        }
    },
      props:["menu","color"],
    methods:{
        change(obj){
                     
            this.$emit('changeBg',obj)
        }
    },
  

}
</script>
<style scoped>
.footer{
    position: fixed;
    bottom: 0;
    left: 0;
    height: 1rem;
    width: 100%;
    background: red;
}
.footer ul{
    display: flex;
}
li{
    line-height: 1rem;
    flex-grow: 1;
    text-align: center;
    color: aliceblue;
}
.footer a{
    color: aliceblue;
}
.footer a.router-link-active{
    color: black;
}

</style>


