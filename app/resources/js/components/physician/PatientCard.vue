<template>
    <div class='patient-card'>
      <div class='tag' style='border-right:none;'>
        <p>
          Patient
        </p>
      </div>
      <div class='name' style='border-left:none'>
        <p>
          {{ encounter.patient.formattedName.fullname }}
        </p>
      </div>
      <div class='details'>
        <p>
          {{ encounter.patient.details }}
        </p>
      </div>
      <div class='chief-complaint'>
        <p class='text'>
          {{ encounter.chief_complaint }}
        </p>
        <p class='label'>
          chief complaint
        </p>
      </div>
      <div class='reminders' style='border-right:none;'>
        <p class='text'>
          no reminders
        </p>
        <p class='label'>
          reminders
        </p>
      </div>
      <div class='link' style='border-left:none;'>
        <p>
          <a href=''><i class="fas fa-eye"></i>&nbsp;Go to Patient</a>
        </p>
      </div>
    </div>
  </div>

</template>

<script>

  export default {
    props: ['data'],
    data: function() {
      return {
        encounter: this.data,
      }
    }
  }
</script>
