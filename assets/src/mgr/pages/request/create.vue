<template>
  <MmxModal v-model="record" v-bind="properties">
    <template #form-fields>
      <FormsRequest v-model="record" />
    </template>
  </MmxModal>
</template>

<script setup lang="ts">
const record = ref({
  title: '',
  active: true,
})

const properties = {
  url: 'mgr/requests',
  title: $t('models.request.title_one'),
  method: 'put',
}
</script>
