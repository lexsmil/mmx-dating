<template>
  <div>
    <BRow class="mb-3">
      <BCol>
        <BFormGroup :label="$t('models.event.title_one')">
          <MmxInputComboBox v-model="filters.event_id" url="mgr/events" @change="table.refresh()"></MmxInputComboBox>
        </BFormGroup>
      </BCol>
      <BCol>
        <BFormGroup :label="$t('models.request.sex')">
          <BFormSelect
            v-model="filters.sex"
            :default="null"
            :options="[
              {value: null, text: $t(`models.request.sex`)},
              {value: 0, text: $t(`models.request.sex.man`)},
              {value: 1, text: $t(`models.request.sex.woman`)},
            ]"
            required
          >
          </BFormSelect>
        </BFormGroup>
      </BCol>
      <BCol>
        <BFormGroup label="_">
          <BButton variant="primary" @click="resetFilters"> Сбросить фильтры </BButton>
        </BFormGroup>
      </BCol>
    </BRow>

    <MmxTable ref="table" v-bind="{url, fields, headerActions, tableActions, filters, rowClass, sort, dir}">
      <RouterView />
    </MmxTable>
  </div>
</template>

<script setup lang="ts">
const url = 'mgr/requests'
const table = ref()
const sort = 'id'
const dir = 'desc'
const headerActions = computed(() => {
  return [{route: {name: 'request-create'}, icon: 'plus', title: $t('models.request.title_one')}]
})
const fields = computed(() => {
  return [
    {key: 'id', label: $t('models.request.id'), sortable: true},
    {key: 'name', label: $t('models.request.name'), sortable: true},
    {key: 'sex', label: $t('models.request.sex'), sortable: true, formatter: formatSex},
    {key: 'age', label: $t('models.request.age'), sortable: true},
    {key: 'phone', label: $t('models.request.phone'), sortable: true},
    {key: 'created_at', label: $t('models.event.created_at'), sortable: true, formatter: formatDate},
  ]
})
const tableActions = computed(() => {
  return [
    {route: {name: 'request-id-edit'}, icon: 'edit', title: $t('actions.edit')},
    {function: table.value?.delete, icon: 'times', title: $t('actions.delete'), variant: 'danger'},
  ]
})
const filters = ref({query: '', event_id: null, sex: null})

function rowClass(item: any) {
  return item && !item.active ? 'inactive' : ''
}
function resetFilters() {
  filters.value.query = ''
  filters.value.event_id = null
  filters.value.sex = null
}
</script>
