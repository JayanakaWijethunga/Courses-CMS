<template>
    <div class="container">
        <div class="card-deck">

            <div  v-for="serie in series" :key="serie.id" class="card">
                <img
                    src="https://images.unsplash.com/photo-1519682337058-a94d519337bc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80"
                    class="card-img-top"
                    alt="..."
                />
                <div class="card-body">
                    <h5 class="card-title">{{serie.title}}</h5>
                    <p class="card-text">
                       {{serie.description.substring(0,150)+".."}}
                    </p>
                    <p class="card-text">
                        <small class="text-muted"
                            >{{serie.created_at | fixDate}}</small
                        >
                    </p>
                </div>
            </div>
        
       
        </div>
    </div>
</template>

<script>
export default {

    data(){
        return {
            series :{}
        }
    },

     methods :{

          loadUsers(){

            axios.get('api/series').then((data) => this.series=data.data)

          }

     },

     created(){

          this.loadUsers()
        }

};
</script>

<style></style>
