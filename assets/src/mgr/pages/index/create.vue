<template>
  <MmxModal v-model="record" v-bind="properties">
    <template #form-fields>
      <FormsEvent v-model="record" />
    </template>
  </MmxModal>
</template>

<script setup lang="ts">
const record = ref({
  title: '',
  active: true,
})

const properties = {
  url: 'mgr/events',
  title: $t('models.event.title_one'),
  method: 'put',
}
</script>
