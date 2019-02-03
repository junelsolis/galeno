<template>
  <div class='grid-x align-middle'>
    <div class='cell medium-6' style='display:flex;'>
      <input id='input' class='vue-input' @focus='enable()' type='text' v-model='encounter.chief_complaint' style='margin-bottom:0;'/>
    </div>
    <div v-if='beingEdited' class='cell medium-6'>
      <a @click='save()' style='margin-left:10px;margin-bottom:0;' class='primary small button'><i class="fas fa-check"></i>&nbsp;Save</a>
      <a @click='disable()' style='margin-left:5px;margin-bottom:0;color:lightgrey;' class='hollow small button'><i class="fas fa-times"></i>&nbsp;Cancel</a>
    </div>
  </div>

</template>

<script>

    const axios = require('axios');

    export default {


      props: ['encounter'],
      data: function() {
        return {
          beingEdited: false,
          original: this.encounter.chief_complaint,
        }
      },
      methods: {

        enable() {
          this.beingEdited = true;
        },

        disable() {
          this.beingEdited = false;
        },

        save() {
          this.original = this.encounter.chief_complaint;

          axios.post('/ajax/encounter/' + this.encounter.id + '/chief-complaint', {
            value: this.encounter.chief_complaint,
          })
          .then(function (response) {
            console.log(response);
          })
          .catch(function (error) {
            console.log(error);
          });

          this.disable();
        }


      },
    }
</script>
