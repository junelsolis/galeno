<template>
  <div class='grid-x align-middle'>
    <div class='cell medium-6' style='display:flex;'>
      <input class='vue-input' @focus='enable()' @blur='disable()' type='text' v-model='encounter.chief_complaint' style='margin-bottom:0;'/>
    </div>
    <div v-if='beingEdited' class='cell medium-6'>
      <a @click='save()' style='margin-left:10px;margin-bottom:0;' class='primary small button'><i class="fas fa-check"></i>&nbsp;Save</a>
      <a @click='disable()' style='margin-left:5px;margin-bottom:0;color:lightgrey;' class='hollow small button'><i class="fas fa-times"></i>&nbsp;Cancel</a>
    </div>
  </div>

</template>

<script>

    export default {


      props: ['encounter'],
      data: function() {
        return {
          beingEdited: false,
          original: this.encounter.chief_complaint
        }
      },
      methods: {

        enable() {
          this.beingEdited = true;
        },

        disable() {
          this.beingEdited = false;
          this.encounter.chief_complaint = this.original;
        },

        save() {

        }

      },
    }
</script>
