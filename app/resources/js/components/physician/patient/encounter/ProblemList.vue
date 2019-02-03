<template>
  <div class='grid-x align-middle'>
    <div class='cell small-12'>
      <ul class='vue-problem-list'>
        <li v-for='item in list'>
          &mdash;&nbsp;{{ item.name }}
        </li>
      </ul>
    </div>
    <div v-if='!addHidden' class='cell small-12' style='display:flex; align-items:center;'>
      <div>
        <label class='label'>Diagnosis / Problem</label>
        <input type='text' v-model='name' required placeholder='Enter diagnosis'/>

      </div>
      <div style='margin-left:10px;'>
        <label class='label'>ICD-10 Code</label>
        <input type='text' v-model='code' placeholder='Optional ICD-10 code'/>
      </div>
      <div style='margin-left:10px;'>
        <a @click='save()' style='margin-top: 10px; margin-bottom:0;' class='primary small button'><i class="fas fa-check"></i>&nbsp;Save</a>
        <a @click='toggleAdd()' style='margin-top: 10px;margin-left:5px;margin-bottom:0;color:lightgrey;' class='hollow small button'><i class="fas fa-times"></i>&nbsp;Cancel</a>
      </div>

    </div>
    <div class='cell small-12'>
      <a @click='toggleAdd()'><i class="fas fa-plus"></i>&nbsp;Add</a>
    </div>
  </div>


</template>


<script>
  const axios = require('axios');

  export default {
    props: ['encounter','list'],
    data: function() {
      return {
        addHidden: true,
        name: '',
        code: '',
      }
    },

    methods: {
      toggleAdd() {
        this.addHidden = !this.addHidden;
      },


      save() {


        axios.post('/ajax/encounter/' + this.encounter.id + '/diagnosis', {
          name: this.name,
          code: this.code,
        })
        .catch(function (error) {
          console.log(error);
        });

        var item = {
          name: this.name,
        }

        this.list.push(item);
        this.addHidden = true;

      }
    }
  }

</script>
