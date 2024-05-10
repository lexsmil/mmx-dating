<template>
  <div>
    <BFormGroup :label="$t('models.event.title')">
      <BFormInput v-model="record.title" required />
    </BFormGroup>

    <BFormGroup :label="$t('models.event.date_start')">
      <VueDatePicker
        v-model="record.date_start"
        time-picker-inline
        locale="ru-RU"
        model-type="yyyy-MM-dd HH:mm:ss"
        format="dd.MM.yyyy HH:mm"
        select-text="Выбрать"
        cancel-text="Отмена"
      ></VueDatePicker>
    </BFormGroup>

    <BFormGroup class="mt-3">
      <BFormCheckbox v-model="record.active">{{ $t('models.event.active') }}</BFormCheckbox>
    </BFormGroup>
  </div>
</template>

<script setup lang="ts">
const props = defineProps({
  modelValue: {
    type: Object,
    required: true,
  },
})

const emit = defineEmits(['update:modelValue'])
const record: any = computed({
  get() {
    return props.modelValue
  },
  set(newValue: number) {
    emit('update:modelValue', newValue)
  },
})
</script>
