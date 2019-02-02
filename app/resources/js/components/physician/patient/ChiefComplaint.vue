<template>
  <div style='display:flex;align-items:center;'>
    <input style='border-style:none;'v-model='encounter.chief_complaint' placeholder=''/>
    <a style='margin-left:10px;margin-bottom:0;' class='primary tiny button'><i class="fas fa-check"></i></a>
    <a style='margin-left:5px;margin-bottom:0;color:lightgrey;' class='warning tiny button'><i class="fas fa-times"></i></a>
  </div>

</template>

<script>
    export default {

      props: ['encounter'],



      mounted() {
          console.log(this.encounter)
      }
    }
</script>
