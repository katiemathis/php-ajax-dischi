<template>
  <div id="app">
    <MyHeader @selectedGenreEvt="setSelectedGenre" :genreItems="genreItems"/>
    <MainContent @genresReady="setGenres" :selectedGenre="selectedGenre"/>

    
  </div>
</template>

<script>


import MyHeader from './components/MyHeader.vue';
import MainContent from './components/MainContent.vue';



export default {
  name: 'App',
  components: {
    MyHeader,
    MainContent,

 
   },
   data() {
     return {
       genreItems: [], 
       selectedGenre: ''
     }
   },
   methods: {
     setGenres(genreItems) {
       this.genreItems = genreItems;
     },
     setSelectedGenre(selectedGenreEvt) {
       this.selectedGenre = selectedGenreEvt;
     }
   }
   

}
</script>

<style scoped lang="scss">

@import './style/general.scss';

#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  color: #2c3e50;
  margin: -10px;
  padding: 0;
  box-sizing: border-box;
  background-color: $colorDark;
  width: 100vw;
  height: 130vh;
  

  

}
</style>
