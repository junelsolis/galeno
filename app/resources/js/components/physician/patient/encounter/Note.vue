<template>
  <div class='grid-x align-middle'>
    <div class='cell small-12'>
      <textarea id='input' class='vue-textarea' @focus='enable()' type='text' v-model='encounter.note' style='margin-bottom:0;min-height: 5em;' placeholder='Insert note here.'/>
    </div>
    <div v-if='beingEdited' class='cell small-12' style='display:flex;'>
      <a @click='save()' style='margin-top: 10px; margin-bottom:0;' class='primary small button'><i class="fas fa-check"></i>&nbsp;Save</a>
      <a @click='disable()' style='margin-top: 10px;margin-left:5px;margin-bottom:0;color:lightgrey;' class='hollow small button'><i class="fas fa-times"></i>&nbsp;Cancel</a>
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
          original: this.encounter.note
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

          this.original = this.encounter.note;

          axios.post('/ajax/encounter/' + this.encounter.id + '/note', {
            value: this.encounter.note,
          })
          .then(function (response) {
            console.log(response);
          })
          .catch(function (error) {
            console.log(error);
          });

          this.disable();
        }


        }

    }

</script>
