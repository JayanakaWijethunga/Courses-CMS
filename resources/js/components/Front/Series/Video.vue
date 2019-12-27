<template>
<div class="container">

    
    <div v-for="video in videos" :key="video.id" class="card spc">
    <h5 class="card-header">{{video.title}}</h5>
    <div class="card-body">
    <h5 class="card-title">Episode {{video.episode_id}}</h5>
    <p class="card-text">{{video.description.substring(0,20) + '...'}}</p>
    <a :href="video.url" class="btn btn-primary">View</a>
    
    </div>

</div>
    
  </div>
</template>

<script>
export default {
    props: ['videos']
}
</script>

<style scoped>
.spc{

margin-bottom: 10px

}

</style>