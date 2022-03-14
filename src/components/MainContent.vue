<?php

?>


<template>
    <div v-if="loadingInProgress" class="main_container">

        <div class="container" >
            <PageLoading />
        </div>
    </div>
        
    <div v-else class="container">
        <div class="row row-cols-lg-6 row-cols-md-4 row-cols-3 justify-content-center mx-10">
            <SongCard 
                v-for= "(cardItem, index) in cardItems" :key= "index"
                     :myTile= "cardItem" 

                />
                <!-- @genresReady="setGenres" -->
                <!--                 :selectedGenre="selectedGenre"
                v-for= "(album, index) in filteredAlbums" :key= "index"
                myTile= "album" -->
        </div>
    </div>

</template>

<script>

const axios = require('axios');

import SongCard from './partials/SongCard.vue';
import PageLoading from './partials/PageLoading.vue'

export default {
    name: 'MainContent',
    components: {SongCard, PageLoading},
    props: {
        'selectedGenre': String,
    },
    data () {
          return {
              cardItems: [],
              genreItems: [],
              loadingInProgress: true,
          }      
    },
    computed:{
        filteredAlbums() {

            if(this.selectedGenre == '') {
                return this.cardItems;
            }else{
            return this.cardItems.filter(cardItem => {
                return cardItem.genre == this.selectedGenre;
                }); 
            }
        }
    },
    methods: {
            getSongs() {
                // Make a request for a user with a given ID
                axios.get('https://flynn.boolean.careers/exercises/api/array/music')
                .then((response) => {
                    this.cardItems = response.data.response;
                    this.loadingInProgress = false;

                    this.cardItems.forEach(cardItem => {
                        if (!this.genreItems.includes(cardItem.genre)) {
                            this.genreItems.push(cardItem.genre);
                            console.log(this.genreItems)
                        }
                    });

                    this.$emit('genresReady', this.genreItems)
                    
                })
                .catch(function (error) {
                    // handle error
                    console.log(error);
                });
            }
        },
        mounted() {
            /*document.onreadystatechanges = () => {
                if (document.readyState == "complete") {
                    this.isloaded = true;
                }
            }*/
        },
        created() {
            this.getSongs();
            this.isLoaded = true;
            
        }
}

</script>

<style scoped lang="scss">

@import '../style/general.scss';

* {
    background-color: #17212d;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    color: white;
}







</style>