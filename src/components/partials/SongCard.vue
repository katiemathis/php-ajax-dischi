<template>
      <div class="col my_card g-3 p-3 m-3"> 
         <!-- <div class="row"> -->
            <img class="img-fluid" :src= "myTile.poster">
            <h5 class="my_title mt-2 pt-2">{{myTile.title}}</h5>
            <div class="my_text">{{myTile.author}}</div>
            <div class="my_text">{{myTile.year}}</div>
          <!--</div>-->
      </div>

</template>

<script>
export default {
    name: 'SongCard',
    props: {
        'myTile': Object,

    }
      
}
</script>

<style scoped lang="scss">

@import '../../style/general.scss';

.my_card {
    height: 340px;
    width: 200px;
    background-color: $colorLight;
    &:hover {
        border: #fff 1px solid;
        cursor:pointer;
    }

    img {
        max-width: 100%
    }

    h5 {
        text-transform: uppercase;
        font-weight: 600;
        text-align: center;
    }
    .my_text {
        color: #6e6b68;
        text-align: center;
        font-size: small;
    }

}

</style>