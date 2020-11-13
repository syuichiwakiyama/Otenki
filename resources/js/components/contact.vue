<template>
  <div>
    <a class="btn btn-success" @click="contact(user)">のみにいく</a>
  </div>
</template>

<script>
    export default {
        props: ['user' , 'authUser'],
        data(){
          return {
            contacted:  false ,
            currentUser: this.authUser
          }
        },
        methods: {
          contact(user){
            let url = '/api/send'
        

            axios.post(url,{
              email:user.email,
              currentUser: this.currentUser
            })
               .then(response =>{
                   aleart(`${user.name}さんにメールを送りました`)
               })
               .catch(err =>{
                   aleart(fail)
               })
          }
        }
    }
</script>
