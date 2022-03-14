<template>
    <div class="d-flex justify-content-center align-items-center page_loader" >
      <div class="cube"></div>
      <div class="cube"></div>
      <div class="cube"></div>
      <div class="cube"></div>
    </div>
</template>

<script>
export default {
    name: 'PageLoading',
    loadingInProgress: true,
    /*props: "isLoaded"*/
    /*data: () => {
        return {
            
        }
    },
    mounted () {

    }*/

}
</script>

<style scoped lang="scss">

@import '../../style/general.scss';

* {
    width: 100vw;
    height:100vh;
    background-color: $colorDark;
}



.page_loader {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;


    .cube {
        width: 40px;
        height: 40px;
        margin-right: 10px;
        border-radius: 50%;
        
        @for $i from 1 through length($colors) {
            &:nth-child(#{$i}) {
                background-color: nth($colors, $i);
            }
        }

        &:first-child {
            animation: left .7s infinite;
        }
        &:last-child {
            animation: right .7s infinite .35s;
        }
    }
}
@keyframes left {
    40% {
        transform: translatex(-60px);
    }
    50% {
        transform:translatex(0);
    }
}
@keyframes right {
    40% {
        transform: translatex(60px);
    }
    50% {
        transform:translatex(0);
    }
}
</style>