<template>
  <MmxTable ref="table" v-bind="{url, fields, headerActions, tableActions, filters, rowClass}">
    <RouterView />
  </MmxTable>
</template>

<script setup lang="ts">
const url = 'mgr/events'
const table = ref()
const headerActions = computed(() => {
  return [{route: {name: 'index-create'}, icon: 'plus', title: $t('models.event.title_one')}]
})
const fields = computed(() => {
  return [
    {key: 'id', label: $t('models.event.id'), sortable: true},
    {key: 'title', label: $t('models.event.title'), sortable: true},
    {key: 'date_start', label: $t('models.event.date_start'), sortable: true, formatter: formatDate},
    {key: 'created_at', label: $t('models.event.created_at'), sortable: true, formatter: formatDate},
    {key: 'updated_at', label: $t('models.event.updated_at'), sortable: true, formatter: formatDate},
  ]
})
const tableActions = computed(() => {
  return [
    {route: {name: 'index-id-edit'}, icon: 'edit', title: $t('actions.edit')},
    {function: table.value?.delete, icon: 'times', title: $t('actions.delete'), variant: 'danger'},
  ]
})
const filters = ref({query: ''})

function rowClass(item: any) {
  return item && !item.active ? 'inactive' : ''
}
</script>
