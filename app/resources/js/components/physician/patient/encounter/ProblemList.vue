<template>
  <div class='grid-x align-middle'>
    <div class='cell small-12'>
      <ul class='vue-problem-list'>
        <li v-for='(item, index) in list' v-if='item.active' v-model='list'>
          &mdash;&nbsp;{{ item.name }} &nbsp;&nbsp;
          <a v-if='item.active' class='active'>[Active]</a>
          <a v-if='!item.active' class='inactive'>[Inactive]</a>
          <a class='delete' v-on:click='deleteDiagnosis(item.id,index)'>[Delete]</a>
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
    <div class='cell small-12' style='display:flex;'>
      <div class="tiny switch" style='margin-top: 20px;'>
        <input class="switch-input" id="exampleSwitch" type="checkbox" name="exampleSwitch">
        <label class="switch-paddle" for="exampleSwitch">
          <span class="show-for-sr">Download Kittens</span>
        </label>
      </div>
      <p style='margin-left: 10px; margin-top: 20px;'>
        Show inactive diagnoses
      </p>
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
        showInactive: false,
      }
    },

    methods: {
      toggleAdd() {
        this.addHidden = !this.addHidden;
      },

      disable() {},

      deleteDiagnosis(id,index) {

        axios.post('/ajax/diagnosis/' + id + '/delete', {

        })
        .then(function (response) {
          console.log(response);
        })
        .catch(function (error) {
          console.log(error);
        });

        this.list.splice(index,1);

      },

      save() {

        var result = this.postSaveDiagnosis();

        var item = {
          id: result,
          name: this.name,
          active: 1,
        };

        console.log(item);

        this.list.push(item);
        this.addHidden = true;

      },

      postSaveDiagnosis() {
        result = axios.post('/ajax/encouter/' + this.encounter.id + '/diagnosis/', {
          name: this.name,
          code: this.code,
        }).then(function (response) {
          console.log('Returned id: ' + response.data.id);
          return response.data.id;
        });
      }
    }
  }

</script>
