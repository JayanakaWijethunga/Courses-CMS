<template>
  
    <div class="container">

        <div class="row row-cols-1 row-cols-md-3">
         
        <div v-for="serie in series" :key="serie.id" class="col mb-4">
            <div class="card">
              <img src="https://mdbootstrap.com/wp-content/uploads/2018/10/vue.jpg" class="card-img-top" alt="" />
              <div class="card-body">
                <h5 class="card-title">{{serie.title}}</h5>
                <p
                  class="card-text"
                >{{serie.description}}</p>
                <a :href="serie.url" class="btn btn-primary">View</a>
              </div>
             
            </div>
          </div>
  
    </div>

    </div>

</template>

<script>
export default {
    props: ['series']
}
</script>

<style>

</style>