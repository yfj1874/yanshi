<template>
    <div>
       <ul id="container">
           <li v-for="(obj,index) in moveList" :key="index" @click=" goDetail(obj.id)">
            <img :src=" obj.images.small" alt="">
            <div class="info">
                <h3>{{obj.title}} </h3>
                <p>
                    <span v-for="(actor, index) in obj.casts" :key="index">{{actor.name}} </span>
                </p>
                <p>{{obj.collect_count}}已观看</p>
                 <p>年份：{{obj.year}}</p>
                   <p>
                    <span v-for="(type, index) in obj.genres" :key="index">{{type}}/</span>
                </p>
            </div>

           </li>
       </ul>
       <img class="loading" v-show="isShow" src="@/assets/img/loading.gif" alt="">
       <div v-show="isBottom">加载完了</div>
      
    </div>
</template>

<script>
import Axios from "axios";
    export default {
        data(){
          return{
              
              moveList:[],
              isShow:false,
             isBottom:false,
          }  
        },
        created(){
          this. getMovie();

            window.onscroll= () =>{
                
                if(document.documentElement.scrollTop+document.documentElement.clientHeight==document.documentElement.scrollHeight&& !this.isBottom){
                      this. getMovie();
                }
                
            }
        },
        methods:{
                       getMovie() {
                         this. isShow=true;
                        Axios.get("https://bird.ioliu.cn/v1?url=https://api.douban.com/v2/movie/in_theaters?start="+this.moveList.length+"&count=10")
                          .then((result)=>{
                           this.moveList=[...this.moveList,...result.data.subjects];
                            this. isShow=false;
                              if(this.moveList.length==result.data.total){
                           this.isBottom=true;
                      }
                         })
                        .catch();
           

        }, 
                    goDetail(id){
                this.$router.push('/moviedetail/'+id);
            }
        }
    }
  </script>
    
<style scoped>
        #container{
            padding: 0.2rem;
        }
        li{
            display: flex;
            border-bottom: 1px solid #000;
        }
        li img{
            width:90px;
            height: 123px;
            margin-top: 0.1rem;
        }
        .info{
            flex-grow: 1;
            margin-left: 0.2rem;
        }
        .loading{
            position: fixed;
            top: 50%;
            left:50%;
            transform: translate(-50%,-50%);
        }
</style>
