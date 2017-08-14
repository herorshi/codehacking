<template>
    <div class="container">
        <div class="row">
          PANUPIJARN
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.');

            $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
this.$http.get('/xa').then(response => {
 
    console.log(response.body);

 
  }, error => {

  });


                this.$http.post('/xa2' , 
                    {email:'metasitstar@gmail.com',hp:3000  }).then(response => {
                   console.log(response.body );
              
                                                                    }, 
                    response => {
                                     console.log('ERROR');
                                });


        }
    }
</script>
