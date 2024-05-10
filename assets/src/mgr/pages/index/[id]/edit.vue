<template>
  <MmxModal v-model="record" v-bind="properties">
    <template #form-fields>
      <FormsEvent v-model="record" />
    </template>
  </MmxModal>
</template>

<script setup lang="ts">
const record = ref({})

const properties = {
  url: 'mgr/events/' + useRoute().params.id,
  title: $t('models.event.title_one'),
  updateKey: 'mgr-events',
  method: 'patch',
}

try {
  record.value = await useGet(properties.url)
} catch (e) {
  console.error(e)
  useError()
}
</script>
