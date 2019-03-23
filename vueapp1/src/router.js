import Vue from 'vue'
import Router from 'vue-router'
import Movie from'./views/movie/Movie.vue'
import Music from'./views/music/Music.vue'
import Book from'./views/book/Book.vue'
import Photo from'./views/photo/Photo.vue'
import musiclist from'./views/music/musiclist.vue'
import MovieDetail from './views/movie/MovieDetail.vue'

Vue.use(Router)

export default new Router({
  routes: [
    {
      path: '/movie',
      component: Movie
    },
    {
      path: '/music',
      component: Music
    },
    {
      path: '/book',
      component: Book
    },
    {
      path: '/photo',
      component: Photo
    },
    {
      path: '/musiclist',
      component: musiclist
    },
    {
      path: '/musiclist/:movieId',
      component: MovieDetail
    },
  
  ]
})
