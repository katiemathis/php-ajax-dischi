<template>
  <div class="header_container d-flex justify-content-between">
      <div class="row header col-1 ">
          <img src="../assets/logo-small.svg" alt="">
      </div>
      <div class="dead_space row header col-6">
      </div>
      <div class="row header col-2">
            <select v-model="selectedGenre" 
            @change="$emit('selectedGenreEvt', selectedGenre)" 
            class="debug m-4 select_genre">
                <option value="">Genre</option>
                <option v-for="(genreItem, index) in genreItems" 
                :key="index"             
                :value= "genreItem" 
                >{{genreItem}}</option>
                <!--:v-show= "!genreItem(index).includes(genreItem(index))"-->

          </select>
        
      </div>
            <div class="dead_space row header col-1">
      </div>



  </div>
</template>

<script>
//const axios = require('axios');

//import MySelectors from './partials/MySelectors.vue'

export default {
    name: 'MyHeader',
    props: {
        'genreItems': Array
        },
        data () {
            return {
                selectedGenre: '',
                
        }
        },

}
</script>

<style scoped lang="scss">
@import '../style/general.scss';

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    background-color: $colorLight;

}


.header_container {

    width: 100vw;
    margin-bottom: 50px;
    
    .header {
        justify-content: left;
        height: 70px;
        color: #24d34e;


        img {
            height: auto;
            max-width: 80%;
            margin:auto;
            
        }

        .select_genre {
            width: 100%;
            background-color: #fff;
        }


    }
}


</style>